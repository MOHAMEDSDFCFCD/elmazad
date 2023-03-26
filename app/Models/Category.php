<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $table='categories';
    protected $fillable=['id','name'];
    protected $hidden=['created_at','updated_at'];
   // public $timestamps=false;
   public function products(){
    return $this->hasMany(related:'App\Models\product',foreignKey:'category_id',localKey:'id');
  }

}
