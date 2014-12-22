<?php
class Basedatos_model extends MY_Model{
	public $_table = 'basedatos';
	
	public $validate = array(
		array('field' => 'url',
			'label' => 'url',
			'rules' => 'required'),
		array('field' => 'imagen',
			'label' => 'imagen'),
		array('field' => 'titulo',
			'label' => 'tiulo',
			'rules' => 'required'),
		array('field' => 'descripcion',
			'label' => 'descripcion',
			'rules' => 'required'),
		array('field' => 'bloqueado',
			'label' => 'bloqueado')

	);
	
}
?>