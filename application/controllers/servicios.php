<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Servicios extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->_init();
	}

	private function _init(){
		$this->output->set_template('default');
    date_default_timezone_set('America/Santiago');
    $this->load->model('servicios_model', 'servicios');
	}

	public function index()
	{
    $servicios = $this->servicios->get(1);
		$data = array(
			'images_folder' => '/resources/images/',
      'servicios' => $servicios
		);
		$this->load->view('servicios',$data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
