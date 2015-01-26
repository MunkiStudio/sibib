<?php
/**
Categorías Ebooks
*/
class Categoria_model extends MY_Model{
  public $_table = 'categorias_ebooks';

  public $validate = array(
    array('field' => 'titulo',
      'label' => 'titulo',
      'rules' => 'required')

  );

  public function search($term){
    $this->db->like('titulo',$term);
    $this->db->or_like('descripcion',$term);
    return $this;
  }

}
