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
		$this->load->library('pagination');
		$this->load->config('pagination');
	}

	public function index()
	{
		$config['total_rows'] = $this->ebooks->count_all();
		$config['base_url'] = base_url('/ebooks');
		$config['uri_segment'] = 2;
		$this->pagination->initialize($config);
		$ebooks = $this->ebooks->limit($this->config->item('per_page'),$this->uri->segment(2))->order_by('titulo')->get_all();
		$data = array(
			'images_folder' => '/resources/images/',
			'ebooks' => $ebooks,
			'links' => $this->pagination->create_links()
		);
		$this->load->view('ebooks',$data);
	}

  public function categoria(){
    $config['total_rows'] = $this->ebooks->count_by(array('categoria' => $this->uri->segment(3)));
    $config['base_url'] = base_url('/ebooks');
    $config['uri_segment'] = 4;
    $this->pagination->initialize($config);
    $ebooks = $this->ebooks->limit($this->config->item('per_page'),$this->uri->segment(2))->get_many_by('categoria',$this->uri->segment(3));
    $data = array(
      'images_folder' => '/resources/images/',
      'ebooks' => $ebooks,
      'links' => $this->pagination->create_links()
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
