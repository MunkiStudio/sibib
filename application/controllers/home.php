<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

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

		$noticias = $this->news->limit(2)->get_all();
		$noticias_sidebar = $this->news->limit(6,2)->get_all();
		$noticias_header = $this->news->limit(1)->get_all();
		$data = array(
			'images_folder' => '/resources/images/',
			'noticias' => $noticias,
			'noticias_sidebar' => $noticias_sidebar,
			'noticias_header' => $noticias_header,
			'query' => $this->db->last_query()
		);

		$this->load->view('home',$data);
	}
}

/* End of file home.php */
/* Location: ./application/controllers/home.php */