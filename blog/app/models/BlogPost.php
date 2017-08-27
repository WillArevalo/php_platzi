<?php 
//nueva clase que representa especificamente un blogpost de nuestra base de datos
namespace App\Models;

//para indicarle que esta clase se comportara como un modelo de eloquent extendiendo desde model y añadiendo el use

// eloquent pide que sea protected

use Illuminate\Database\Eloquent\Model;
class BlogPost extends Model {
	protected $table = 'blog_posts';
	//Filable es el metodo que no deja que se inserten mas valores de los que se le pasa realmente
	protected $fillable = ['title', 'content', 'updated_at'];
}

?>