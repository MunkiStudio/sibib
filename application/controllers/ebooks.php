<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Ebooks extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->_init();
	}

	private function _init(){
		$this->output->set_template('default');
		$this->load->helper('form');
		$this->load->model('ebook_model', 'ebooks');
	}
	
	public function index()
	{	
		
		$data = array(
			'images_folder' => '/resources/images/',
			'ebooks' => $this->ebooks->get_all()
		);
		$this->load->view('ebooks',$data);
	}

	public function search(){
		$term = $this->input->post('search');
		$data = array(
			'images_folder' => '/resources/images/',
			'ebooks' => $this->ebooks->search($term)->get_all()
		);
		$this->load->view('ebooks',$data);
	}
}

/* End of file ebooks.php */
/* Location: ./application/controllers/ebooks.php */