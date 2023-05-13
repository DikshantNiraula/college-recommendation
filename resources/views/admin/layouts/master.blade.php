<!DOCTYPE html>
<html lang="en">

<head>
    <title>Admin Portal | VRIT SIKSHA</title>
    <!--== META TAGS ==-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!--== FAV ICON ==-->
    <link rel="shortcut icon" href="images/fav.ico">

    <!-- GOOGLE FONTS -->
    <link href="{{ asset('admin-assets/css?family=Open+Sans:300,400,600|Quicksand:300,400,500') }}" rel="stylesheet">

    <!-- FONT-AWESOME ICON CSS -->
    <link rel="stylesheet" href="{{ asset('admin-assets/css/font-awesome.min.css') }}">

    <!--== ALL CSS FILES ==-->
    <link rel="stylesheet" href="{{ asset('admin-assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('admin-assets/css/mob.css') }}">
    <link rel="stylesheet" href="{{ asset('admin-assets/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('admin-assets/css/materialize.css') }}">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
	<script src="{{ asset('admin-assets/js/html5shiv.js') }}"></script>
	<script src="{{ asset('admin-assets/js/respond.min.js') }}"></script>


    
	<![endif]-->

    {{-- <!-- Toastr --> --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

</head>

<body>
    <!--== MAIN CONTRAINER ==-->
    <div class="container-fluid sb1">
        <div class="row">
            <!--== LOGO ==-->
            <div class="col-md-2 col-sm-3 col-xs-6 sb1-1">
                <a href="#" class="btn-close-menu"><i class="fa fa-times" aria-hidden="true"></i></a>
                <a href="#" class="atab-menu"><i class="fa fa-bars tab-menu" aria-hidden="true"></i></a>
                {{-- <a href="index.html" class="logo"><img src="{{ asset('admin-assets/images/logo1.png')}}" alt=""> --}}
                <div class="" style="font-size: 25px;margin-left: 50px; color: #2242ac">
                    <b>College Manager</b>
                </div>
            </div>
            <!--== SEARCH ==-->
            <div class="col-md-6 col-sm-6 mob-hide">
                <form class="app-search">
                    <input type="text" placeholder="Search..." class="form-control">
                    <a href=""><i class="fa fa-search"></i></a>
                </form>
            </div>
            <!--== NOTIFICATION ==-->
            <div class="col-md-2 tab-hide">
                <div class="top-not-cen">
                    <a class='waves-effect btn-noti' href='#'><i class="fa fa-commenting-o" aria-hidden="true"></i><span>5</span></a>
                    <a class='waves-effect btn-noti' href='#'><i class="fa fa-envelope-o" aria-hidden="true"></i><span>5</span></a>
                    <a class='waves-effect btn-noti' href='#'><i class="fa fa-tag" aria-hidden="true"></i><span>5</span></a>
                </div>
            </div>
            <!--== MY ACCCOUNT ==-->
            <div class="col-md-2 col-sm-3 col-xs-6">
                <!-- Dropdown Trigger -->
                <a class='waves-effect dropdown-button top-user-pro' href='#' data-activates='top-menu'><img src="{{ asset('admin-assets/images/admin.png')}}" alt="">My Account 
                    {{-- <i class="fa fa-angle-down" aria-hidden="true"></i> --}}
                </a>

                <!-- Dropdown Structure -->
                {{-- <ul id='top-menu' class='dropdown-content top-menu-sty'>
                    <li><a href="setting.html" class="waves-effect"><i class="fa fa-cogs" aria-hidden="true"></i>Admin Setting</a>
                    </li>
                    <li><a href="listing-all.html" class="waves-effect"><i class="fa fa-list-ul" aria-hidden="true"></i> Listings</a>
                    </li>
                    <li><a href="hotel-all.html" class="waves-effect"><i class="fa fa-building-o" aria-hidden="true"></i> Hotels</a>
                    </li>
                    <li><a href="package-all.html" class="waves-effect"><i class="fa fa-umbrella" aria-hidden="true"></i> Tour Packages</a>
                    </li>
                    <li><a href="event-all.html" class="waves-effect"><i class="fa fa-flag-checkered" aria-hidden="true"></i> Events</a>
                    </li>
                    <li><a href="offers.html" class="waves-effect"><i class="fa fa-tags" aria-hidden="true"></i> Offers</a>
                    </li>
                    <li><a href="user-add.html" class="waves-effect"><i class="fa fa-user-plus" aria-hidden="true"></i> Add New User</a>
                    </li>
                    <li><a href="#" class="waves-effect"><i class="fa fa-undo" aria-hidden="true"></i> Backup Data</a>
                    </li>
                    <li class="divider"></li>
                    <li><a href="#" class="ho-dr-con-last waves-effect"><i class="fa fa-sign-in" aria-hidden="true"></i> Logout</a>
                    </li>
                </ul> --}}
            </div>
        </div>
    </div>

    <!--== BODY CONTNAINER ==-->
    <div class="container-fluid sb2">
        <div class="row">
            <div class="sb2-1">
                <!--== USER INFO ==-->
                <div class="sb2-12">
                    <ul>
                        <li><img src="{{ asset('admin-assets/images/admin.png')}}" alt="">
                        </li>
                        <li>
                            <h5>Admin User <span><b> Privileged User</b></span></h5>
                        </li>
                        <li></li>
                    </ul>
                </div>
                <!--== LEFT MENU ==-->
                <div class="sb2-13">
                    <ul class="collapsible" data-collapsible="accordion">
                        <li>
                            <a href="{{url('dashboard')}}" class="menu-active"><i class="fa fa-bar-chart" aria-hidden="true"></i> Dashboard</a>
                        </li>
                        <li>
                            <a href="{{ route('about-us.edit', ['about_u' => 1]) }}" class="collapsible-header"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> About Us</a>
                        </li>
                        <li>
                            <a href="{{ route('setting.edit', ['setting' => 1]) }}" class="collapsible-header"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Setting</a>
                        </li>
                        <li>
                            <a href="#" class="collapsible-header"><i class="fa fa-list" aria-hidden="true"></i> Blogs</a>
                            <div class="collapsible-body left-sub-menu">
                                <ul>
                                    <li><a href="{{ route('blogs.index') }}">All Blogs</a></li>
                                    <li><a href="{{ route('blogs.create') }}">Add New Blog</a></li>
                                </ul>
                            </div>
                        </li>

                          <li>
                            <a href="#" class="collapsible-header"><i class="fa fa-building" aria-hidden="true"></i> Colleges</a>
                            <div class="collapsible-body left-sub-menu">
                                <ul>
                                    <li><a href="{{ route('colleges.index') }}">All Colleges</a></li>
                                    <li><a href="{{ route('colleges.create') }}">Add New College</a></li>
                                </ul>
                            </div>
                        </li>


                        <li>
                            <a href="#" class="collapsible-header"><i class="fa fa-building" aria-hidden="true"></i> College Courses</a>
                            <div class="collapsible-body left-sub-menu">
                                <ul>
                                    <li><a href="{{ route('courses.index') }}">All Courses</a></li>
                                    <li><a href="{{ route('courses.create') }}">Add New Course</a></li>
                                </ul>
                            </div>
                        </li>

                        <li>
                            <a href="#" class="collapsible-header"><i class="fa fa-cog" aria-hidden="true"></i> Services</a>
                            <div class="collapsible-body left-sub-menu">
                                <ul>
                                    <li><a href="{{ route('services.index') }}">All Services</a></li>
                                    <li><a href="{{ route('services.create') }}">Add New Service</a></li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <a href="#" class="collapsible-header"><i class="fa fa-cog" aria-hidden="true"></i> Testimonials</a>
                            <div class="collapsible-body left-sub-menu">
                                <ul>
                                    <li><a href="{{ route('testimonials.index') }}">All Testimonial</a></li>
                                    <li><a href="{{ route('testimonials.create') }}">Add New Testimonial</a></li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <a href="#" class="collapsible-header"><i class="fa fa-question-circle" aria-hidden="true"></i> FAQs</a>
                            <div class="collapsible-body left-sub-menu">
                                <ul>
                                    <li><a href="{{ route('faqs.index') }}">All FAQs</a></li>
                                    <li><a href="{{ route('faqs.create') }}">Add New FAQ</a></li>
                                </ul>
                            </div>
                        </li>

                        <li>
                            <a href="#" class="collapsible-header"><i class="fa fa-comments" aria-hidden="true"></i> Enquiries</a>
                            <div class="collapsible-body left-sub-menu">
                                <ul>
                                    <li><a href="{{ route('faqs.index') }}">Contact Form Enquiry</a></li>
                                    <li><a href="{{ route('faqs.create') }}">Home Page Enquiry</a></li>
                                </ul>
                            </div>
                        </li>
                    
                        <li><a href="{{ route('infocounter.edit',1) }}"><i class="fa fa-plus-square-o" aria-hidden="true"></i> Infographics Setting</a>
                        </li>
                        <li><a href="#" target="_blank"><i class="fa fa-sign-in" aria-hidden="true"></i> Logout</a>
                        </li>
                    </ul>
                </div>
            </div>

            @yield('content')

        </div>
    </div>

    <style>
         body {
            background-color: #e8edf2; /* Set desired color here */
            margin: 0; /* Reset default margin */
            padding: 0; /* Reset default padding */
        }
        .bor {
            margin-top: 0 !important; /* Set margin-top to 0 */
        }
    </style>

    
<!--======== SCRIPT FILES =========-->
<script src="{{ asset('admin-assets/js/jquery.min.js') }}"></script>
<script src="{{ asset('admin-assets/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('admin-assets/js/materialize.min.js') }}"></script>
<script src="{{ asset('admin-assets/js/custom.js') }}"></script>

</body>
</html>