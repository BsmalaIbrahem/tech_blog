<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Eterna - Professional bootstrap site template for corporate business</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="Your page description here" />
  <meta name="author" content="" />

  <!-- css -->
  <link href="{{asset('css/bootstrap.css')}}" rel="stylesheet" />
  <link href="{{asset('css/bootstrap-responsive.css')}}" rel="stylesheet" />
  <link href="{{asset('css/flexslider.css')}}" rel="stylesheet" />
  <link href="{{asset('css/prettyPhoto.css')}}" rel="stylesheet" />
  <link href="{{asset('css/camera.css')}}" rel="stylesheet" />
  <link href="{{asset('css/jquery.bxslider.css')}}" rel="stylesheet" />
  <link href="{{asset('css/style.css')}}" rel="stylesheet" />

  <!-- Theme skin -->
  <link href="{{asset('color/default.css')}}" rel="stylesheet" />

  <!-- Fav and touch icons -->
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{asset('ico/apple-touch-icon-144-precomposed.png')}}" />
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{asset('ico/apple-touch-icon-114-precomposed.png')}}" />
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{asset('ico/apple-touch-icon-72-precomposed.png')}}" />
  <link rel="apple-touch-icon-precomposed" href="{{asset('ico/apple-touch-icon-57-precomposed.png')}}" />
  <link rel="shortcut icon" href="ico/favicon.png" />

  <!-- =======================================================
    Theme Name: Eterna
    Theme URL: https://bootstrapmade.com/eterna-free-multipurpose-bootstrap-template/
    Author: BootstrapMade.com
    Author URL: https://bootstrapmade.com
  ======================================================= -->
</head>

<body>

  <div id="wrapper" class="fixed">


    <!-- start header -->
    <header>
      <div class="top">
      </div>
      <div class="container">


        <div class="row nomargin">
          <div class="span4">
            <div class="logo">
                <a href="{{route('admin.adminPosts')}}" style="font-size:20px; text-transform:capitalize">
                    <img src="{{asset('ico/favicon.png')}}" alt="" /> {{auth()->guard('admin')->user()->name}}
                </a>

            </div>
          </div>
          <div class="span8">
            <div class="navbar navbar-static-top">
              <div class="navigation">
                <nav>
                  <ul class="nav topnav">
                    <li class="dropdown active">
                      <a href="{{route('admin.index')}}"><i class="icon-home"></i> Home <i class="icon-angle-down"></i></a>
                    </li>

                    <li class="dropdown">
                      <a href="#">Posts<i class="icon-angle-down"></i></a>
                      <ul class="dropdown-menu">
                        <li><a href="{{route('admin.createPost')}}">Add</a></li>
                        <li><a href="{{route('admin.posts')}}">show</a></li>
                      </ul>
                    </li>
                    <li class="dropdown">
                      <a href="#">Pages <i class="icon-angle-down"></i></a>
                      <ul class="dropdown-menu">
                        <li><a href="about.html">About us</a></li>
                        <li><a href="faq.html">FAQ</a></li>
                        <li><a href="team.html">Team</a></li>
                        <li><a href="services.html">Services</a></li>
                        <li><a href="pricingbox.html">Pricing boxes</a></li>
                        <li><a href="404.html">404</a></li>
                      </ul>
                    </li>
                    <li class="dropdown">
                      <a href="#">Settings <i class="icon-angle-down"></i></a>
                      <ul class="dropdown-menu">
                        <li><a href="portfolio-3cols.html">Portfolio 3 columns</a></li>
                        <li><a href="portfolio-4cols.html">Portfolio 4 columns</a></li>
                        <li><a href="portfolio-detail.html">Portfolio detail</a></li>
                        <li>
                            <form action="{{route('admin.logout')}}" method="post">
                                @csrf
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
</div>



  <!-- javascript
    ================================================== -->
  <!-- Placed at the end of the document so the pages load faster -->

  <script src="{{asset('js/jquery.js')}}"></script>
  <script src="{{asset('js/jquery.easing.1.3.js')}}"></script>
  <script src="{{asset('js/bootstrap.js')}}"></script>

  <script src="{{asset('js/modernizr.custom.js')}}"></script>
  <script src="{{asset('js/toucheffects.js')}}"></script>
  <script src="{{asset('js/google-code-prettify/prettify.js')}}"></script>
  <script src="{{asset('js/jquery.bxslider.min.js')}}"></script>
  <script src="{{asset('js/camera/camera.js')}}"></script>
  <script src="{{asset('js/camera/setting.js')}}"></script>

  <script src="{{asset('js/jquery.prettyPhoto.js')}}"></script>
  <script src="{{asset('js/portfolio/jquery.quicksand.js')}}"></script>
  <script src="{{asset('js/portfolio/setting.js')}}"></script>

  <script src="{{asset('js/jquery.flexslider.js')}}"></script>
  <script src="{{asset('js/animate.js')}}"></script>
  <script src="{{asset('js/inview.js')}}"></script>

  <!-- Template Custom JavaScript File -->
  <script src="{{asset('js/custom.js')}}"></script>



</body>

</html>
