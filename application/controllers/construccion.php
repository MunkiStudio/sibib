<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Construccion extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->_init();
	}

	private function _init(){
		$this->output->set_template('default');
	}
	
	public function index()
	{
		$data = array(
			'images_folder' => '/resources/images/'
		);
		$this->load->view('construccion',$data);
	}
}
