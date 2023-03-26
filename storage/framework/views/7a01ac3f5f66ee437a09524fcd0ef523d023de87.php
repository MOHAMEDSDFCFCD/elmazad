<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>تسجيل الدخول</title>
    <style>
      form .submit{
        display:inline-block ;
        
      }
      form #error{
        display: block;
      }

    </style>
    <link rel="stylesheet" href="<?php echo e(url('/css/adminlogin/style.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(url('/css/adminlogin/bootstrap.min.css')); ?>">
    
</head>
<body>
<section>
    <div class="container">
        <div class="logo">
            <img src="<?php echo e(url('/images/admin/logo.jpg')); ?>" alt="">
        </div><!-- logo -->
        <h2>تسجيل دخول المشرف</h2>
        <?php if(Session::has('error')): ?>

        <div class="alert alert-danger" style="text-align: center;width:200px;margin: auto;margin-top:20px ;" role="alert">
            <?php echo e(Session::get('error')); ?>

            <?php header("Refresh:10")?>
        </div>
       <?php endif; ?>
        <form method="POST" action="<?php echo e(route('success.login')); ?>">
            <?php echo csrf_field(); ?>
            <div class="input1">
                <input type="text" name="username" placeholder="البريد الالكتروني">
            </div>
            <?php $__errorArgs = ['username'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <?php header("Refresh:10")?>
            <small class="form-text text-danger"><?php echo e($message); ?></small>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            
            <div class="input2">
                <input type="text" name="number" placeholder="رقم الهوية الشخصية">
            </div>
            <?php $__errorArgs = ['number'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <?php header("Refresh:10")?>
            <small  class="form-text text-danger"><?php echo e($message); ?></small>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

            <div class="input3">
                <input type="password" name="password" placeholder="كلمة السر">
            </div>
            <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <?php header("Refresh:10")?>
            <small class="form-text text-danger" id="error"><?php echo e($message); ?></small>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

            <input type="submit" name="submit" value="تسجيل الدخول" class="submit">

        </form>
        
    </div><!-- container -->
</section>

<div class="lines">
    <div></div>
    <div></div>
</div>
    
</body>
</html><?php /**PATH C:\xampp\htdocs\mazada\resources\views/adminlogin.blade.php ENDPATH**/ ?>