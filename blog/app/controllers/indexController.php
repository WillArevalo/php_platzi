<?php 

namespace App\Controllers;
//Haciendo el controller mas bonito
//Para el index general
class IndexController{
	public function getIndex() {
		//REcojer una variable declarada fuera, recojida del scope superior
		global $pdo;
		//Ordenado por id descendente osea el mas reciente primero
		$query = $pdo->prepare('SELECT * FROM blog_posts ORDER BY id DESC');
		$query->execute();
		//fetchAll recupera todos los posts
		$blogPosts = $query->fetchAll(\PDO::FETCH_ASSOC);
		return render('../views/index.php', ['blogPosts' => $blogPosts]);
	}
}

?>