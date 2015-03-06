<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

 class HolaMundo extends CI_Controller{
 	
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
	/** Si no tecleo nada después del nombre del controlador se ejecutara la vista
                 holamundo.php ya que es la que se encuentra dentro de la función index **/

	public function nuevo()
	{
		$this->load->view('formulario');
                       /** Para ejecutar el programa escribimos en el URL lo siguiente:
                            localhost/codeigniter/index.php/nuevo para que se ejecute esta
                            función **/
	}

	public function recibirdatos() {
            /** Esta función será la que se ejecute cuando oprima el botón Alta de alumno
           que se fijo con la orden <?= form_submit('','Alta de Alumno') ?> **/

		$data = array(
		/** Creamos un arreglo de nombre data ($data) y le asignamos los valores 
                            tecleados en el formulario (ncontrol, nombre y correo) **/
			'ncontrol' => $this->input->post('ncontrol'),
			'nombre' => $this->input->post('nombre'),
			'correo' => $this->input->post('correo')
		);

		$this->itch_model->crearCurso($data);
		/** Ejecutamos la función crearCurso del modelo itch (itch_model) y le enviamos la variable data ($data).**/
	}
}
?>


  

