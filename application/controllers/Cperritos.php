<?php 
/**
  * 
  */
 class CPERRITOS extends CI_Controller
 {
 	
 	function __construct()
 	{
 		parent::__construct();
    $this->load->model('Mperritos');
    $this->load->model('Musuario');

 	}
 	public function index(){
 		$this->load->view('Mascotas/Perritos');
 	}

  public function guardar(){
    //perritos
    $param['Nombre'] = $this->input->post('txtNombre');
    $param['Raza'] = $this->input->post('txtRaza');
    $param['Tamaño'] = $this->input->post('intTamaño');
    $param['Color'] = $this->input->post('txtColor');
    $param['Edad'] = $this->input->post('intEdad');
    //Usuario
    $param['Hora'] = $this->input->post('timeHora');
    $param['Fecha'] = $this->input->post('dateFecha');

    $lastId = $this->Mperritos->guardar($param);

    if ($lastId = 0) {
      $paramUsu['idperritos'] = $lastId;
      $this->musuario->guardarUsuario($paramUsu);
    }
  }
 } ?>