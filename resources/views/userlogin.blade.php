<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>تسجيل الدخول</title>
    <link href="{{url('css/copypage/assets/img/logo.jpg')}}" rel="icon"> 
    <style > 
     div  .signup {
        text-decoration: none;
        font-size: 25px;
        margin-top: -2px;
        padding-top: 5px;
      }
      form .submit{
        display:inline-block ;
        
      }
      form #error{
        display: block;
      }
      </style>
    <link rel="stylesheet" href="{{url('/css/userlogin/login2.css')}}">
    <link rel="stylesheet" href="{{url('/css/userlogin/bootstrap.min.css')}}">
</head>
<body>
<section>
    <div >
        <div class="logo">
            
            <a href="{{route('home.page')}}">
            <img src="{{url('/images/admin/logo.jpg')}}" alt="">
            </a>
        </div><!-- logo -->
        @if(Session::has('error0'))
        <div class="alert alert-danger" id="sessionErr" style="text-align: center;width:200px;margin: auto;margin-top:20px ;" role="alert">
            {{ Session::get('error0') }}
        </div>
         @endif
    
          
        <form method="POST" action="{{route('success.login.user')}}">
            @csrf
            <div class="input1">
                <input type="text" name="user_name" placeholder="البريد الالكترونى">
            </div>
            @error('user_name')
           
            <small class="form-text text-danger">{{$message}}</small>
            @enderror

            <div class="input3">
                <input type="password" name="pass_word" placeholder="كلمة السر">
            </div>
            @error('pass_word')
            <small class="form-text text-danger" id="error">{{$message}}</small>
            @enderror
            <input type="submit" value="تسجيل الدخول" class="submit">

            <div class="lines">
                <div></div>
                <h2>أو</h2>
                <div></div>
            </div>

            <div>
                <a href="{{route('register')}}" class="signup" value="انشاء حساب جديد">انشاء حساب جديد</a>
            </div>

            <div>
                <a style="background-color: grey" href="{{route('view.login')}}" class="signup" value="تسجيل دخول الادمن">تسجيل دخول الأدمن</a>
            </div>

        </form>
        
    </div><!-- container -->
</section>

<script type="text/javascript">

    var msg = document.getElementById('sessionErr')
    setTimeout(() => {
        if(msg != null) {
            msg.classList.add('d-none');
        }
    }, 5000);

</script>
    
</body>
</html>