<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\product;
use App\Models\User_login;
use Illuminate\Http\Request;

class Productcontroller extends Controller{
      public function productview($product_id){
        $search = product::find($product_id);  // search in given table id only
        if (!$search){
            return redirect()->back();
        }
        //->  $search=post::findOrFail($post_id);//->search by posts_id only
        $search =product::select('id','nameproduct','start_price','high_price','description','my_bidding','count_bidder','expiry_date','category_product','photo_product','days','minutes','hours','second')->find($product_id);
        session_start();
        $user= $_SESSION['user_name'] ;
        return view(view:'product',data: compact('search','user'));
         }
      
      public function categoryproduct($category_id){
        //$category_id=1;
        $categories = Category::find($category_id);
        $categoryname=$categories->name;
         $category = Category::with(['products'=>function($r){
          
          
        }])->get()->find($category_id);
        $products=$category->products;
  
        return view('categorypage',compact('products'));
      }
    
       public function homepageproducts(){
        $products=product::select('id','nameproduct','photo_product','start_date','expiry_date','description','start_price','category_product','category_id')->limit(6)->get();
        $categories = Category::select('id','name')->limit(6)->get();
         /*
         foreach($products as $product){
          $frist_date=date_create($product -> start_date);
          $second_date=date_create($product -> expiry_date);
          $diff=date_diff($second_date,$frist_date);
          echo "<pre>";
          print_r($diff);
          echo "</pre>";
          $days_of_years=$diff->y * 365;
          $days_of_months=$diff->m *30;
          echo $days=$diff->d + $days_of_years + $days_of_months;
          echo"<br>";
          echo $hours=$diff->h ;
          echo "<br>";
          echo $minutes=$diff->i;
          echo "<br>";
          echo $second=$diff->s;
          echo "<br>";
         }
         return 1;
         
         */ 
        return view('homepage',data:compact('products','categories'));

      
        }
       
       public function biddingme(Request $request,$product_id){
         session_start();
         $user= $_SESSION['user_name'] ;
         $user_id= $user[0]->id ;

         $check1 = product::find($product_id);
         $check2=User_login::find($user_id);
           if(!$check2){
          return redirect()->back();
          }
          if (!$check1){
            return redirect()->back();
          }
           
           if($check2->my_money > $request->my_bidding){

                if ($request->my_bidding > $check1->my_bidding){
                $sub1 = $request->my_bidding - $check1->my_bidding;
                $check1->update(['my_bidding'=>$request->my_bidding]);
                    if($request->my_bidding > $check1->high_price){
                    $check1->update(['high_price'=>$request->my_bidding]);
                   }
                $username_money= $user[0]->my_money;
                $my_newmoney=$username_money - $sub1;
                $check2->update(['my_money'=>$my_newmoney]);
                return redirect()->back()->with(['success'=>'تمت المزايدة بنجاح']);


                }elseif($request->my_bidding < $check1->my_bidding){
                // $add1 =  $check1->my_bidding - $request->my_bidding;
                // $check1->update(['my_bidding'=>$request->my_bidding]);
                // $username_money= $user[0]->my_money;
                // $my_newmoney=$username_money + $add1;
                // $check2->update(['my_money'=>$my_newmoney]);
                return redirect()->back()->with(['success'=>'ادخل مبلغ اكبر من اعلي سعر']);
                }else{
               return redirect()->back()->with(['success'=>'لم يتغير المبلغ']);
              }
           }else{
              return redirect()->back()->with(['error1'=>'المال غير كافي الرجاء اعادة المحاولة عند وجود المبلغ']);
           }   
        }
        public function favoritepageproducts(){
          $products=product::select('id','nameproduct','photo_product','start_date','expiry_date','description','start_price','category_product','days','minutes','hours','second')->limit(3)->get();
          return view('favoritepage',data:compact('products'));

        }

  
   


  }  

