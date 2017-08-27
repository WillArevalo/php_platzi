<?php 

namespace App\Controllers;

use Sirius\Validation\Validator;
use App\Models\User;

class AuthController extends BaseController{
	public function getLogin() {	
		return $this->render('login.twig');
	}
	public function postLogin(){

		$validator = new Validator();
		//Reglas
		$validator->add('email', 'required');
		$validator->add('email', 'email');
		$validator->add('password', 'required');
		//Verificar el validator
		if ($validator->validate($_POST)) {
			//Buscar el usuario con ese nombre, se va a parar apenas vea la primera coincidencia
			$user = User::where('email', $_POST['email'])->first();
			if ($user) {
				//Si el usuario se ha encontrado verificar el password, recibe primero el parametro enviado en el post y lo verifica contra la base de datos
				if(password_verify($_POST['password'], $user->password)){
					//El usuario se autentifico con exito yla sesion se identifica con el id del usuario
					$_SESSION['userId'] = $user->id;
					//header redirije a la pagina de admin en este caso
					header('Location:'. BASE_URL . 'admin');
					return null;
				}
			}
			//no se logro autentificar
			$validator->addMessage('Login', 'Username and/or password does not match');
		}
		$errors = $validator->getMessages();

		return $this->render('login.twig',[
				'errors' => $errors
			]);
	}
	public function getLogout(){
		//Eliminar la session(unset) como si se tratara de una variable y luego redirecciono
		unset($_SESSION['userId']);
		header('Location:' . BASE_URL . 'auth/login');
	}
}

?>