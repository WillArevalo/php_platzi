<?php 

/*
TABLE blog_posts

id 			int(11)			auto_increment	|
title 		text 							|
content 	longtext 						|
img_url		varchar(150) 					|
slug 		varchar(300) 					| Not Null
created_at	datetime 						|
updated_at	datetime 						|

*/


//nueva clase que representa especificamente un blogpost de nuestra base de datos
namespace App\Models;

//para indicarle que esta clase se comportara como un modelo de eloquent extendiendo desde model y añadiendo el use

// eloquent pide que sea protected

use Illuminate\Database\Eloquent\Model;
class BlogPost extends Model {
	protected $table = 'blog_posts';
	//Filable es el metodo que no deja que se inserten mas valores de los que se le pasa realmente
	protected $fillable = ['title', 'content', 'slug', 'updated_at', 'img_url'];
}

?>