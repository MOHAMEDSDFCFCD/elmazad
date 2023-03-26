<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\product;
use Illuminate\Http\Request;

class Productcontroller extends Controller
{
    public function productview($product_id){
        $search = product::find($product_id);  // search in given table id only
        if (!$search){
            return redirect()->back();
        }
      //->  $search=post::findOrFail($post_id);//->search by posts_id only
        $search =product::select('id','nameproduct','start_price','high_price','description','my_bidding','count_bidder','expiry_date','category_product','photo_product')->find($product_id);
        return view(view:'product',data: compact('search'));
        

      }
      public function categoryproduct($category_id){
        //$category_id=1;
        $category = Category::with(['products'=>function($r){
          $r->where('category_product','سيارات');
        }])->get()->find($category_id);
        $product=$category->products;
  
        return $category;
      }
      public function homepageproducts(){
        $products=product::select('id','nameproduct','photo_product','start_date','expiry_date','description','start_price','category_product')->get();
        
        return view('homepage',data:compact('products'));

      }
    
    }

