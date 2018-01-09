<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model 
{

	protected $table = 'test';

	protected $fillable = ['name', 'surname', 'age'];


} 


?>