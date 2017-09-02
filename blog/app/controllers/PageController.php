<?php  

namespace App\Controllers;
use App\Models\BlogPost;
use App\Controllers\BaseController;
class PageController extends BaseController{

	
	public function getIndex($title) {		
		$this->title = $title;
		$blogPost = BlogPost::where('title', $title)->first();
		return $this->render('page.twig', ['blogPost' => $blogPost]);
	}
}


?>