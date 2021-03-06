<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin_categorias extends My_Controller {

  function __construct(){
    parent::__construct();
    $this->output->set_template('admin');
    $this->load->model('categoria_model', 'categorias');
    $this->model = $this->categorias;
    $this->base_url = "/admin/categoria-ebooks/";
  }


  function index(){
    parent::index();
    $this->flickrInit();
        $data = array(
      'ebooks' => $this->model->limit($this->config->item('per_page'), $this->uri->segment(3))->get_all(),
      'links' => $this->pagination->create_links(),
      'errors' => $this->session->flashdata('error')
    );
    $this->load->view('/admin/categorias-ebooks',$data);
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
        $this->load->view('/admin/categoria-ebook',$data);
      }else{
        redirect('/admin/categorias-ebooks');
      }
    }else{
      redirect('/admin/categorias-ebooks');
    }


  }

  function add(){
    parent::add();
    $data = array(
      'errors' => $this->session->flashdata('errors'),
      'token' => $this->session->flashdata('token'),
      'ebook'=>false
    );
    $this->load->view('/admin/categoria-ebook',$data);
  }

  function save(){
    parent::save();
    if($_SERVER['REQUEST_METHOD']==='POST'){
      $data = $this->input->post(NULL,TRUE);

      $insert = array(
        'titulo' => $data['titulo'],
        'descripcion' => $data['descripcion']
      );

      if (!empty($_FILES['imagen']['name'])) {
        $result = $this->uploadImage($insert['titulo'],$insert['descripcion']);
        if(!$result['error']){
          $insert['imagen'] =  $result['data'];
        }else{
          $error = array('error' => $result['error']);
          $this->session->set_flashdata('errors',$error);
          redirect('/admin/categorias-ebooks/new');
        }
      }

      if(isset($data['id'])){
        $this->model->update($data['id'],$insert);
      }else{
        $result = $this->model->insert($insert);
        if(!$result){
          $this->session->set_flashdata('error','Required fields');
          $this->load->view('/admin/categoria-ebook',$data);
          return;
        }

      }
    }

    redirect('/admin/categorias-ebooks',true);
  }

  function delete(){
    parent::delete();
    if($_SERVER['REQUEST_METHOD']==='POST'){
      $id =$this->input->post('id',TRUE);
      $this->model->delete($id);
    }
    redirect('/admin/categorias-ebooks');
  }


}
