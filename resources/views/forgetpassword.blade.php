<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>forgetpass page</title>
    <link href="{{url('css/copypage/assets/img/logo.jpg')}}" rel="icon"> 
    <link rel="stylesheet" href="{{url('/css/userlogin/login2.css')}}">
    <link rel="stylesheet" href="{{url('/css/userlogin/bootstrap.min.css')}}">
    <style>
         form #error{
        display: block;
      }
    </style>
</head>
<body>
    <section>
        <div class="logo">
            
            <a href="{{route('home.page')}}">
            <img src="{{url('/images/admin/logo.jpg')}}" alt=""></a>
        </div><!-- logo -->
       <center> <h2 >تغير كلمة السر</h2></center>
       @if(Session::has('error0'))
       <div class="alert alert-danger" id="sessionErr" style="text-align: center;width:300px;margin: auto;margin-top:20px ;" role="alert">
           {{ Session::get('error0') }}
       </div>
        @endif
        @if(Session::has('success'))
        <div class="alert alert-success" id="sessionErr" style="text-align: center;width:200px;margin: auto;margin-top:20px ;" role="alert">
            {{ Session::get('success') }}
        </div>
         @endif
        <form method="POST" action="{{route('forgetpass.user',$user[0]->id)}}">
         @csrf
            <div class="input1">
                <input type="password" name="pass_word" placeholder="كلمة السر القديمة">
            </div>
            @error('pass_word')
            <small class="form-text text-danger" id="error">{{$message}}</small>
            @enderror
            <div class="input1">
                <input type="password" name="new_password" placeholder="تاكيد كلمة السر">
            </div>
            @error('new_password')
            <small class="form-text text-danger" id="error">{{$message}}</small>
            @enderror
            <div class="input1">
                <input type="password" name="confirm_password" placeholder="كلمة السر الجديده">
            </div>
            @error('confirm_password')
            <small class="form-text text-danger" id="error">{{$message}}</small>
            @enderror
            <input type="submit" value="تغير كلمة السر" class="submit">
        </form> 

    </section>
    <script type="text/javascript">

        var msg = document.getElementById('sessionErr')
        setTimeout(() => {
            if(msg != null) {
                msg.classList.add('d-none');
            }
        }, 7000);
    
    </script>
    
</body>
</html>