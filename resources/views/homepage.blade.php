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
    <link rel="stylesheet" href="{{url('css/homepage/all.min.css')}}">
    <link href='https://css.gg/heart.css' rel='stylesheet'>
    <link rel="stylesheet" href="{{url('css/homepage/home.css')}}">
</head>

<body>
    <header>
        <div class="icon">
            <a href="{{route('edit.user')}}"><i class="fa-regular fa-user"></i></a>
            <a href="{{route('favorite.page')}}"><i class="fa-regular fa-heart"></i></a>
            <a href="#"><i class="fa-regular fa-bell"></i></a>
            <a href="{{route('home.page')}}"><i class="fa fa-thin fa-house"></i></a>
            <div class="add">
                <a href="#"><i class="fa-solid fa-circle-plus"></i></a>
            </div><!-- addicon -->
        </div><!-- icons -->

        <div id="search">
            <form>
                <input class="search" type="text" name="text" placeholder="بحث">
            </form>
        </div>

        <img src="{{url('/images/products/logo.jpg')}}" alt="">
    </header>


    <div class="titles">

        <div class="left">
            <a href="#">اثاث</a>
            <a href="#">الكترونيات</a>
            <a href="#">ساعات</a>
        </div><!-- left -->

        <div class="center">
            <a href="#" style="background-color: #373565;">الصفحة الرئيسية</a>
        </div><!-- center -->

        <div class="right">
            <a href="#">سيارات</a>
            <a href="#">تحفة فنية</a>
            <a href="#">عملات</a>
        </div><!-- right -->
    </div><!-- titles -->

    <div class="icon2">
        <div class="left">
            <a href="#"> <i class="fa fa-light fa-book"></i></a>
        </div><!-- left -->

        <!--  القائمة-->
        <div class="right">
            <div class="container">
                <a href="#" class="bar"><i class="fa fa-light fa-bars"></i></a>
                <div class="dropdown">
                    <a href="{{route('home.page')}}">الصفحة الرئيسية</a>
                    <a href="#">بحث</a>
                    <a href="#">من نحن</a>
                    <a href="#">تواصل معنا</a>
                    <a href="#">دليل المستخدم</a>
                    <a href="#">تعليمات المزاد الالكترونى</a>
                    <a href="#">الشروط والاحكام</a>
                    <a href="{{route('view.login.user')}}">تسجيل الدخول</a>
                    <a href="#">تسجيل الخروج</a>
                </div>
            </div>


        </div><!-- right -->
    </div><!-- icon2 -->


    <section class="menu" id="menu">
      @foreach ($products as $product)
            
        <div class="row1">
            <div class="box1">
                <div class="imgbox">
                    <a href="{{url('product/'.$product -> id)}}" class="imglink"><img src="{{url('/images/products/'.$product -> photo_product)}}" alt=""></a>

                    <div class="btns">
                        <button class="btn"><i onclick="Toggle1()" id="btnh1" class="fas fa-heart"></i></button>
                    </div>
                </div><!-- img -->


                <div class="info1">
                    <div class="price">
                        <span style="background-color: #373565;padding:5px 10px;border-radius:15px ; ">{{$product-> start_price}}</span>
                        <h3 style="margin-left:10px ;">يبدأ من</h3>
                    </div>

                    <div>
                        <a href="#"
                            style="text-decoration: none; background-color: grey;padding:10px;font-size:17px ;border-radius:32px ;">{{$product-> category_product}}</a>
                    </div>
                </div><!-- info1 -->

                <div class="info2">
                    <a href="{{route('bidding.page')}}"
                        style="text-decoration: none;background-color: #373565; padding:5px 35px;font-size:30px ;border-radius:30px ;">مزايدة</a>
                    <h2>({{$product -> description}})</h2>
                </div><!-- info2 -->

                <div class="timer">
                    <div>
                        <h2 style="background-color:white;color: black;" class="seconed">Time</h2>
                        <h3>ثانية</h3>
                    </div>
                    <div>
                        <h2 class="minute">Time</h2>
                        <h3>دقيقة</h3>
                    </div>
                    <div>
                        <h2 class="hours">Time</h2>
                        <h3>ساعة</h3>
                    </div>
                    <div>
                        <h2 class="days">Time</h2>
                        <h3>يوم</h3>
                    </div>

                    <div class="item1">متبقى على انتهاء المزاد</div>
                </div><!-- timer -->
            </div>
         @endforeach      
         {{--
            <div class="box1">
                <div class="imgbox">
                    <a href="#" class="imglink"><img src="{{url('/images/products/2.jfif')}}" alt=""></a>

                    <div class="btns">
                        <button class="btn"><i onclick="Toggle2()" id="btnh2" class="fas fa-heart"></i></button>
                    </div>

                </div>

                <div class="info1">
                    <div class="price">
                        <span style="background-color: #373565;padding:5px 10px;border-radius:15px ; ">ج.م199.99</span>
                        <h3 style="margin-left:10px ;">يبدأ من</h3>
                    </div>

                    <div>
                        <a href="#"
                            style="text-decoration: none; background-color: grey;padding:10px;font-size:17px ;border-radius:32px ;">تحفة
                            فنية</a>
                    </div>
                </div>

                <div class="info2">
                    <a href="#"
                        style="text-decoration: none;background-color: #373565; padding:5px 35px;font-size:30px ;border-radius:30px ;">مزايدة</a>
                    <h2>(الوصف)</h2>
                </div>

                <div class="timer">
                    <div>
                        <h2 style="background-color:white;color: black;" class="seconed2">Time</h2>
                        <h3>ثانية</h3>
                    </div>
                    <div>
                        <h2 class="minute2">Time</h2>
                        <h3>دقيقة</h3>
                    </div>
                    <div>
                        <h2 class="hours2">Time</h2>
                        <h3>ساعة</h3>
                    </div>
                    <div>
                        <h2 class="days2">Time</h2>
                        <h3>يوم</h3>
                    </div>

                    <div class="item2">متبقى على انتهاء المزاد</div>
                </div>
            </div>

            <div class="box1">
                <div class="imgbox">
                    <a href="#" class="imglink"><img src="{{url('/images/products/3.jfif')}}" alt=""></a>
                    <div class="btns">
                        <button class="btn"><i onclick="Toggle3()" id="btnh3" class="fas fa-heart"></i></button>
                    </div>

                </div>

                <div class="info1">
                    <div class="price">
                        <span style="background-color: #373565;padding:5px 10px;border-radius:15px ; ">ج.م199.99</span>
                        <h3 style="margin-left:10px ;">يبدأ من</h3>
                    </div>

                    <div>
                        <a href="#"
                            style="text-decoration: none; background-color: grey;padding:10px;font-size:17px ;border-radius:32px ;">عملات</a>
                    </div>
                </div>

                <div class="info2">
                    <a href="#"
                        style="text-decoration: none;background-color: #373565; padding:5px 35px;font-size:30px ;border-radius:30px ;">مزايدة</a>
                    <h2>(الوصف)</h2>
                </div>

                <div class="timer">
                    <div>
                        <h2 style="background-color:white;color: black;" class="seconed3">Time</h2>
                        <h3>ثانية</h3>
                    </div>
                    <div>
                        <h2 class="minute3">Time</h2>
                        <h3>دقيقة</h3>
                    </div>
                    <div>
                        <h2 class="hours3">Time</h2>
                        <h3>ساعة</h3>
                    </div>
                    <div>
                        <h2 class="days3">Time</h2>
                        <h3>يوم</h3>
                    </div>
                    <div class="item2">متبقى على انتهاء المزاد</div>
                </div>
            </div>


        </div>

        <div class="row1">
            <div class="box1">
                <div class="imgbox">
                    <a href="#" class="imglink"><img src="{{url('/images/products/4.jpg')}}" alt=""></a>
                    <div class="btns">
                        <button class="btn"><i onclick="Toggle4()" id="btnh4" class="fas fa-heart"></i></button>
                    </div>

                </div>

                <div class="info1">
                    <div class="price">
                        <span style="background-color: #373565;padding:5px 10px;border-radius:15px ; ">ج.م199.99</span>
                        <h3 style="margin-left:10px ;">يبدأ من</h3>
                    </div>

                    <div>
                        <a href="#"
                            style="text-decoration: none; background-color: grey;padding:10px;font-size:17px ;border-radius:32px ;">ساعات</a>
                    </div>
                </div>

                <div class="info2">
                    <a href="#"
                        style="text-decoration: none;background-color: #373565; padding:5px 35px;font-size:30px ;border-radius:30px ;">مزايدة</a>
                    <h2>(الوصف)</h2>
                </div>

                <div class="timer">
                    <div>
                        <h2 style="background-color:white;color: black;" class="seconed4">Time</h2>
                        <h3>ثانية</h3>
                    </div>
                    <div>
                        <h2 class="minute4">Time</h2>
                        <h3>دقيقة</h3>
                    </div>
                    <div>
                        <h2 class="hours4">Time</h2>
                        <h3>ساعة</h3>
                    </div>
                    <div>
                        <h2 class="days4">Time</h2>
                        <h3>يوم</h3>
                    </div>

                    <div class="item3">متبقى على انتهاء المزاد</div>
                </div>
            </div>

            <div class="box1">
                <div class="imgbox">
                    <a href="#" class="imglink"><img src="{{url('/images/products/5.jpg')}}" alt=""></a>
                    <div class="btns">
                        <button class="btn"><i onclick="Toggle5()" id="btnh5" class="fas fa-heart"></i></button>
                    </div>

                </div>

                <div class="info1">
                    <div class="price">
                        <span style="background-color: #373565;padding:5px 10px;border-radius:15px ; ">ج.م199.99</span>
                        <h3 style="margin-left:10px ;">يبدأ من</h3>
                    </div>

                    <div>
                        <a href="#"
                            style="text-decoration: none; background-color: grey;padding:10px;font-size:17px ;border-radius:32px ;">الكترونيات</a>
                    </div>
                </div>

                <div class="info2">
                    <a href="#"
                        style="text-decoration: none;background-color: #373565; padding:5px 35px;font-size:30px ;border-radius:30px ;">مزايدة</a>
                    <h2>(الوصف)</h2>
                </div>

                <div class="timer">
                    <div>
                        <h2 style="background-color:white;color: black;" class="seconed5">Time</h2>
                        <h3>ثانية</h3>
                    </div>
                    <div>
                        <h2 class="minute5">Time</h2>
                        <h3>دقيقة</h3>
                    </div>
                    <div>
                        <h2 class="hours5">Time</h2>
                        <h3>ساعة</h3>
                    </div>
                    <div>
                        <h2 class="days5">Time</h2>
                        <h3>يوم</h3>
                    </div>

                    <div class="item4">متبقى على انتهاء المزاد</div>
                </div>
            </div>

            <div class="box1">
                <div class="imgbox">
                    <a href="#" class="imglink"><img src="{{url('/images/products/6.jpg')}}" alt=""></a>
                    <div class="btns">
                        <button class="btn"><i onclick="Toggle6()" id="btnh6" class="fas fa-heart"></i></button>
                    </div>

                </div>

                <div class="info1">
                    <div class="price">
                        <span style="background-color: #373565;padding:5px 10px;border-radius:15px ; ">ج.م199.99</span>
                        <h3 style="margin-left:10px ;">يبدأ من</h3>
                    </div>

                    <div>
                        <a href="#"
                            style="text-decoration: none; background-color: grey;padding:10px;font-size:17px ;border-radius:32px ;">أثاث</a>
                    </div>
                </div>

                <div class="info2">
                    <a href="#"
                        style="text-decoration: none;background-color: #373565; padding:5px 35px;font-size:30px ;border-radius:30px ;">مزايدة</a>
                    <h2>(الوصف)</h2>
                </div>

                <div class="timer">
                    <div>
                        <h2 style="background-color:white;color: black;" class="seconed6">Time</h2>
                        <h3>ثانية</h3>
                    </div>
                    <div>
                        <h2 class="minute6">Time</h2>
                        <h3>دقيقة</h3>
                    </div>
                    <div>
                        <h2 class="hours6">Time</h2>
                        <h3>ساعة</h3>
                    </div>
                    <div>
                        <h2 class="days6">Time</h2>
                        <h3>يوم</h3>
                    </div>

                    <div class="item5">متبقى على انتهاء المزاد</div>
                </div>
            </div>


        </div>

        <div class="row1">

            <div class="box1">
                <div class="imgbox">
                    <a href="#" class="imglink"><img src="{{url('/images/products/7.jpg')}}" alt=""></a>
                    <div class="btns">
                        <button class="btn"><i onclick="Toggle7()" id="btnh7" class="fas fa-heart"></i></button>
                    </div>

                </div>

                <div class="info1">
                    <div class="price">
                        <span style="background-color: #373565;padding:5px 10px;border-radius:15px ; ">ج.م199.99</span>
                        <h3 style="margin-left:10px ;">يبدأ من</h3>
                    </div>

                    <div>
                        <a href="#"
                            style="text-decoration: none; background-color: grey;padding:10px;font-size:17px ;border-radius:32px ;">ساعات</a>
                    </div>
                </div>

                <div class="info2">
                    <a href="#"
                        style="text-decoration: none;background-color: #373565; padding:5px 35px;font-size:30px ;border-radius:30px ;">مزايدة</a>
                    <h2>(الوصف)</h2>
                </div>

                <div class="timer">
                    <div>
                        <h2 style="background-color:white;color: black;" class="seconed7">Time</h2>
                        <h3>ثانية</h3>
                    </div>
                    <div>
                        <h2 class="minute7">Time</h2>
                        <h3>دقيقة</h3>
                    </div>
                    <div>
                        <h2 class="hours7">Time</h2>
                        <h3>ساعة</h3>
                    </div>
                    <div>
                        <h2 class="days7">Time</h2>
                        <h3>يوم</h3>
                    </div>

                    <div class="item6">متبقى على انتهاء المزاد</div>
                </div>
            </div>


        </div>--}}
    </section>

    <script src="{{url('js/homepage/main.js')}}">


    </script>



</body>

</html>