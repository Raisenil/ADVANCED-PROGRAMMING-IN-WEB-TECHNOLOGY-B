<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
class UserModel extends Model
{
protected $table="users";
protected $primaryKey = 'user_id';
public $timestamps = false;

}
?>