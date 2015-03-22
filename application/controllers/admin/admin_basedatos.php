<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin_basedatos extends My_Controller {

	function __construct(){
		parent::__construct();
		$this->output->set_template('admin');
		$this->load->model('basedatos_model', 'basedatos');
		$this->model = $this->basedatos;
		$this->base_url = "/admin/basedatos/";
	}


	function index(){
		parent::index();
		$this->flickrInit();
        $data = array(
			'basedatos' => $this->model->limit($this->config->item('per_page'), $this->uri->segment(3))->get_all(),
			'links' => $this->pagination->create_links(),
			'errors' => $this->session->flashdata('error')
		);
		$this->load->view('/admin/basedatos',$data);
	}
	function edit($id=null){
		parent::edit();
		if($id){
			$basedato = $this->model->get($id);
			if($basedato!=null){
				$data = array(
					'basedato' => $basedato,
					'errors' => $this->session->flashdata('error')
				);
				$this->load->view('/admin/basedato',$data);
			}else{
				redirect('/admin/basedatos');
			}
		}else{
			redirect('/admin/basedatos');
		}


	}

	function add(){
		parent::add();
		$data = array(
			'errors' => $this->session->flashdata('errors'),
			'basedato'=>false
		);
		$this->load->view('/admin/basedato',$data);
	}

	function save(){
		parent::save();
		if($_SERVER['REQUEST_METHOD']==='POST'){
			$data = $this->input->post(NULL,TRUE);

			$insert = array(
				'titulo' => $data['titulo'],
				'url' => $data['url'],
				'descripcion' => $data['descripcion'],
				'locked' => array_key_exists('bloqueado',$data) ? '1':'0'
			);
			if(array_key_exists('imagen', $data)){
				$result = $this->uploadImage($insert['titulo'],$insert['descripcion']);
				if(!$result['error']){
					$insert['imagen'] =  $result['data'];
				}else{
					$error = array('error' => $result['error']);
					$this->session->set_flashdata('errors',$error);
					redirect('/admin/basedatos/new');
				}
			}


			if(isset($data['id'])){
				$this->model->update($data['id'],$insert);
			}else{
				$result = $this->model->insert($insert);
				if(!$result){
					$this->session->set_flashdata('errors',array('Required fields'));
					redirect('/admin/basedatos/new');
					return;
				}

			}
		}

		redirect('/admin/basedatos',true);
	}

	function delete(){
		parent::delete();
		if($_SERVER['REQUEST_METHOD']==='POST'){
			$id =$this->input->post('id',TRUE);
			$this->model->delete($id);
		}
		redirect('/admin/basedatos');
	}


}
