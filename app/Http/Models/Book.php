<?php 

/*
namespace App;

use Illuminate\Auth\Authenticatable;
use Laravel\Lumen\Auth\Authorizable;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
  
class Book extends Model implements AuthenticatableContract, AuthorizableContract
{
	use Authenticatable, Authorizable;
     
     protected $fillable = [
     	'title', 
     	'author', 
     	'isbn'
     ];
}
*/

namespace App\Http\Models;
  
use Illuminate\Database\Eloquent\Model;
  
class Book extends Model
{
     
     protected $fillable = ['title', 'author', 'isbn'];
     
}

?>