<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>تسجيل الدخول</title>
    <style>
      form .submit{
        display:inline-block ;
        
      }
      form #error{
        display: block;
      }

    </style>
    <link rel="stylesheet" href="{{url('/css/adminlogin/style.css')}}">
    <link rel="stylesheet" href="{{url('/css/adminlogin/bootstrap.min.css')}}">
    
</head>
<body>
<section>
    <div class="container">
        <div class="logo">
            <img src="{{url('/images/admin/logo.jpg')}}" alt="">
        </div><!-- logo -->
        <h2>تسجيل دخول المشرف</h2>
        @if(Session::has('error'))

        <div class="alert alert-danger" style="text-align: center;width:200px;margin: auto;margin-top:20px ;" role="alert">
            {{ Session::get('error') }}
            <?php header("Refresh:10")?>
        </div>
       @endif
        <form method="POST" action="{{route('success.login')}}">
            @csrf
            <div class="input1">
                <input type="text" name="username" placeholder="البريد الالكتروني">
            </div>
            @error('username')
            <?php header("Refresh:10")?>
            <small class="form-text text-danger">{{$message}}</small>
            @enderror
            
            <div class="input2">
                <input type="text" name="number" placeholder="رقم الهوية الشخصية">
            </div>
            @error('number')
            <?php header("Refresh:10")?>
            <small  class="form-text text-danger">{{$message}}</small>
            @enderror

            <div class="input3">
                <input type="password" name="password" placeholder="كلمة السر">
            </div>
            @error('password')
            <?php header("Refresh:10")?>
            <small class="form-text text-danger" id="error">{{$message}}</small>
            @enderror

            <input type="submit" name="submit" value="تسجيل الدخول" class="submit">

        </form>
        
    </div><!-- container -->
</section>

<div class="lines">
    <div></div>
    <div></div>
</div>
    
</body>
</html>