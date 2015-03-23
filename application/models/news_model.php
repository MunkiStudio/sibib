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

	public $before_create = array( 'created_at', 'updated_at' );
  public $before_update = array( 'updated_at' );

}
