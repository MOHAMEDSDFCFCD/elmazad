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
    <link rel="stylesheet" href="<?php echo e(url('css/homepage/all.min.css')); ?>">
    <link href='https://css.gg/heart.css' rel='stylesheet'>
    <link rel="stylesheet" href="<?php echo e(url('css/homepage/home.css')); ?>">
</head>

<body>
    <header>
        <div class="icon">
            <a href="<?php echo e(route('edit.user')); ?>"><i class="fa-regular fa-user"></i></a>
            <a href="<?php echo e(route('favorite.page')); ?>"><i class="fa-regular fa-heart"></i></a>
            <a href="#"><i class="fa-regular fa-bell"></i></a>
            <a href="<?php echo e(route('home.page')); ?>"><i class="fa fa-thin fa-house"></i></a>
            <div class="add">
                <a href="#"><i class="fa-solid fa-circle-plus"></i></a>
            </div><!-- addicon -->
        </div><!-- icons -->

        <div id="search">
            <form>
                <input class="search" type="text" name="text" placeholder="بحث">
            </form>
        </div>

        <img src="<?php echo e(url('/images/products/logo.jpg')); ?>" alt="">
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
                    <a href="<?php echo e(route('home.page')); ?>">الصفحة الرئيسية</a>
                    <a href="#">بحث</a>
                    <a href="#">من نحن</a>
                    <a href="#">تواصل معنا</a>
                    <a href="#">دليل المستخدم</a>
                    <a href="#">تعليمات المزاد الالكترونى</a>
                    <a href="#">الشروط والاحكام</a>
                    <a href="<?php echo e(route('view.login.user')); ?>">تسجيل الدخول</a>
                    <a href="#">تسجيل الخروج</a>
                </div>
            </div>


        </div><!-- right -->
    </div><!-- icon2 -->


    <section class="menu" id="menu">
      <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            
        <div class="row1">
            <div class="box1">
                <div class="imgbox">
                    <a href="<?php echo e(url('product/'.$product -> id)); ?>" class="imglink"><img src="<?php echo e(url('/images/products/'.$product -> photo_product)); ?>" alt=""></a>

                    <div class="btns">
                        <button class="btn"><i onclick="Toggle1()" id="btnh1" class="fas fa-heart"></i></button>
                    </div>
                </div><!-- img -->


                <div class="info1">
                    <div class="price">
                        <span style="background-color: #373565;padding:5px 10px;border-radius:15px ; "><?php echo e($product-> start_price); ?></span>
                        <h3 style="margin-left:10px ;">يبدأ من</h3>
                    </div>

                    <div>
                        <a href="#"
                            style="text-decoration: none; background-color: grey;padding:10px;font-size:17px ;border-radius:32px ;"><?php echo e($product-> category_product); ?></a>
                    </div>
                </div><!-- info1 -->

                <div class="info2">
                    <a href="<?php echo e(route('bidding.page')); ?>"
                        style="text-decoration: none;background-color: #373565; padding:5px 35px;font-size:30px ;border-radius:30px ;">مزايدة</a>
                    <h2>(<?php echo e($product -> description); ?>)</h2>
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
         <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>      
         
    </section>

    <script src="<?php echo e(url('js/homepage/main.js')); ?>">


    </script>



</body>

</html><?php /**PATH C:\xampp\htdocs\mazada\resources\views/homepage.blade.php ENDPATH**/ ?>