<?php 
/**
  * 
  */
 class MPerritos extends CI_Model
 {
 	
 	function __construct()
 	{
 		parent::__construct();
 	}
 	public function guardar($param){
 		$campos = array(
 			'Nombre' => $param['Nombre'],
      'Raza' => $param['Raza'],
      'Tamaño' => $param['Tamaño'],
      'Color' => $param['Color'],
      'Edad' => $param['Edad'],
 		);

    $this->db->insert('mascotas',$campos);

    return $this->db->insert_id();
 	}
 } ?>