<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin_login extends Model
{
    use HasFactory;
    protected $table='login_admin';
    protected $fillable=['id','username','password','number'];
    protected $hidden=['created_at','updated_at'];
     public $timestamps=false;

  
}
