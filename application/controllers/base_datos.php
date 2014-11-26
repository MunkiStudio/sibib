<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Base_datos extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->_init();
	}

	private function _init(){
		$this->output->set_template('default');
		$this->load->helper('form');
		$this->load->model('basedatos_model', 'basedatos');
		$this->load->library('pagination');
		$this->load->config('pagination');
	}
	
	public function index()
	{	
		$config['total_rows'] = $this->basedatos->count_all();
		$config['base_url'] = base_url('/basedatos');
		$config['uri_segment'] = 2;
		$this->pagination->initialize($config);
		$basedatos = $this->basedatos->limit($this->config->item('per_page'),$this->uri->segment(2))->get_all();
		$data = array(
			'images_folder' => '/resources/images/',
			'basedatos' => $basedatos,
			'links' => $this->pagination->create_links()
		);
		$this->load->view('base-datos',$data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */