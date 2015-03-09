<?php 
/** Nombre del controlador: itch.php **/
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Itch extends CI_Controller {
	function __construct(){
		parent::__construct();

		$this -> load -> helpers('mihelper');
		$this -> load -> helper('form');
		$this -> load -> model ('itch_model');
	}
	
	/*public function index()
	{
		$data['alumnos'] = $this->itch_model->leealumnos();
		$this->load->view('alumnos',$data);
	} */

	public function index()
	{
		//$this->load->view('holamundo');

		$data['segmento'] = $this->uri->segment(3);
		if(!$data['segmento']){
			$data['alumnos'] = $this->itch_model->leealumnos();
		}
		else{
			$data['alumnos'] = $this->itch_model->leealumno($data['segmento']);	
		}
		$this->load->view('alumnos',$data);
	}


	public function nuevoAlumno()
	{
		$this->load->view('formulario');
	}

	public function recibirDatos() {
		$data = array(
			'ncontrol' => $this->input->post('ncontrol'),
			'nombre' => $this->input->post('nombre'),
			'correo' => $this->input->post('correo')
		);
		$this->itch_model->GuardaAlumno($data);		
	}
}
?>
