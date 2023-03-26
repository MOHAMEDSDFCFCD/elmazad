<?php

namespace App\Http\Controllers;

use App\Http\Requests\Adminlogin;
use App\Models\Admin_login;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Adminlogincontroller extends Controller
{
    public function viewlogin(){
        return view('adminlogin');
    }
    public function checklogin(Adminlogin $request){
        
    if (isset($_POST['username'])&&isset($_POST['password']) &&isset($_POST['number'])) {
      function test_input($data){
 
      $data = trim($data);
      $data = stripcslashes($data);
      $data =htmlspecialchars($data);
      return $data; 
   } 
 
 
     $username =test_input($request->username);
     $password =test_input($request->password);
     $number =test_input($request->number);
    if (empty($username)) {
         return redirect()->back();
         exit();
     }elseif(empty($password)){
        return redirect()->back();
        exit();
     }elseif (empty($number)) {
        return redirect()->back();
        exit();
       
    }else{
      $result =DB::select("SELECT * FROM login_admin WHERE  username='$username'  AND  password='$password' AND number='$number' ");
       if($result){
         session_start();
         $_SESSION['user_name'] = $result;
         header("Location:http://localhost/mazada/public/success");
         
         exit();
        }else{
           return redirect()->back()->with(['error'=>'data is not correct']);
           exit();
        }
    }
 
 }else{
     return redirect()->back()->with((['error'=>'data is not correct']));
    exit();
 }
       
    }
}
