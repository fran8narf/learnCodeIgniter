<?php 
	/**
	* 
	*/
	class Article extends CI_controller
	{
		
		public function post($name = '')
		{
			$row = $this->post->getPostByName($name);
			echo $row->titulo_post; //De la fila que nos devuelva la query, cogemos solo el título del post.
		}
	}
 ?>