<?php if (! defined('BASEPATH')) exit('No direct script access allowed');

class itch_model extends CI_Model {
	function __construct(){
		parent::__construct();
		$this -> load -> database();
	}
	function crearCurso($data) {
		$this ->db->insert('alumnos',array('ncontrol'=>$data['ncontrol'], 'nombre'=>$data['nombre'], 'correo'=>$data['correo']));
	}

	function GuardaAlumno($data) {
		$this ->db->insert('alumnos',array('ncontrol'=>$data['ncontrol'], 'nombre'=>$data['nombre'], 'correo'=>$data['correo']));
	}
	

	function leealumno($id){
		$this->db->where('id',$id);
		$query = $this->db->get('alumnos');
		if($query->num_rows() > 0) return $query;
		else return false;
	}
	function leealumnos(){
		$query = $this->db->get('alumnos');
		if($query->num_rows() > 0) return $query;
		else return false;
	}


}
?>
