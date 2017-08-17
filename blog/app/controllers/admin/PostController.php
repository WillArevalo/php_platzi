<?php 

namespace App\Controllers\Admin;
use App\Controllers\BaseController;
use App\Models\BlogPost;

class PostController extends BaseController{
	public function getIndex(){
		//El metoddo all toma todo el contenido
		$blogPosts = BlogPost::all();

		return $this->render('admin/posts.twig', ['blogPosts' => $blogPosts]);
	}

	public function getCreate(){
		//get de admin/posts/create
		return $this->render('admin/insert-post.twig');
	}
	public function postCreate(){
		//Para crear un nuevo post con orm se le pasan los argumentos
		$blogPost = new BlogPost([
			'title' => $_POST['title'],
			'content' => $_POST['content']
		]);
		$blogPost->save();
		$result = true;

		return $this->render('admin/insert-post.twig', ['result' => $result]);
	}

}

?>