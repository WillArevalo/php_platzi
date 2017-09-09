<?php 

namespace App\Controllers\Admin;
use App\Controllers\BaseController;
use App\Models\BlogPost;
use Sirius\Validation\Validator;

class PostController extends BaseController{
	public function getIndex(){
		//El metoddo all toma todo el contenido
		$blogPosts = BlogPost::query()->orderBy('id', 'desc')->get();

		return $this->render('admin/posts.twig', ['blogPosts' => $blogPosts]);
	}
	public function getDelete($title){

		$result = false;
		$deletPost = BlogPost::where('title', $title)->delete();
		$result = true;
		header('Location:' . BASE_URL . 'admin/posts' );
		return $this->render('admin/posts.twig', [
			'result' => $result
			]);

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
		$validator->add('slug', 'required');
		$validator->add('content', 'required');

		//que es lo que vamos a validar
		if ($validator->validate($_POST)){
			//Para crear un nuevo post con orm se le pasan los argumentos
			$blogPost = new BlogPost([
				'title' => str_replace(" ","-",$_POST['title']),
				'content' => $_POST['content'],
				'slug' => $_POST['slug']
			]);
			//Agrega la url de la imagen antes de guardarla en la db
			if ($_POST['img']) {
				$blogPost->img_url = $_POST['img'];
			}

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