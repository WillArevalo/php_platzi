<?php 

/*
TABLE users


id 			int(9)			auto_increment	|
name 		varchar(40)						|
email 		varchar(40)						|Not Null
password	varchar(255)					|
created_at	datetime 						|
updated_at	datetime 						|

*/

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model{
	protected $table = 'users';
}

?>