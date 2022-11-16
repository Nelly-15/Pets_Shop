<?php 
/**
  * 
  */
 class MUSUARIO extends CI_Model
 {
 	
 	function __construct()
 	{
 		parent::__construct();
 	}

 	public function guardarUsuario($param){
 		$campos = array(
 			'Hora' => $param['Hora'],
 			'Fecha' => date('Y-m-d',str_replace("/", '-', $param['Fecha']))
 		);

 		$this->db->insert('usuario',$campos);
 	}
 } ?>