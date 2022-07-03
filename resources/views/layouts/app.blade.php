<!DOCTYPE html>
<html dir="rtl">
 
<head>
    
    <meta charset="utf-8">
    <title>مطعم هوت سناك</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free Website Template" name="keywords">
    <meta content="Free Website Template" name="description">
    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">
    <!-- Google Font -->

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
  
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
      <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>




@livewireStyles

</head>
<body>
    <!-- Nav Bar Start -->
    <div class="navbar navbar-expand-lg bg-light navbar-light">
        <div class="container-fluid">
            <a style="margin-left: 60px ; color: #fbaf32" href="/" class="navbar-brand">هوت <span>سناك</span></a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
            <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                <div class="navbar-nav ml-auto">
                  
                    <a href="/" style="color: #fbaf32" class="nav-item nav-link active">الصفحة الرئيسة</a>
              <!--      <a href="/test" style="color: #fbaf32" class="nav-item nav-link active">test</a>-->

                    @guest
                    <a href="/menu" style="color: #fbaf32" class="nav-item nav-link ">القائمة</a>
                    @endguest
                    @auth
                    <a href="/menus"  style="color: #fbaf32" class="nav-item nav-link ">القائمة</a>

                    @endauth
                    <a href="/about"  style="color: #fbaf32" class="nav-item nav-link">نحن</a>
                    <a href="/contact"  style="color: #fbaf32" class="nav-item nav-link">تواصل معنا</a>
                    @guest
                    <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">تسجيل الدخول</a>
                    </li>

                    @else
                    <li class="nav-item dropdown dropdown-menu-right">
                    <a id="navbarDropdown" style="color: #fbaf32" class="nav-item nav-link" href="#" role="button"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    @php 
                    $parts = explode(" ", Auth::user()->name);
                    echo $parts[0]; 
                    @endphp<i class="fas fa-angle-down"></i>
                    </a>
                    <div  class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">

                    <a class="dropdown-item" href="/MyOrder"><i class="far fa-shopping-cart"></i> طلباتي  </a> 
                    <hr class="dropdown-divider">
                    <a style="color: red" class="dropdown-item" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                    <i class="fas fa-sign-out-alt"></i>  تسجيل خروج
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                    </form>
                    </div>
                    </li>
                    @endguest

              
              
              
              
              
                </div>
            </div>
        </div>  
        
    

    </div>
     
        @yield('content')
        {{ $slot ?? ''}}        

        <!-- Footer Start -->
        <div class="footer" style="text-align: right">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="footer-contact">
                                    <h2>العنوان</h2>
                                    <p><i class="fa fa-map-marker-alt"></i>اسكان الامير طلال مثلث راية</p>
                                    <p><i class="fa fa-phone-alt"></i>0788594010</p>
                                    <p><i class="fa fa-envelope"></i>info@example.com</p>
                                    <div class="footer-social">
                                        <a href=""><i class="fab fa-facebook-f"></i></a>
                                        <a href=""><i class="fab fa-youtube"></i></a>
                                        <a href=""><i class="fab fa-instagram"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="footer-link">
                                    <h2>روابط</h2>
                                    <a href="/">الصفحة الرئيسة</a>
                                    <a href="/menu">القائمة</a>
                                    <a href="/about">نحن</a>
                                    <a href="/contact">تواصل معنا</a>
                                    <a href="">ادمن</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="footer-newsletter">
                            <h2>هوت سناك</h2>
                            <p>
                                مطعم شاورما وسناكات وبروستد
                            </p>

                        </div>
                    </div>
                </div>
            </div>
            <div class="copyright">
                <div class="container">
                    <p>حقوق النشر والنسخ &copy; مطعم هوت سناك , جميع الحقوق محفوظة.</p><br>
                    <p>صمم بواسطة <a href="http://hamza-it.ml/">حمزة الزغبية</a></p>
                </div>
            </div>
        </div>
        <!-- Footer End -->
    
        <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

       
        <!-- JavaScript Libraries -->
       
        
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/owlcarousel/owl.carousel.min.js"></script>
        <script src="lib/tempusdominus/js/moment.min.js"></script>
        <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
        <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>
    
    
        <!-- Template Javascript -->
        <script src="js/main.js"></script>
        
      
 @livewireScripts
    </body>
    
    </html>