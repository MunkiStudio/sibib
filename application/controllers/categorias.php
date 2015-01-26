<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Categorias extends CI_Controller {

  function __construct(){
    parent::__construct();
    $this->_init();
  }

  private function _init(){
    $this->output->set_template('default');
    $this->load->helper('form');
    $this->load->model('categoria_model', 'categorias');
    $this->load->library('pagination');
    $this->load->config('pagination');
  }

  public function index()
  {
    $config['total_rows'] = $this->categorias->count_all();
    $config['base_url'] = base_url('/categorias');
    $config['uri_segment'] = 2;
    $this->pagination->initialize($config);
    $categorias = $this->categorias->limit($this->config->item('per_page'),$this->uri->segment(2))->get_all();
    $data = array(
      'images_folder' => '/resources/images/',
      'categorias' => $categorias,
      'links' => $this->pagination->create_links()
    );
    $this->load->view('ebooks-categorias',$data);
  }

  public function search(){
    $term = $this->input->post('search');

    $data = array(
      'images_folder' => '/resources/images/',
      'categorias' => $this->categorias->search($term)->get_all()
    );
    $this->load->view('ebooks-categorias',$data);
  }
}

/* End of file categorias.php */
/* Location: ./application/controllers/categorias.php */
