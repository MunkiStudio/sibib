<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin_servicios extends My_Controller{

  function __construct(){
    parent::__construct();
    $this->output->set_template('admin');
    $this->load->model('servicios_model','servicios');
    $this->model = $this->servicios;
    $this->base_url = '/admin/servicios';
  }

  function index(){
    parent::index();
    $data = array(
      'servicios' => $this->model->get(1),
      'edit' => false
    );
    $this->load->view('/admin/servicios',$data);
  }

  function edit(){
    parent::edit();
    $servicios = $this->model->get(1);
    $data = array(
      'servicios' => $servicios,
      'errors' => $this->session->flashdata('error'),
      'edit' => true
    );
    $this->load->view('/admin/servicios',$data);
  }
  function save(){
    parent::save();
    if($_SERVER['REQUEST_METHOD']==='POST'){
      $data = $this->input->post(NULL,TRUE);
      $insert = array(
        'texto' => $data['texto']
      );
      $this->model->update(1,$insert);
    }
    redirect('/admin/servicios',true);
  }
}
