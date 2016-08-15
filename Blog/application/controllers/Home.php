<?php
class Home extends CI_controller {
	public function index()
	{
		//Cargamos la vista haciendo uso de $this
		/*Cargamos el objeto 'load' y después el método
		  view, al cual le pasamos la dirección relativa
		  (desde views), de la vista que queramos cargar. */
		$data = array('title' => 'Home');
		$this->load->view("guest/head", $data);

		$data = array('app' => 'Blog');
		$this->load->view("guest/nav", $data);

		$data = array('post' => 'Blog', 'descripcion' => 'Bienvenido a mi sitio personal!');
		$this->load->view("guest/header", $data);
		/*
		 * Cargamos el modelo de manera que su scope solo alcance a la página Home.
		 * Si tenemos un modelo con funciones globales debemos cargarlo en config/autoload.php 
		 * en el apartado $autoload['model'] = array('posts');
		 */
		$this->load->model("posts");
		$result = $this->posts->getPosts();

		$data = array('consulta' => $result);
		/*Mandomos el contenido de $result a nuestra vista 'content'*/
		$this->load->view("guest/content", $data);
		$this->load->view("guest/footer");
	}

}

?>