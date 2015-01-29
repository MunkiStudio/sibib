<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Otros_repos extends CI_Controller {

	function __construct(){
    parent::__construct();
    $this->_init();
  }

  private function _init(){
    $this->output->set_template('default');
    $this->load->helper('form');
    $this->load->model('otrosrepos_model', 'otrosrepos');
    $this->load->library('pagination');
    $this->load->config('pagination');
  }

  public function index()
  {
    $config['total_rows'] = $this->otrosrepos->count_all();
    $config['base_url'] = base_url('/otros_repos');
    $config['uri_segment'] = 2;
    $this->pagination->initialize($config);
    $otrosrepos = $this->otrosrepos->limit($this->config->item('per_page'),$this->uri->segment(2))->get_all();
    $data = array(
      'images_folder' => '/resources/images/',
      'otrosrepos' => $otrosrepos,
      'links' => $this->pagination->create_links()
    );
    $this->load->view('otros-repos',$data);
  }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
