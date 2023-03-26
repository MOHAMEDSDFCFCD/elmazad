<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;
    protected $table='products';
    protected $fillable=['id','nameproduct','start_date','start_price','high_price','description','my_bidding','count_bidder','expiry_date','category_product','photo_product','category_id'];
    protected $hidden=['created_at','updated_at'];
   // public $timestamps=false;
   public function category(){
    return $this->belongsTo(related:'App\Models\Category',foreignKey:'category_id',ownerKey:'id');
  }

}
