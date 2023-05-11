<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal</title>
    <link href="{{url('css/copypage/assets/img/logo.jpg')}}" rel="icon"> 
    <style>
          form #error{
        display: block;
        padding-left:315px;
      }
      form #forget{
        margin-right: 350px;
        margin-top: 20px;
        margin-bottom: 10px;
      }
      div #newaccount{
        margin-top: 70px;
      }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{url('/css/updateuserprofile/all.min.css')}}">
    <link rel="stylesheet" href="{{url('/css/updateuserprofile/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{url('/css/updateuserprofile/personal.css')}}">
</head>

<body>
    <header>
        
        <a href="{{route('home.page')}}">
        <img src="{{url('/images/updateuserprofile/IMG.11.jpg')}}" alt=""></a>
    </header>

    <section class="contant">

       

        <form method="POST" action="{{route('update.userprofile',$user[0]->id)}}" enctype="multipart/form-data">
            @csrf
            <div class="line1">
                <input type="submit" value="تم" class="done">
                <div class="img">
                    <h2>البيانات الشخصية</h2>
                  
                    <img src="{{url('/dynmicimages/updateuserprofile/'.$user[0]->photo)}}" alt="" height="260px" width="270px">
                    <h4>تغيير صورة الملف الشخصى</h4>
                    <input type="file" name="photo" value="تغيير صورة الملف الشخصى" class="change">
                        @error('photo')
                     <small class="form-text text-danger">{{$message}}</small>
                     @enderror
                </div><!-- img -->    
            </div><!-- perinfo -->
            @if(Session::has('success'))
            <div class="alert alert-success" id="sessionErr" style="text-align: center;width:200px;margin: auto;margin-top:20px ;">  {{ Session::get('success') }}</div>
            @endif

            {{--<input type="text" class="username" placeholder="User Name">--}}
            <input type="email" class="email" name="user_name" placeholder="البريد الالكتروني"  value="{{$user[0]->user_name}}">
             @error('user_name')
            <small class="form-text text-danger" id="error">{{$message}}</small>
             @enderror
             <a href="{{route('viewforgetpass.user')}}" id="forget" class="btn btn-primary btn-sm float-end">تغير كلمةالسر</a>  
           
        </form>

        <div class="line2">
          
            <a href="#" id="newaccount" class="addacc">اضافة حساب جديد</a>
            <a href="#" class="logout">تسجيل الخروج</a>
        </div>
       

    

    </section><!-- contant -->
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