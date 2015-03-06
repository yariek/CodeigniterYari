<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this -> load -> helper('form');
	}

	public function index()
	{
		$data['contenido'] = 'home/index';
		$this->load->view('template', $data);
	} 

	public function acerca_de()
{
  $data['contenido']='home/acerca_de';
  $this->load->view('template',$data); 
}

	public function funcion1()
	{
		$data['contenido'] = 'home/funcion1';
		$this->load->view('template', $data);
	} 

	public function funcion2()
	{
		$data['contenido'] = 'home/funcion2';
		$this->load->view('template', $data);
	} 
}
?>


