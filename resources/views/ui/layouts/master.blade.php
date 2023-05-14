<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
<title>VRIT SIKHSHYA</title>

<link rel="shortcut icon" type="image/x-icon" href="{{asset('uiassets/img/favicon.svg')}}">

<link rel="stylesheet" href="{{asset('uiassets/css/bootstrap.min.css')}}">

<link rel="stylesheet" href="{{asset('uiassets/plugins/fontawesome/css/fontawesome.min.css')}}">
<link rel="stylesheet" href="{{asset('uiassets/plugins/fontawesome/css/all.min.css')}}">

<link rel="stylesheet" href="{{asset('uiassets/css/owl.carousel.min.css')}}">
<link rel="stylesheet" href="{{asset('uiassets/css/owl.theme.default.min.css')}}">

<link rel="stylesheet" href="{{asset('uiassets/plugins/feather/feather.css')}}">

<link rel="stylesheet" href="{{asset('uiassets/plugins/slick/slick.css')}}">
<link rel="stylesheet" href="{{asset('uiassets/plugins/slick/slick-theme.css')}}">

<link rel="stylesheet" href="{{asset('uiassets/plugins/select2/css/select2.min.css')}}">

<link rel="stylesheet" href="{{asset('uiassets/plugins/swiper/css/swiper.min.css')}}">

<link rel="stylesheet" href="{{asset('uiassets/plugins/aos/aos.css')}}">

<link rel="stylesheet" href="{{asset('uiassets/css/style.css')}}">
</head>
<body class="home-two">

<div class="main-wrapper">
  <header class="header header-two">
    <div class="header-fixed">
       <nav class="navbar navbar-expand-lg header-nav scroll-sticky">
          <div class="container">
             <div class="navbar-header">
                <a id="mobile_btn" href="javascript:void(0);">
                <span class="bar-icon">
                <span></span>
                <span></span>
                <span></span>
                </span>
                </a>
                <a href="{{url('/')}}" class="navbar-brand logo">
                  VRIT SHIKSHYA
                {{-- <img src="assets/img/logo.svg" class="img-fluid" alt="VRIT SIKHSHYA"> --}}
                </a>
             </div>
             <div class="main-menu-wrapper">
                <div class="menu-header">
                   <a href="{{url('/')}}" class="menu-logo">
                    VRIT SHIKSHYA
                   {{-- <img src="assets/img/logo.svg" class="img-fluid" alt="Logo"> --}}
                   </a>
                   <a id="menu_close" class="menu-close" href="javascript:void(0);">
                   <i class="fas fa-times"></i>
                   </a>
                </div>
                <ul class="main-nav">
                   <li class="has-submenu menu-effect active">
                      <a href="{{url('/')}}">Home </a>
                   </li>
                   <li class="has-submenu menu-effect">
                      <a href="{{url('/colleges')}}">Colleges </a>
                   </li>
                   <li class="has-submenu menu-effect">
                    <a href="{{url('/travel-colleges')}}">Consecutive Visit </a>
                 </li>
                 <li class="has-submenu menu-effect">
                  <a href="{{url('/permute-colleges')}}">Best Path Visit </a>
               </li>
                   <li class="has-submenu menu-effect">
                      <a href="{{url('/courses')}}">Courses</i></a>
                   </li>
                   <li class="login-link">
                      <a href="{{url('/login')}}">Login</a>
                   </li>
                </ul>
             </div>
             <ul class="nav header-navbar-rht">
                <li class="nav-item">
                   <a class="login-head button" href="{{url('/login')}}">Login</a>
                </li>
              
             </ul>
          </div>
       </nav>
    </div>
 </header>

@yield('content')

<footer class="footer footer-two" data-aos="fade-up">

    <div class="footer-top">
    <div class="container">
    <div class="row">
    <div class="col-lg-4 col-md-6 col-sm-6 col-12">
    
    <div class="footer-widget footer-about">
    <div class="footer-logo">
    {{-- <img src="assets/img/logo.svg" alt="logo"> --}}
    </div>
    <div class="footer-about-content">
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut consequat mauris Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut consequat mauris</p>
    </div>
    <div class="social-icon">
    <ul>
    <li>
    <a href="#" target="_blank"><i class="feather-facebook"></i></a>
    </li>
    <li>
    <a href="#" target="_blank"><i class="feather-twitter"></i></a>
    </li>
    <li>
    <a href="#" target="_blank"><i class="feather-instagram"></i></a>
    </li>
    <li>
    <a href="#" target="_blank"><i class="feather-linkedin"></i></a>
    </li>
    </ul>
    </div>
    </div>
    
    </div>
    <div class="col-lg-2 col-md-6 col-sm-6 col-12">
    
    <div class="footer-widget footer-menu footer-menu-two">
    <h2 class="footer-title">For Instructor</h2>
    <ul>
    <li><a href="instructor-profile.html.htm">Profile</a></li>
    <li><a href="login.html.htm">Login</a></li>
    <li><a href="register.html.htm">Register</a></li>
    <li><a href="instructor-list.html.htm">Instructor</a></li>
    <li><a href="deposit-instructor-dashboard.html.htm"> Dashboard</a></li>
    </ul>
    </div>
    
    </div>
    <div class="col-lg-2 col-md-6 col-sm-6 col-12">
    
    <div class="footer-widget footer-menu footer-menu-two">
    <h2 class="footer-title">For Student</h2>
    <ul>
    <li><a href="student-profile.html.htm">Profile</a></li>
    <li><a href="login.html.htm">Login</a></li>
    <li><a href="register.html.htm">Register</a></li>
    <li><a href="students-list.html.htm">Student</a></li>
    <li><a href="deposit-student-dashboard.html.htm"> Dashboard</a></li>
    </ul>
    </div>
    
    </div>
    <div class="col-lg-4 col-md-6 col-sm-6 col-12">
    
    <div class="footer-widget footer-contact footer-contact-two">
    <h2 class="footer-title">Address</h2>
    <div class="footer-contact-widget">
    <div class="footer-address">
    <h6>Location</h6>
    <p> 3556 Beech Street, San Francisco,<br> California, CA 94108 </p>
    </div>
    <h6>Email Address</h6>
    <p>
    <a href="/cdn-cgi/l/email-protection#06627463676b756a6b7546637e676b766a632865696b"><span class="__cf_email__" data-cfemail="4b2f392e2a26382726380b2e332a263b272e65282426">[email&#160;protected]</span></a>
    </p>
    <h6>Phone number</h6>
    <p class="mb-0">
    <a href="tel:+191234567890">+19 123-456-7890</a>
    </p>
    </div>
    </div>
    
    </div>
    </div>
    </div>
    </div>
    
    
    <div class="footer-bottom">
    <div class="container">
    
    <div class="copyright">
    <div class="row">
    <div class="col-md-6 col-sm-12">
    <div class="copyright-text">
    <p class="mb-0">&copy; 2023 VRIT SIKHSHYA. All rights reserved.</p>
    </div>
    </div>
    <div class="col-md-6 col-sm-12">
    <div class="privacy-policy">
    <ul>
    <li><a href="term-condition.html.htm">Terms & Condition</a></li>
    <li><a href="privacy-policy.html.htm">Privacy Policy</a></li>
    <li><a href="support.html.htm">Contact Us</a></li>
    </ul>
    </div>
    </div>
    </div>
    </div>
    
    </div>
    </div>
    
    </footer>
    
    </div>
    
    {{-- <script data-cfasync="false" src="../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script> --}}
    <script src="{{asset('uiassets/js/jquery-3.6.0.min.js')}}"></script>
    
    <script src="{{asset('uiassets/js/bootstrap.bundle.min.js')}}"></script>
    
    <script src="{{asset('uiassets/js/owl.carousel.min.js')}}"></script>
    
    <script src="{{asset('uiassets/plugins/aos/aos.js')}}"></script>
    
    <script src="{{asset('uiassets/js/jquery.waypoints.js')}}"></script>
    <script src="{{asset('uiassets/js/jquery.counterup.min.js')}}"></script>
    
    <script src="{{asset('uiassets/plugins/select2/js/select2.min.js')}}"></script>
    
    <script src="{{asset('uiassets/plugins/slick/slick.js')}}"></script>
    
    <script src="{{asset('uiassets/plugins/swiper/js/swiper.min.js')}}"></script>
    
    <script src="{{asset('uiassets/js/script.js')}}"></script>

    <script>

        // Check if the location is already stored in cookie or localStorage
var storedLocation = getStoredLocation();

if (storedLocation) {
  // Location is already stored, use it
  processLocation(storedLocation);
} else {
  // Location is not stored, ask for it
  askForLocation();
}

function askForLocation() {
  // Ask for the user's location
  navigator.geolocation.getCurrentPosition(
    function (position) {
      // Retrieve the latitude and longitude from the position object
      var latitude = position.coords.latitude;
      var longitude = position.coords.longitude;

      // Store the location in cookie or localStorage
      storeLocation(latitude, longitude);

      // Process the location
      processLocation([latitude, longitude]);
    },
    function (error) {
      // Handle the error if location retrieval fails
      console.log('Failed to retrieve location:', error.message);
    }
  );
}

function storeLocation(latitude, longitude) {
  // Check if localStorage is available
  if (typeof Storage !== 'undefined') {
    // Store the location in localStorage
    localStorage.setItem('location', JSON.stringify([latitude, longitude]));
  } else {
    // Store the location in a cookie
    document.cookie = 'location=' + JSON.stringify([latitude, longitude]);
  }
}

function getStoredLocation() {
  // Check if localStorage is available
  if (typeof Storage !== 'undefined') {
    // Retrieve the location from localStorage
    return JSON.parse(localStorage.getItem('location'));
  } else {
    // Retrieve the location from the cookie
    var cookieValue = document.cookie.replace(
      /(?:(?:^|.*;\s*)location\s*\=\s*([^;]*).*$)|^.*$/,
      '$1'
    );
    return JSON.parse(cookieValue);
  }
}

function processLocation(location) {
  // Use the location for further processing or display
  console.log('Location:', location);
  // ...
}

    </script>
    </body>
    </html>