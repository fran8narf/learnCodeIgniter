<?php 
	class Posts extends CI_model 
	{
		public function getPosts() {
			/**Recoger todos los elementos de la tabla "posts" de la BBDD*/
			return $result = $this->db->get("posts");
		}

		public function getPostByName(){
			$result = $this->db->query("SELECT * FROM posts WHERE titulo_posts ='". $name ."' LIMIT 1");
			return $result->row(); //Nos devuelve una fila
		}
	}
?>