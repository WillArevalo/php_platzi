<?php 

namespace App\Controllers;
//Haciendo el controller mas bonito
//Para el index general
use App\Controllers\BaseController;
use App\Models\BlogPost;

class IndexController extends BaseController{
	public function getIndex($pag = 1) {
		//Uttilizando la nueva clase que se llama blogpost, la clase hereda muchos metodos de eloquent para poder utilizar

		//esta query hace un select * from BlogPost en orden descendente y traemos los resultados con get
		
		$this->pag = $pag;
		$blogPosts = BlogPost::query()->orderBy('id', 'desc')->get();

        $limit = 5; // leaderboard rows limit
        $offset = ($pag - 1) * $limit; // offset
        $totalItems = count($blogPosts); // total items
        $totalPages = ceil($totalItems / $limit);
        if (($pag <= $totalPages) && ($pag >= 1)) {
        	$itemsList = array_slice($blogPosts->toArray(), $offset, $limit);
		}
		else{
			echo "Bad direction";
			header('Location:' . BASE_URL );
		}

		return $this->render('index.twig', [
			'itemsList' => $itemsList,
			'pag' => $pag,
			'totalPages' => $totalPages]);
	}
}

?>