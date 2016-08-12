<?php

class Home extends CI_controller {
	public function index()
	{
		//Cargamos la vista haciendo uso de $this
		/*Cargamos el objeto 'load' y después el método
		  view, al cual le pasamos la dirección relativa
		  (desde views), de la vista que queramos cargar. */
		$this->load->view("home");
	}
}

?>