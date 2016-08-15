<?php 
	/**
	* 
	*/
	class Article extends CI_controller
	{
		
		public function post($name = '')
		{
			$this->post->getPostByName($name);
		}
	}
 ?>