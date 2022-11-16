<?php 
/**
  * 
  */
 class Cgatitos extends CI_Controller
 {
 	
 	function __construct()
 	{
 		parent::__construct();
 	}
 	public function index(){
 		$this->load->view('Mascotas/Gatitos');
 	}
 } ?>