<?php 

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\User;

class IndexController extends BaseController{
	public function getIndex(){
		//si la sesion con el userid existe la obtendremos en userid
		if(isset($_SESSION['userId'])){
			$userId = $_SESSION['userId'];
			//buscaremos userid en la db
			$user = User::find($userId);
			//si existe ese usuario renderea y redirige a admin
			if($user){
				return $this->render('admin/index.twig', [
						'user' => $user
					]);
			}
		}
		// si no redireccion a login
		header('Location:' . BASE_URL . 'auth/login');
	}
}

?>