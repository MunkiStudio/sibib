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

	protected function flickrInit(){
		$this->load->library('phpFlickr');
		$api_key = $this->config->item('flickr_key');
		$secret = $this->config->item('flickr_secret');
		$this->phpflickr->api_key = $api_key;
    	$this->phpflickr->secret = $secret;
    	$this->phpflickr->setToken($this->config->item('flickr_token'));
    }

    protected function uploadImage($title,$descripcion){
    	$config['upload_path'] = './uploads/';
		$config['allowed_types'] = 'gif|jpg|png';
		$this->load->library('upload', $config);
		$result = $this->upload->do_upload('imagen');
		if(!$result){
			$error = array('error' => $this->upload->display_errors());
			return array('error'=>$error,'data'=>null);
			
		}else{
			$image_data = $this->upload->data();
			$path = $image_data['full_path'];
			$this->flickrInit();
			$data = $this->phpflickr->sync_upload($path,$title,$descripcion);
			if($data == -1){
				return array('error'=>$data = 'Sorry, your server must support CURL in order to upload files'
				,'data' =>null);
			}elseif($data == false){
				return array('error'=>$this->phpflickr->error_msg,'data' =>null);
			}else{
				unlink($path);	

			}
			$data = $this->phpflickr->photos_getSizes($data);
			return array('error'=>false,'data' =>$data[5]['source']);
		}	
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