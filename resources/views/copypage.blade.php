<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$search->nameproduct}}
        <</title> <link rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
            integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
            crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="{{url('css/products/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{url('css/products/all.min.css')}}">
        <link rel="stylesheet" href="{{url('css/products/pro.css')}}">
        <style>
            .img {
                position: absolute;
                overflow: hidden;
                width: 700px;
                margin-bottom: 200px;
            }

            .img img {
                position: relative;
                top: -20px;
                left: 0;
                width: 100%;
                height: 100%;
                object-fit: contain;
                border: none;
            }

            .details {
                width: 50%;
                height: 200vh;
                margin-left: 700px;
                grid-template-rows: repeat(auto, auto);
                overflow: hidden;
            }

            .dt13 {
                position: relative;
                right: 20px;
                transform: translateY(-50%);
                padding: 20px;
                z-index: 999;
                margin-left: 400px;
                margin-bottom: 1400px;
                margin-top: -400px
            }

            .dt13 h4,
            .dt13 h2 {
                text-align: right;
                font-size: 40px;
                margin-bottom: 10px;
                color: #ffffff;
            }

            .dt13 .pay img {
                width: 300px;
                margin-top: 10px;
                margin-left: 700px
            }

            .my-button {
                background-color: #373565;
                border: none;
                color: white;
                padding: 12px 24px;
                text-align: center;
                text-decoration: none;
                display: inline-block;
                font-size: 16px;
                margin: 4px 2px;
                cursor: pointer;
                border-radius: 5px;
                transition: background-color 0.3s ease;
            }

            .my-button:hover {
                background-color: white;
                color: black;

            }

            .hh11 {
                margin-left: 310px;
            }

            .hh11 button {
                position: relative;


            }

        </style>
</head>

<body>
    <header>
        <div class="icon">
            <a href="{{route('edit.user')}}">
                <i class="fa-regular fa-user"></i>
            </a>
            <a href="{{route('favorite.page')}}">
                <i class="fa-regular fa-heart"></i>
            </a>
            <div class="notification-bell">
                <i class="fas fa-bell"></i>
                <span class="notification-count">0</span>
                <div class="notification-list">
                    <ul>
                        <li>لديك رسالة جديدة 1 <button class="close-notification"><i class="fas fa-times"></i></button>
                        </li>
                        <li>لديك طلب مراسلة 2 <button class="close-notification"><i class="fas fa-times"></i></button>
                        </li>
                        <li>رسالة 3 <button class="close-notification"><i class="fas fa-times"></i></button></li>
                        <li>رسالة 4 <button class="close-notification"><i class="fas fa-times"></i></button></li>
                        <li>رسالة جديدة <button class="close-notification"><i class="fas fa-times"></i></button></li>
                        <li>رسالة 6 <button class="close-notification"><i class="fas fa-times"></i></button></li>
                        <li>رسالة 7 <button class="close-notification"><i class="fas fa-times"></i></button></li>
                        <li>رسالة 7 <button class="close-notification"><i class="fas fa-times"></i></button></li>
                        <li>رسالة 7 <button class="close-notification"><i class="fas fa-times"></i></button></li>
                        <li>رسالة 7 <button class="close-notification"><i class="fas fa-times"></i></button></li>
                        <li>رسالة 7 <button class="close-notification"><i class="fas fa-times"></i></button></li>

                    </ul>
                    <button class="close-btn"><i class="fas fa-times"></i></button>
                </div>
            </div>
            <a href="{{route('home.page')}}">
                <i class="fa fa-thin fa-house"></i>
            </a>
            <a href="#">
                <i class="fa-solid fa-circle-plus"></i>
            </a>
        </div>

        <div id=" search">
            <form>
                <input class="search1" type="text" name="text" placeholder="بحث">
            </form>
        </div>
        <div class="logo">
            <img src="{{url('/images/products/logo.jpeg')}}" alt="logo" width="420" height="400px">
        </div>

    </header>

    <div style="background-color: black;">
        @if(Session::has('success'))
        <div class="my-alert alert-success" role="alert">
            {{ Session::get('success') }}
            <button class="close-btn" aria-label="Close"></button>
        </div>
    </div>
    @endif
    <div style="background-color: black;">
        @if(Session::has('error1'))
        <div class="my-alert alert-danger" role="alert">
            {{ Session::get('error1') }}
            <button class="close-btn" aria-label="Close"></button>
        </div>
    </div>
    @endif






    <section class="product">

        <form method="POST" action="{{route('bidding.page',$search->id)}}" enctype="multipart/form-data">
            @csrf

            <div class="img">
                <img src="{{url('/images/products/'.$search->photo_product)}}" alt="">
            </div>




            <div class="details">
                <div class="dtl1">
                    <div class="info2">
                        <a href="#">{{$search->category_product}}</a>
                        <p>({{$search->description}})</p>
                    </div>

                </div>

                <div class="dtl2">

                    <div class="right" style="display: flex;align-items: center; justify-content: right;">
                        <span>{{$search->start_price}}ج.م</span>
                        <p>يبدأ من</p>
                    </div>
                    <div class="hh11">
                        <h3>أعلى مزايدة:{{$search->high_price}}ج.م</h3>
                        <form action="" style="display: flex;align-items: center;">
                            <h3><input type="text" width="20" name="my_bidding" placeholder="ادخل المبلغ">:مزايدتى</h3>
                            <button type="submit" value="{{$search->my_bidding}}" class="my-button">مزايدة</button>
                        </form>
                        <h3>عدد المتزايدين:{{$search->count_bidder}} </h3>
                    </div>

                    <div class="timer">
                        <div>
                            <h2 style="background-color:white;color: black;" class="second">{{$search-> second}}</h2>
                            <h3>ثانية</h3>
                        </div>
                        <div>
                            <h2 class="minute">{{$search -> minutes}}</h2>
                            <h3>دقيقة</h3>
                        </div>
                        <div>
                            <h2 class="hour">{{$search -> hours}}</h2>
                            <h3>ساعة</h3>
                        </div>
                        <div>
                            <h2 class="day">{{$search-> days}}</h2>
                            <h3>يوم</h3>
                        </div>
                    </div>
                    <h4
                        style="background-color: grey;padding:8px 30px; font-size:17px ; margin-left:460px ;margin-top: -100px;border-radius:32px ;height:70px ; width:150px ;">
                        متبقى على انتهاء المزاد
                    </h4>
                </div>


            </div>


            </div>
            <div class="dt13">
                <h4 style="display: block; font-size: 30px;"><span class="date">{{$search->expiry_date}}</span> :تاريخ
                    انتهاء المزاد</h4>

                <div class="pay">
                    <h2>:طريقة الدفع</h2>
                    <a href="{{route('payment.method.page')}}"><img
                            src="{{url('/images/products/visa-removebg-preview (1).png')}}" alt=""></a>
                </div>
            </div>
        </form>

    </section>
    <script src="//code.tidio.co/3t0hlkaacnnkvyig8uehtbj7nme8kgkp.js" async></script>

    {{-- <script>
      var startDate = new Date({{$product->start_date}}) 
    </script> --}}

    <script src="{{url('js/products/main.js')}}"></script>

</body>

</html>
