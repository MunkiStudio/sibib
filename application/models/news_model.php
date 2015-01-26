<?php
class News_model extends MY_Model{
	public $_table = 'noticias';

	public $validate = array(
		array('field' => 'titulo',
			'label' => 'titulo',
			'rules' => 'required'),
		array('field' => 'contenido',
			'label' => 'contenido',
			'rules' => 'required')
	);
}
