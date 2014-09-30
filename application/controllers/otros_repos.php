<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Otros_repos extends CI_Controller {

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
		$this->load->view('otros-repos',$data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */