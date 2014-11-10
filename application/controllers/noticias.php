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
		$this->load->library('pagination');
		$this->load->config('pagination');
		$config['total_rows'] = $this->news->count_all();
		$config['base_url'] = base_url('/noticias');
		$config['uri_segment'] = 2;
		$this->pagination->initialize($config);
		$data = array(
			'images_folder' => '/resources/images/',
			'noticias' => $this->news->limit($this->config->item('per_page'),$this->uri->segment(2))->get_all(),
			'links' => $this->pagination->create_links()
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
