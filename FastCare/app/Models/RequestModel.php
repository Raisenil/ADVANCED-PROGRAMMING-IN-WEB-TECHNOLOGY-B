<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
class RequestModel extends Model
{
protected $table="request";
protected $primaryKey = 'r_id';
public $timestamps = false;

}
?>