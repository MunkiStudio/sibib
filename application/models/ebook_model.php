<?php
class Ebook_model extends MY_Model{
	public $_table = 'ebooks';

	public $validate = array(
		array('field' => 'titulo',
			'label' => 'titulo',
			'rules' => 'required'),
		array('field' => 'autor',
			'label' => 'autor',
			'rules' => 'required'),
		array('field' => 'url',
			'label' => 'url',
			'rules' => 'required'),
		array('field' => 'year',
			'label' => 'year',
			'rules' => 'required'),
			array('field' => 'categoria',
				'label' => 'categoria',
				'rules' => 'required')
	);

  public $belongs_to = array('categoria' => array('model' => 'categoria_model'));

	public function search($term){
		$this->db->like('titulo',$term);
		$this->db->or_like('descripcion',$term);
		return $this;
	}

}
