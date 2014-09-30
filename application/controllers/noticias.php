<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Noticias extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->_init();
	}

	private function _init(){
		$this->output->set_template('default');
		date_default_timezone_set('America/Santiago');
	}
	
	public function index()
	{
		$data = array(
			'images_folder' => '/resources/images/',
			'noticias' => $this->news->limit(20)->get_all()
		);
		$this->load->view('noticias',$data);
	}

	public function show($id){
		$data = array(
			'images_folder' => '/resources/images/',
			'noticia' => $this->news->get($id),
			'noticias_sidebar' => $this->news->limit(6)->get_all(),
			'query' => $this->db->last_query()
		);
		$this->load->view('noticia-detalle',$data);	
	}
}
