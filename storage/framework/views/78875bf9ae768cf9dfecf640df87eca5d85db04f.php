<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal</title>
    <link href="<?php echo e(url('css/copypage/assets/img/logo.jpg')); ?>" rel="icon"> 
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
    <link rel="stylesheet" href="<?php echo e(url('/css/updateuserprofile/all.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(url('/css/updateuserprofile/bootstrap.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(url('/css/updateuserprofile/personal.css')); ?>">
</head>

<body>
    <header>
        <img src="<?php echo e(url('/images/updateuserprofile/IMG.11.jpg')); ?>" alt="">
    </header>

    <section class="contant">

       

        <form method="POST" action="<?php echo e(route('update.userprofile',$user[0]->id)); ?>" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <div class="line1">
                <input type="submit" value="تم" class="done">
                <div class="img">
                    <h2>البيانات الشخصية</h2>
                  
                    <img src="<?php echo e(url('/dynmicimages/updateuserprofile/'.$user[0]->photo)); ?>" alt="" height="260px" width="270px">
                    <h4>تغيير صورة الملف الشخصى</h4>
                    <input type="file" name="photo" value="تغيير صورة الملف الشخصى" class="change">
                        <?php $__errorArgs = ['photo'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                     <small class="form-text text-danger"><?php echo e($message); ?></small>
                     <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div><!-- img -->    
            </div><!-- perinfo -->
            <?php if(Session::has('success')): ?>
            <div class="alert alert-success" id="sessionErr" style="text-align: center;width:200px;margin: auto;margin-top:20px ;">  <?php echo e(Session::get('success')); ?></div>
            <?php endif; ?>

            
            <input type="email" class="email" name="user_name" placeholder="البريد الالكتروني"  value="<?php echo e($user[0]->user_name); ?>">
             <?php $__errorArgs = ['user_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <small class="form-text text-danger" id="error"><?php echo e($message); ?></small>
             <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
             <a href="<?php echo e(route('viewforgetpass.user')); ?>" id="forget" class="btn btn-primary btn-sm float-end">تغير كلمةالسر</a>  
           
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

</html><?php /**PATH C:\xampp\htdocs\mazada\resources\views/updateuserprofile.blade.php ENDPATH**/ ?>