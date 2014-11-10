<?php

class MY_Controller extends CI_Controller{
	/**
     * The arguments for the PUT request method
     *
     * @var array
     */
    protected $_put_args            = array();


	function __construct(){
		parent::__construct();
		$this->load->library('tank_auth');
		$this->lang->load('tank_auth');
		$this->load->library('pagination');
		$this->load->config('pagination');
		$this->model = null;
		$this->base_url = null;
	}


    protected function put(){
		parse_str(file_get_contents('php://input'), $this->_put_args);
    }
    

	protected function _go_login(){
		if (!$this->tank_auth->is_logged_in()) {
			redirect('/auth/login/');
		}
	}

	function index(){
		$this->_go_login();
		$config['total_rows'] = $this->model->count_all();
		$config['base_url'] = $this->base_url;
		$this->pagination->initialize($config);
	}

	function edit(){
		$this->_go_login();
	}

	function add(){
		$this->_go_login();
		
	}

	function save(){
		$this->_go_login();
	}

	function delete(){
		$this->_go_login();
	}
}