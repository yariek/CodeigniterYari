<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

 class Acerca_de extends CI_Controller{
 	
 	function __construct(){
 		parent::__construct();

 		$this -> load -> helpers('mihelper');
 	

		$this -> load -> helpers('form');
		/** Cargo el formulario **/

		$this -> load -> model ('itch_model');
		/** Cargo el modelo **/

}

  public function index()
	{
		$this->load->view('Holamundo');
	}
	
     
public function acerca_de()
{
  $this->load->view('home/acerca_de');
}
