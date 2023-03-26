<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User_login extends Model
{
    use HasFactory;
    protected $table='login_user';
    protected $fillable=['id','user_name','pass_word','photo'];
    protected $hidden=['created_at','updated_at'];
     public $timestamps=false;
}
