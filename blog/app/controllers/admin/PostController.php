<?php 

namespace App\Controllers\Admin;
use App\Controllers\BaseController;
use App\Models\BlogPost;
use Sirius\Validation\Validator;

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
		$errors = [];
		$result = false;
		//validar del lado del servidor 
		$validator = new Validator();
		//agregando reglas
		$validator->add('title', 'required');
		$validator->add('content', 'required');
		//que es lo que vamos a validar
		if ($validator->validate($_POST)){
			//Para crear un nuevo post con orm se le pasan los argumentos
			$blogPost = new BlogPost([
				'title' => $_POST['title'],
				'content' => $_POST['content']
			]);
			$blogPost->save();
			$result = true;
			
		}else{
			$errors = $validator->getMessages();
			//var_dump($errors);
		}

		return $this->render('admin/insert-post.twig', [
			'result' => $result,
			'errors' => $errors
			]);
	}

}

?>