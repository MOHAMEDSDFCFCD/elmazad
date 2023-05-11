<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>PhotoFolio Bootstrap Template - Gallery</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{url('css/copypage/assets/img/favicon.png')}}" rel="icon">
    <link href="{{url('css/copypage/assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Cardo:ital,wght@0,400;0,700;1,400&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{url('css/copypage/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{url('css/copypage/assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
    <link href="{{url('css/copypage/assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">
    <link href="{{url('css/copypage/assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
    <link href="{{url('css/copypage/assets/vendor/aos/aos.css')}}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{url('css/copypage/assets/css/main.css')}}" rel="stylesheet">
    <link href="{{url('css/homepage/Home.css')}}" rel="stylesheet">
    <link href="{{url('css/homepage/bootstrap.min.css')}}" rel="stylesheet">

    <!-- =======================================================
  * Template Name: PhotoFolio
  * Updated: Mar 10 2023 with Bootstrap v5.2.3
  * Template URL: https://bootstrapmade.com/photofolio-bootstrap-photography-website-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="header d-flex align-items-center fixed-top">
        <div class="container-fluid d-flex align-items-center justify-content-between">

            <a href="#" class="logo d-flex align-items-center  me-auto me-lg-0 fs-4">
                <img src="{{url('/images/products/logo.jpeg')}}" alt="" style="width:100px ;height:400px ;">
            </a>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a href="{{route('home.page')}}">الصفحة الرئيسية</a></li>
                    <li><a href="{{route('category.page',6)}}">أثاث</a></li>
                    <li><a href="{{route('category.page',3)}}">الكترونيات</a></li>
                    <li><a href="{{route('category.page',2)}}">ساعات</a></li>
                    <li><a href="{{route('category.page',4)}}">عملات</a></li>
                    <li><a href="{{route('category.page',5)}}">تحف فنية</a></li>
                    <li><a href="{{route('category.page',1)}}">سيارات</a></li>
                </ul>
            </nav><!-- .navbar -->

            <div class="header-social-links">
                <a href="#"> <i class="fa-regular fa-user"></i></a>
                <a href="#"> <i class="fa-regular fa-heart"></i></a>
                <a href="#"> <i class="fa fa-thin fa-house"></i></a>
                <a href="#"> <i class="fa-solid fa-circle-plus"></i></a>
                <a href="{{route('edit.user')}}" class="twitter"><i class="bi bi-twitter"></i></a>
                <a href="{{route('favorite.page')}}" class="facebook"><i class="bi bi-facebook"></i></a>
                <a href="{{route('home.page')}}" class="instagram"><i class="bi bi-instagram"></i></a>
                <a href="" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
            </div>
            <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
            <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

        </div>
    </header><!-- End Header -->
    

    <main id="main" data-aos="fade" data-aos-delay="1500">

        <!-- ======= End Page Header ======= -->

        <!-- ======= Gallery Section ======= -->
        <section style="background-color:#000;margin-top:100px ;">
            <div class="container py-5">
                <div class="row justify-content-center">
                  @foreach ($products as $product)
 
                     <div class="col-md-8 col-lg-6 col-xl-4 ">
                        <div class="card text-white bg-black">
                            <img src="{{url('/images/products/'.$product -> photo_product)}}" style="height:300px;" />
                            <div class="card-body">
                                <div class="text-center">
                                    <h5 class="card-title">{{$product -> category_product}}</h5>
                                    <p class="text-muted mb-4">({{$product -> description}})</p>
                                </div>
                                <div>
                                    <div class="d-flex justify-content-between">
                                        <span>ج.م{{$product -> start_price}}</span> <span>يبدأ من</span>
                                    </div>
                                    <div class="d-flex justify-content-between mt-2">
                                        <span> <div class="timer">
                                            <div>
                                                <h2 style="background-color:white;color: black;" class="second">10</h2>
                                                <h3>ثانية</h3>
                                            </div>
                                            <div style="margin-left:5px ;">
                                                <h2 class="minute">1</h2>
                                                <h3>دقيقة</h3>
                                            </div>
                                            <div style="margin-left:5px ;">
                                                <h2 class="hour">1</h2>
                                                <h3>ساعة</h3>
                                            </div>
                                            <div style="margin-left:5px ;">
                                                <h2 class="day">10</h2>
                                                <h3>يوم</h3>
                                            </div>
                                        </div></span> <span>متبقى على انتهاء المزاد</span>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-center total font-weight-bold mt-4 border-1 ">
                                    <a href="#"
                                    style="text-decoration: none;background-color: #373565; padding:2px 38px;font-size:25px ;border-radius:30px ;color: white;text-align: center;">مزايدة</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach 
                </div>
            </div>
        </section>

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">
        <div class="container">
            <div class="copyright">
                &copy; Copyright <strong><span>MaZad Team</span></strong>. All Rights Reserved
            </div>
        </div>
    </footer><!-- End Footer -->

    <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <div id="preloader">
        <div class="line"></div>
    </div>

    <!-- Vendor JS Files -->
    <script src="{{url('css/copypage/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{url('css/copypage/assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
    <script src="{{url('css/copypage/assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
    <script src="{{url('css/copypage/assets/vendor/aos/aos.js')}}"></script>
    <script src="{{url('css/copypage/assets/vendor/php-email-form/validate.js')}}"></script>

    <!-- Template Main JS File -->
    <script src="{{url('css/copypage/assets/js/main.js')}}"></script>

</body>

</html>