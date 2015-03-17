<?php
class Otrosrepos_model extends MY_Model{
	public $_table = 'otrosrepos';

	public $validate = array(
    array('field' => 'url',
      'label' => 'url',
      'rules' => 'required'),
    array('field' => 'imagen',
      'label' => 'imagen'),
    array('field' => 'titulo',
      'label' => 'tiulo',
      'rules' => 'required'),
    array('field' => 'locked',
      'label' => 'bloqueado'),
    array('field' => 'descripcion',
      'label' => 'descripcion')

  );

}
