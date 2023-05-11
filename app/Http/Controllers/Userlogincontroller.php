<?php

namespace App\Http\Controllers;

use App\Http\Requests\usereditprofile;
use App\Http\Requests\UserForgetpass;
use App\Http\Requests\Userlogin;
use App\Models\User_login;
use App\traits\saveimage;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class Userlogincontroller extends Controller
{   use saveimage;
    public function viewlogin(){
        return view('userlogin');
    }
    public function checklogin(Userlogin $request){
        if (isset($_POST['user_name'])&&isset($_POST['pass_word'])) {
            function test_input($data){
         
              $data = trim($data);
              $data = stripcslashes($data);
              $data =htmlspecialchars($data);
              return $data; 
           } 
         
         
          $user_name =test_input($request-> user_name);
          $pass_word =test_input($request-> pass_word);
           
            if (empty($user_name)) {
                 return redirect()->back();
                 exit();
            }elseif(empty($pass_word)){
                return redirect()->back();
                exit();
            
               
            }else{
              $result =DB::select("SELECT * FROM login_user WHERE user_name='$user_name' AND pass_word='$pass_word'");
              
              if($result){
                 session_start();
                 $_SESSION['user_name'] = $result;
                 return redirect()->route('home.page')->with(['success'=>'تم التسجيل الدخول بنجاح']);
                  exit();
                }else{
                   return redirect()->back()->with(['error0'=>'data is not correct']);
                   exit();
                }
            }
         
         }else{
            return redirect()->back()->with(['error0'=>'data is not correct']);
            exit();
         }

    }
    public function edituser(){
        session_start();
        $user= $_SESSION['user_name'] ;
        return view('updateuserprofile',compact('user'));
    }
    public function updateuser(usereditprofile $request,$user_id){
        $check = User_login::find($user_id);
        if(!$check){
            return redirect()->back();
        }
        if($request->has('photo')){
            $file_name=$this->savephoto(path:'dynmicimages/updateuserprofile',image:$request->photo);
        
        $check->update(['photo'=>$file_name,
        'user_name'=>$request->user_name,
        ]);
        session_start();
        $user= $_SESSION['user_name'] ;
        $userphoto= $user[0]->photo=$file_name;
        $username= $user[0]->user_name=$request->user_name;
        return redirect()->back()->with(['success'=>'تم التغير بنجاح',$userphoto,$username]);
      }elseif(!$request->has('photo')){
        
        $check->update([
        'user_name'=>$request->user_name,
        ]);
        session_start();
        $user= $_SESSION['user_name'] ;
        $username= $user[0]->user_name=$request->user_name;
        return redirect()->back()->with(['success'=>'تم التغير بنجاح',$username,]);

      }
    }
    public function viewforgetpass(){
      session_start();
      $user= $_SESSION['user_name'] ;
      return view('forgetpassword',compact('user'));
    }
    public function forgetpass(UserForgetpass $request,$user_id){
      $check = User_login::find($user_id);
      if(!$check){
          return redirect()->back();
      }
      if (isset($_POST['pass_word'])) {
        function test_input($data){
     
          $data = trim($data);
          $data = stripcslashes($data);
          $data =htmlspecialchars($data);
          return $data; 
       } 
     
     
       $pass_word =test_input($request-> pass_word);
       
        if(empty($pass_word)){
            return redirect()->back();
            exit();
        
           
        }else{
         // $result =DB::select("SELECT * FROM login_user WHERE  pass_word='$pass_word'");
         session_start();
         $user= $_SESSION['user_name'] ;
          
          if($request->pass_word == $user[0]->pass_word ){
           
             if ($request->new_password == $request->confirm_password){
              $check->update([
                
                'pass_word'=>$request->confirm_password,
                ]);
               
                $user= $_SESSION['user_name'] ;
                $userpassword= $user[0]->pass_word=$request->confirm_password;
                return redirect()->back()->with(['success'=>'تم التغير كلمة السر  بنجاح']);
                exit();


             }elseif($request->new_password !== $request->confirm_password){
            
              
               return redirect()->back()->with(['error0'=>'كلمة السر الجديد غير متطابقه']);
               exit();}
            }else{
               return redirect()->back()->with(['error0'=>'كلمة السر غير صحيحة']);
               exit();
            }
        }
     
     }else{
        return redirect()->back()->with(['error0'=>'data is not correct']);
        exit();
     }
      
    }
}
