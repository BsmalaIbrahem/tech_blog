
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>CodePen - Sign up / Login Form</title>
  <link rel="stylesheet" href="./style.css">
   <link href="css/style.css" rel="stylesheet" />

</head>
<body>
<section id="inner-headline">
    <div class="container" >
        <div class="row" style="margin-bottom:5px">
            <div class="span12">
            <div class="inner-heading">
                <ul class="breadcrumb">
                <li><a href="<?php echo e(route('index')); ?>">Home</a> <i class="icon-angle-right"></i></li>
                <li class="active">sign up / login</li>
                </ul>
            </div>
            </div>
        </div>
    </div>
</section>
<!DOCTYPE html>
<html>
<head>
	<title>Slide Navbar</title>
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('style.css')); ?>">

</head>
<body>
<?php echo $__env->make('errors', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo e(@$error); ?>

	<div class="main">
		<input type="checkbox" id="chk" aria-hidden="true">
			<div class="signup">
				<form method="post" action="<?php echo e(route('signUp')); ?>">
                     <?php echo csrf_field(); ?>
					<label for="chk" aria-hidden="true">Sign up</label>
					<input type="text" name="name" placeholder="User name" value="<?php echo e(old('name')); ?>" required="">
					<input type="email" name="email" placeholder="Email" required="" value="<?php echo e(old('email')); ?>">
					<input type="password" name="password" placeholder="Password" required="">
                    <input type="password" name="password_confirmation" placeholder="Password confirmation" required="">
					<button>Sign up</button>
				</form>
			</div>

			<div class="login">
				<form action="<?php echo e(route('login')); ?>" method="post">
                    <?php echo csrf_field(); ?>
					<label for="chk" aria-hidden="true">Login</label>
					<input type="email" name="email" placeholder="Email" required="" value="<?php echo e(old('email')); ?>">
					<input type="password" name="password" placeholder="Password" required="">
					<button>Login</button>
				</form>
			</div>
	</div>
</body>
</html>
<!-- partial -->

</body>
</html>
<?php /**PATH C:\xampp3\htdocs\tech blog\resources\views/auth.blade.php ENDPATH**/ ?>