<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>CodePen - Finance Mobile Application-UX/UI Design Screen One</title>
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap'><link rel="stylesheet" href="<?php echo e(asset('admin/style.css')); ?>">

</head>
<body>
<?php echo $__env->make('errors', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo e(@$error); ?>

<!-- partial:index.partial.html -->
<form  action="<?php echo e(route('admin.login')); ?>" method="post">
    <?php echo csrf_field(); ?>
<div class="screen-1">
  <div class="logo" >
    <h1>Login</h1>
   </div>
  <div class="email">
    <div class="sec-2">
      <ion-icon name="mail-outline"></ion-icon>
      <input type="email" name="email" placeholder="Email Address" value="<?php echo e(old('email')); ?>"/>
    </div>
  </div>
  <div class="password">
    <div class="sec-2">
      <ion-icon name="lock-closed-outline"></ion-icon>
      <input class="pas" type="password" name="password" placeholder="Password"/>
      <ion-icon class="show-hide" name="eye-outline"></ion-icon>
    </div>
  </div>
  <button class="login">Login </button>
  <div class="footer"><span>Forgot Password?</span></div>
</div>
<!-- partial -->
</form>

</body>
</html>
<?php /**PATH C:\xampp3\htdocs\tech blog\resources\views/admin/login.blade.php ENDPATH**/ ?>