<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller
{
	function __construct(){
		parent::__construct();
		$this->load->library('tank_auth');
		$this->lang->load('tank_auth');
		$this->output->set_template('admin');
		
	}
	
	function index(){
		$this->go_login();
		$this->load->view('/admin/dashboard');
	}
	

	function links(){
		$this->go_login();
		$this->load->view('/admin/links');
	}

	function ebooks(){
		$this->go_login();
		$this->load->view('/admin/ebooks');
	}

	private function go_login(){
		if (!$this->tank_auth->is_logged_in()) {
			redirect('/auth/login/');
		}
	}

}
/* End of file admin.php */
/* Location: ./application/controllers/admin.php */