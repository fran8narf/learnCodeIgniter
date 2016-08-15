<?php 
	class Posts extends CI_model 
	{
		public function getPosts() {
			/**Recoger todos los elementos de la tabla "posts" de la BBDD*/
			return $result = $this->db->get("posts");
		}
	}
?>