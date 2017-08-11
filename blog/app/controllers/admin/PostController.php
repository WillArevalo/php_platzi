<?php 

namespace App\Controllers\Admin;
use App\Controllers\BaseController;

class PostController extends BaseController{
	public function getIndex(){
		//Se puede acceder con admin/posts/index o con admin/posts
		global $pdo;
		$query = $pdo->prepare('SELECT * FROM blog_posts ORDER BY id DESC');
		$query->execute();
		$blogPosts = $query->fetchAll(\PDO::FETCH_ASSOC);

		return $this->render('admin/posts.twig', ['blogPosts' => $blogPosts]);
	}

	public function getCreate(){
		//get de admin/posts/create
		return $this->render('admin/insert-post.twig');
	}
	public function postCreate(){
		//post de admin/posts/create
		global $pdo;
		$sql = 'INSERT INTO blog_posts (title, content) VALUES(:title, :content)';
		$query = $pdo->prepare($sql);
		$result = $query->execute([
			'title' => $_POST['title'],
			'content' => $_POST['content']
		]);

		return $this->render('admin/insert-post.twig', ['result' => $result]);
	}

}

?>