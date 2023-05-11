<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>تسجيل الدخول</title>
    <link href="<?php echo e(url('css/copypage/assets/img/logo.jpg')); ?>" rel="icon"> 
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
    <link rel="stylesheet" href="<?php echo e(url('/css/userlogin/login2.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(url('/css/userlogin/bootstrap.min.css')); ?>">
</head>
<body>
<section>
    <div >
        <div class="logo">
            <img src="<?php echo e(url('/images/admin/logo.jpg')); ?>" alt="">
        </div><!-- logo -->
        <?php if(Session::has('error0')): ?>
        <div class="alert alert-danger" id="sessionErr" style="text-align: center;width:200px;margin: auto;margin-top:20px ;" role="alert">
            <?php echo e(Session::get('error0')); ?>

        </div>
         <?php endif; ?>
    
          
        <form method="POST" action="<?php echo e(route('success.login.user')); ?>">
            <?php echo csrf_field(); ?>
            <div class="input1">
                <input type="text" name="user_name" placeholder="البريد الالكترونى">
            </div>
            <?php $__errorArgs = ['user_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
           
            <small class="form-text text-danger"><?php echo e($message); ?></small>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

            <div class="input3">
                <input type="password" name="pass_word" placeholder="كلمة السر">
            </div>
            <?php $__errorArgs = ['pass_word'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <small class="form-text text-danger" id="error"><?php echo e($message); ?></small>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            <input type="submit" value="تسجيل الدخول" class="submit">

            <div class="lines">
                <div></div>
                <h2>أو</h2>
                <div></div>
            </div>

            <div>
                <a href="<?php echo e(route('register')); ?>" class="signup" value="انشاء حساب جديد">انشاء حساب جديد</a>
            </div>

            <div>
                <a style="background-color: grey" href="<?php echo e(route('view.login')); ?>" class="signup" value="تسجيل دخول الادمن">تسجيل دخول الأدمن</a>
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
</html><?php /**PATH C:\xampp\htdocs\mazada\resources\views/userlogin.blade.php ENDPATH**/ ?>