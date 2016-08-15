<?php 
	/**
	* 
	*/
	class Article extends CI_Controller
	{
		
		public function post($id)
		{
			$row = $this->posts->getPostByName($id);
			echo $row->titulo_post; //De la fila que nos devuelva la query, cogemos solo el título del post.
		}
	}
 ?>