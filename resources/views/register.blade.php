<!DOCTYPE html>
<html lang="ar">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Elmazad</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/all.min.css">
    <link href='https://css.gg/heart.css' rel='stylesheet'>
    <link rel="stylesheet" href="css/create.css">
    <style>
        *{
    background-color: #000;
    border: 1px solid rgb(2, 2, 2);
    color: #ffffff;
}
header{
    width:100% ;
    height:280px ;
    justify-content: center;
    text-align: center;
}
header img{
    width:230px ;
}
header h2{
    background-color: #85790D;
    color: #ffffff;  
    text-align: center;
    padding:10px 80px ;
    width:140px ;
    display: flex;
    margin-left:40% ;
    border-radius: 23px;
}
.create{
    width:100% ;
    height:80vh ;
    display: flex;
    
}
.addimg{
    width:30% ;
    padding-left:100px ;
   
}

.addimg a {
    font-size:200px ;
    text-decoration: none;
}
.userinfo{
    width:30%;
    
}
.userinfo form{
    width:100% ;
    height:60vh ;
     
}
.userinfo form .info1 input{
    background-color: white;
    width:400px ;
    height:30px ;
    text-align: right;
    display: block;
    margin-left:8% ;
    border-radius:20px ;
    font-size:23px ;
    color: black;
    margin-top:30px ;
    padding-right:10px ;
}

.userinfo form .info{
    display: flex;
    width:30% ; 
}
.userinfo form .info2r input{
    background-color: white;
    width:200px ;
    height:30px ;
    text-align: right;
    display: block;
    margin-left:52% ;
    border-radius:20px ;
    font-size:23px ;
    color: black;
    margin-top:20px ;
    padding-right:10px ;
}

.userinfo form .info2l{
    width:100px ;
    position: relative;
    left:40px ;
    bottom:140px ;
}
.userinfo form .info2l input{
    background-color: white;
    width:160px ;
    height:30px ;
    text-align: right;
    border-radius:20px ;
    font-size:23px ;
    color: black;
    padding-right:10px ;
}
.cate{
    text-align: right;
    background-color: #ffffff;
    width:160px ;
    height:130px ;
    margin-top:10px ;
    padding-right:10px ;
    border-radius:22px ;
}
.cate h2,a{
    background-color:white;
    border: none;
    color: #000;
}
.cate a{
    text-decoration: none;
    display: block;
    font-size:20px ;
    margin-top:10px ;
}
.cate a:hover{
    background-color: black;
    color: white;
}
form .done{
    padding:10px 30px ;
    text-decoration: none;
    background-color:#0A4D70 ;
    color: white;
    border-radius:20px ;
    margin-bottom:100px ;
    margin-left:180px ;
    position: relative;
    bottom:50px ;
}
form .done:hover{
    background-color: white;
    color: #000;

}

    </style>
</head>


<body>
    <header>
        <img src="images/logo.jpg" alt="">
        <h2>انشاء حساب جديد</h2>
    </header>

    <section class="create">
        <div class="addimg">
            <h1>ارفاق البطاقة الشخصية</h1>
            <a href="#"><i class="fa-solid fa-camera"></i></a>
        </div><!-- addimg -->

        <div class="userinfo">
            <form action="{{ route('submitForm') }}" method="POST">
                @csrf
                <div class="info1">
                    <input type="text" name="name" placeholder="الاسم الثلاثى" class="username">
                    <input type="email" name="email" placeholder="البريد الالكترونى" class="email">
                    <input type="text" name="bank_id" placeholder="رقم الحساب البنكى" class="banknum">
                </div>
            
                <div class="info2">
                    <div class="info2r">
                        <input type="tel" name="phone" placeholder="رقم الهاتف" class="phone">
                        <input type="password" name="password" placeholder="كلمة السر" class="pass">
                    </div><!-- right -->
            
                    <div class="info2l">
                        <input type="text" name="age" placeholder="العمر">
                        <div class="cate">
                            <h2 style="height:10px;">الفئة</h2>
                            <hr>
                            <a href="#">متوسط</a>
                            <a href="">فوق المتوسط</a>
                        </div>
                    </div><!-- left -->
                    <button type="submit" class="done">تم</button>
                </div>
                
            </form>
            
        </div>

    </section><!-- create -->

</body>

</html>