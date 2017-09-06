<?php 

namespace App\Controllers;
//Haciendo el controller mas bonito
//Para el index general
use App\Models\BlogPost;


class IndexController extends BaseController{
	public function getIndex() {
		//Uttilizando la nueva clase que se llama blogpost, la clase hereda muchos metodos de eloquent para poder utilizar

		//esta query hace un select * from BlogPost en orden descendente y traemos los resultados con get
		
		$blogPosts = BlogPost::query()->orderBy('id', 'desc')->get();


		return $this->render('index.twig', ['blogPosts' => $blogPosts]);
	}
}

?>