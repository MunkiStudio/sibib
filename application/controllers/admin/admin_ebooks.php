<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin_ebooks extends My_Controller {

	function __construct(){
		parent::__construct();
		$this->output->set_template('admin');
		$this->load->model('ebook_model', 'ebooks');
		$this->model = $this->ebooks;
		$this->base_url = "/admin/ebooks/";
	}
	

	function index(){
		parent::index();
        $data = array(
			'ebooks' => $this->model->limit($this->config->item('per_page'), $this->uri->segment(3))->get_all(),
			'links' => $this->pagination->create_links()
		);
		$this->load->view('/admin/ebooks',$data);	
	}
	function edit($id=null){
		parent::edit();
		if($id){
			$ebook = $this->model->get($id);
			if($ebook!=null){
				$data = array(
					'ebook' => $ebook,
					'errors' => $this->session->flashdata('error')
				);
				$this->load->view('/admin/ebook',$data);	
			}else{
				redirect('/admin/ebooks');
			}
		}else{
			redirect('/admin/ebooks');
		}
		
		
	}

	function add(){
		parent::add();
		$data = array(
			'errors' => $this->session->flashdata('error'),
			'ebook'=>false
		);
		$this->load->view('/admin/ebook',$data);	
	}

	function save(){
		parent::save();
		if($_SERVER['REQUEST_METHOD']==='POST'){
			$data = $this->input->post(NULL,TRUE);
			$insert = array(
				'titulo' => $data['titulo'],
				'autor' => $data['autor'],
				'url' => $data['url'],
				'year' => $data['year'],
			);
			if(isset($data['imagen'])){
				$config['upload_path'] = './uploads/';
				$config['allowed_types'] = 'gif|jpg|png';
				$this->load->library('upload', $config);	
				$result = $this->upload->do_upload();
				if(!$result){
					$error = array('error' => $this->upload->display_errors());
					$this->session->set_flashdata('error',$error);
					redirect('/admin/ebooks/new');	
				}else{
					$image_data = array('upload_data' => $this->upload->data());
					$insert['imagen'] = $image_data['full_path'];
				}
			}
			if(isset($data['id'])){
				$this->model->update($data['id'],$insert);
			}else{
				$this->model->insert($insert);	
			}
			
		}
		redirect('/admin/ebooks',true);
	}

	function delete(){
		parent::delete();
		if($_SERVER['REQUEST_METHOD']==='POST'){
			$id =$this->input->post('id',TRUE);
			$this->news->delete($id);
		}
		redirect('/admin/ebooks');
	}


}