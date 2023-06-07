<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Eterna - Professional bootstrap site template for corporate business</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="Your page description here" />
  <meta name="author" content="" />

  <link href="<?php echo e(asset('css/bootstrap.css')); ?>" rel="stylesheet" />
  <link href="<?php echo e(asset('css/bootstrap-responsive.css')); ?>" rel="stylesheet" />
  <link href="<?php echo e(asset('css/flexslider.css')); ?>" rel="stylesheet" />
  <link href="<?php echo e(asset('css/prettyPhoto.css')); ?>" rel="stylesheet" />
  <link href="<?php echo e(asset('css/camera.css')); ?>" rel="stylesheet" />
  <link href="<?php echo e(asset('css/jquery.bxslider.css')); ?>" rel="stylesheet" />
  <link href="<?php echo e(asset('css/style.css')); ?>" rel="stylesheet" />

  <!-- Theme skin -->
  <link href="<?php echo e(asset('color/default.css')); ?>" rel="stylesheet" />

  <!-- Fav and touch icons -->
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo e(asset('ico/apple-touch-icon-144-precomposed.png')); ?>" />
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo e(asset('ico/apple-touch-icon-114-precomposed.png')); ?>" />
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo e(asset('ico/apple-touch-icon-72-precomposed.png')); ?>" />
  <link rel="apple-touch-icon-precomposed" href="<?php echo e(asset('ico/apple-touch-icon-57-precomposed.png')); ?>" />
  <link rel="shortcut icon" href="ico/favicon.png" />


  <!-- =======================================================
    Theme Name: Eterna
    Theme URL: https://bootstrapmade.com/eterna-free-multipurpose-bootstrap-template/
    Author: BootstrapMade.com
    Author URL: https://bootstrapmade.com
  ======================================================= -->
</head>

<body>

  <div id="wrapper">


    <!-- start header -->
    <header>
      <div class="top">
      </div>
      <div class="container">


        <div class="row nomargin">
          <div class="span4">
            <div class="logo">
               <?php if(auth()->check()): ?>
                <a href="<?php echo e(route('index')); ?>" style="font-size:20px; text-transform:capitalize"><img src="<?php echo e(asset('ico/favicon.png')); ?>" alt="" /> <?php echo e(auth()->user()->name); ?></a>
               <?php else: ?>
                <a href="<?php echo e(route('auth')); ?>"style="font-size:25px; text-transform:capitalize; text-decoration:underline"><img src="<?php echo e(asset('ico/favicon.png')); ?>" alt="" /> login</a>
               <?php endif; ?>
            </div>
          </div>
          <div class="span8">
            <div class="navbar navbar-static-top">
              <div class="navigation">
                <nav>
                  <ul class="nav topnav">
                    <li class="dropdown active">
                      <a href="<?php echo e(route('index')); ?>"><i class="icon-home"></i> Home</a>
                    </li>

                    <li class="dropdown">
                      <a href="<?php echo e(route('showPosts')); ?>">Posts</a>
                    </li>

                    <li class="dropdown">
                      <a href="<?php echo e(route('viewFav')); ?>">Favorite</a>
                    </li>
                    <li class="dropdown">
                      <a href="#">Settings <i class="icon-angle-down"></i></a>
                      <ul class="dropdown-menu">
                        <li><a href="portfolio-3cols.html">Portfolio 3 columns</a></li>
                        <li><a href="portfolio-4cols.html">Portfolio 4 columns</a></li>
                        <li><a href="portfolio-detail.html">Portfolio detail</a></li>
                        <li>
                            <form action="<?php echo e(route('logout')); ?>" method="post">
                                <?php echo csrf_field(); ?>
                                <button type="submit" class="btn btn-lg"
                                    style="width:100%; text-align:left;">logout</button>
                            </form>
                        </li>
                      </ul>
                    </li>
                    <li>
                      <a href="contact.html">Contact </a>
                    </li>
                  </ul>
                </nav>
              </div>
              <!-- end navigation -->
            </div>
          </div>
        </div>
      </div>
    </header>



 <!-- javascript
    ================================================== -->
  <!-- Placed at the end of the document so the pages load faster -->

  <script src="<?php echo e(asset('js/jquery.js')); ?>"></script>
  <script src="<?php echo e(asset('js/jquery.easing.1.3.js')); ?>"></script>
  <script src="<?php echo e(asset('js/bootstrap.js')); ?>"></script>

  <script src="<?php echo e(asset('js/modernizr.custom.js')); ?>"></script>
  <script src="<?php echo e(asset('js/toucheffects.js')); ?>"></script>
  <script src="<?php echo e(asset('js/google-code-prettify/prettify.js')); ?>"></script>
  <script src="<?php echo e(asset('js/jquery.bxslider.min.js')); ?>"></script>
  <script src="<?php echo e(asset('js/camera/camera.js')); ?>"></script>
  <script src="<?php echo e(asset('js/camera/setting.js')); ?>"></script>

  <script src="<?php echo e(asset('js/jquery.prettyPhoto.js')); ?>"></script>
  <script src="<?php echo e(asset('js/portfolio/jquery.quicksand.js')); ?>"></script>
  <script src="<?php echo e(asset('js/portfolio/setting.js')); ?>"></script>

  <script src="<?php echo e(asset('js/jquery.flexslider.js')); ?>"></script>
  <script src="<?php echo e(asset('js/animate.js')); ?>"></script>
  <script src="<?php echo e(asset('js/inview.js')); ?>"></script>

  <!-- Template Custom JavaScript File -->
  <script src="<?php echo e(asset('js/custom.js')); ?>"></script>



</body>

</html>
<?php /**PATH C:\xampp3\htdocs\tech blog\resources\views/navbar.blade.php ENDPATH**/ ?>