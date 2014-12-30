<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin_noticias extends MY_Controller {

	function __construct(){
		parent::__construct();
		$this->output->set_template('admin');
		$this->load->model('news_model', 'news');
		$this->model = $this->news;
		$this->base_url = "/admin/noticias/";
	}


	function index(){
		parent::index();
		$data = array(
			'noticias' => $this->model->limit($this->config->item('per_page'), $this->uri->segment(3))->get_all(),
			'links' => $this->pagination->create_links()
		);
		$this->load->view('/admin/noticias',$data);
	}
	function edit($id=null){
		parent::edit();
		if($id){
			$noticia = $this->model->get($id);
			if($noticia!=null){
				$data = array(
					'noticia' => $noticia,
					'errors' => $this->session->flashdata('error')
				);
				$this->load->view('/admin/noticia',$data);
			}else{
				redirect('/admin/noticias');
			}
		}else{
			redirect('/admin/noticias');
		}


	}

	function add(){
		parent::add();
		$data = array(
			'errors' => $this->session->flashdata('errors'),
			'noticia'=>false
		);
		$this->load->view('/admin/noticia',$data);
	}

	function save(){
		parent::save();
		if($_SERVER['REQUEST_METHOD']==='POST'){
			$data = $this->input->post(NULL,TRUE);
			$insert = array(
				'titulo' => $data['titulo'],
				'contenido' => $data['contenido'],
			);

      $result = $this->uploadImage($insert['titulo'],'Noticia en Sibib');
      if(!$result['error']){
        $insert['imagen'] =  $result['data'];
      }else{
        $error = $result['error'];
        $this->session->set_flashdata('errors',$error);
        redirect('/admin/noticias/new');
      }


			if(isset($data['id'])){
				$this->model->update($data['id'],$insert);
			}else{
				$this->model->insert($insert);
			}

		}
		redirect('/admin/noticias',true);
	}

	function delete(){
		parent::delete();
		if($_SERVER['REQUEST_METHOD']==='POST'){
			$id =$this->input->post('id',TRUE);
			$this->model->delete($id);
		}
		redirect('/admin/noticias');
	}


}
