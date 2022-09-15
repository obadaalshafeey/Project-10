{{-- <!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Quicksand:400,600,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="fon/icomoon/style.css">

    <link rel="stylesheet" href="cssc/owl.carousel.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="cssc/bootstrap.min.css">
    
    <!-- Style -->
    <link rel="stylesheet" href="cssc/style.css">

    <title>Website Menu #9</title>
    <link rel="stylesheet" href="/css/@yield('css','')">
  </head>
  
  <body>


    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div> <!-- .site-mobile-menu -->
    

    <!-- NAVBAR -->
    <header class="site-navbar mt-3">
      <div class="container-fluid" id="color">
        <div class="row align-items-center">
          <div class="site-logo col-6"><a href="index.html">Nuzol</a></div>

          <nav class="mx-auto site-navigation">
            <ul class="site-menu js-clone-nav d-none d-xl-block ml-0 pl-0">
              <li><a href="{{ url("landeing")}}" class="nav-link active">Home</a></li>
              <li><a href="{{ url("AboutUs")}}">About Us</a></li>
              <li >
                <a href="{{ url("room")}}">Rooms</a>
              </li>
              <li >
                <a href="{{ url("ContactUs")}}">ContactUs</a>
              </li>
              <li><a href="blog.html">Blog</a></li>
              <li class="d-lg-none"><a href="post-job.html"><span class="mr-2">+</span> Post a Job</a></li>
              <li class="d-lg-none"><a href="login.html">Log In</a></li>
            </ul>
          </nav>
          
          <div class="right-cta-menu text-right d-flex aligin-items-center col-6">
            <div class="ml-auto">
              @if(!session('loginin'))
              <a href="/" class="btn btn-outline-white border-width-2 d-none d-lg-inline-block"><span class="mr-2 icon-add"></span>regstrion</a>
              <a href="/login" class="btn btn-light border-width-2 d-none d-lg-inline-block"><span class="mr-2 icon-lock_outline"></span>Log In</a>
            </div>
            @endif
            @if(session('loginin'))
            <a href="/out" class="btn btn-light border-width-2 d-none d-lg-inline-block"><span class="mr-2 icon-lock_outline"></span>Log Out</a>
            </div>
            
            @endif
            <a href="#" class="site-menu-toggle js-menu-toggle d-inline-block d-xl-none mt-lg-2 ml-3"><span class="icon-menu h3 m-0 p-0 mt-2"></span></a>
          </div>

        </div>
      </div>
    </header>
 


 --}}
