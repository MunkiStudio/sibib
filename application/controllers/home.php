<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->_init();
	}

	private function _init(){
		$this->output->set_template('default');
		date_default_timezone_set('America/Santiago');
		$this->load->model('news_model', 'news');
	}

	public function index()
	{

		$noticias = $this->news->limit(1)->order_by('updated_at','desc')->get_all();
		$data = array(
			'images_folder' => '/resources/images/',
			'noticias' => $noticias
		);

		$this->load->view('home',$data);
	}
}

/* End of file home.php */
/* Location: ./application/controllers/home.php */
