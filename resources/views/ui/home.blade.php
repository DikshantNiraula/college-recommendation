@extends('ui.layouts.master')
@section('content')


<section class="home-two-slide d-flex align-items-center">
    <div class="container">
    <div class="row ">
    <div class="col-lg-8 col-12" data-aos="fade-up">
    <div class="home-slide-face">
    <div class="home-slide-text ">
    <h5>The Leader in Online College Recommedation</h5>
    <h1>Engaging & Accessible College/Courses For All</h1>
    </div>
    <div class="banner-content">
    <form class="form" name="store" id="store" method="post" action="course-list.html">
    <div class="form-inner">
    <div class="input-group">
    <span class="drop-detail">
    <select class="form-control select" name="storeID">
    <option value="0">Select Category</option>
    <option value="1">Category One</option>
    <option value="1">Category Two</option>
    </select>
    </span>
    <input type="email" class="form-control" placeholder="Search School, Online eductional centers, etc">
    <button class="btn btn-primary sub-btn" type="submit">Search</button>
    </div>
    </div>
    </form>
    </div>
    <div class="trust-user-two">
    <p>Trusted by over 15K Users worldwide since 2022</p>
    <div class="rating-two">
    <span>4.4</span>
    <i class="fas fa-star filled"></i>
    <i class="fas fa-star filled"></i>
    <i class="fas fa-star filled"></i>
    <i class="fas fa-star filled"></i>
    <i class="fas fa-star filled"></i>
    </div>
    </div>
    </div>
    </div>
    </div>
    
    <div class="shapes">
    <img class="shapes-one" src="{{asset('uiassets/img/bg/home-right.png')}}" alt="">
    <img class="shapes-two" src="{{asset('uiassets/img/bg/home-right-bottom.png')}}" alt="">
    <img class="shapes-middle" src="{{asset('uiassets/img/bg/home-middle.png')}}" alt="">
    <img class="shapes-four wow animate__animated animate__slideInLeft" src="{{asset('uiassets/img/bg/home-left.png')}}" alt="">
    </div>
    
    </div>
    </section>
    
    
    <section class="about-section">
    <div class="container">
    <div class="row">
    <div class="col-lg-6 wow fadeInLeft order-lg-1 order-xs-2 order-sm-2" data-aos="fade-up">
    <div class="header-two-title">
    <p class="tagline">Learn with DreamLMS</p>
    <h2 class="mb-0">Get Trained By Experts & Professionals around the World</h2>
    </div>
    <div class="header-two-title">
    <p class="about-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quam dolor fermentum massa viverra congue proin. A volutpat eget ultrices velit nunc orci. Commodo quis integer a felis ac vel mauris a morbi. Scelerisque nunc accumsan elementum aenean nisl lacinia. Congue enim aliquet ac vitae turpis. Neque, bibendum imperdiet sed ullamcorper morbi amet. Facilisi odio amet, nunc quam ut nulla purus adipiscing pharetra.</p>
    <div class="about-button more-details">
    <a href="course-list.html.htm" class="discover-btn">Learn more <i class="fas fa-arrow-right ms-2"></i></a>
    </div>
    </div>
    </div>
    <div class="col-lg-6 order-lg-2 order-xs-1 order-sm-1">
    <div class="stylist-gallery">
    <div class="row">
    <div class="col-lg-6 col-md-6 col-sm-12 col-12" data-aos="fade-down">
    <div class="about-image count-one d-flex align-items-center justify-content-center flex-fill project-details">
    <div class="about-count">
    <div class="course-img">
    <img src="{{asset('uiassets/img/icon/count-one.svg')}}" alt="">
    </div>
    <div class="count-content-three course-count ms-0">
    <h4><span class="counterUp">10</span>K</h4>
    <p class="mb-0">Online Courses</p>
    </div>
    </div>
    </div>
    </div>
    <div class="col-lg-6 col-md-6 col-sm-12 col-12" data-aos="fade-down">
    <div class="about-image count-two d-flex align-items-center justify-content-center flex-fill project-details">
    <div class="about-count">
    <div class="course-img">
    <img src="{{asset('uiassets/img/icon/count-two.svg')}}" alt="">
    </div>
    <div class="count-content-three course-count ms-0">
    <h4><span class="counterUp">215</span>+</h4>
    <p class="mb-0">Expert Tutors</p>
    </div>
    </div>
    </div>
    </div>
    <div class="col-lg-6 col-md-6 col-sm-12 col-12" data-aos="fade-right" data-wow-delay="1.5">
    <div class="about-image count-three d-flex align-items-center justify-content-center flex-fill project-details">
    <div class="about-count">
    <div class="course-img">
    <img src="{{asset('uiassets/img/icon/count-three.svg')}}" alt="">
    </div>
    <div class="count-content-three course-count ms-0">
    <h4><span class="counterUp">10</span>K</h4>
    <p class="mb-0">Ceritified Courses</p>
    </div>
    </div>
    </div>
    </div>
    <div class="col-lg-6 col-md-6 col-sm-12 col-12" data-aos="fade-left" data-wow-delay="0.5">
    <div class="about-image count-four d-flex align-items-center justify-content-center flex-fill project-details">
    <div class="about-count">
    <div class="course-img">
    <img src="{{asset('uiassets/img/icon/count-four.svg')}}" alt="">
    </div>
    <div class="count-content-three course-count ms-0">
    <h4><span class="counterUp">10</span>K</h4>
    <p class="mb-0">Online Students</p>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </section>
    

    <section class="home-three-courses">
        <div class="container">
           <div class="favourite-course-sec">
              <div class="row">
                 <div class="home-three-head section-header-title" data-aos="fade-up">
                    <div class="row align-items-center d-flex justify-content-between">
                       <div class="col-lg-6 col-sm-8">
                          <h2>Trending Colleges</h2>
                       </div>
                       <div class="col-lg-6 col-sm-4">
                          <div class="see-all">
                             <a href="#">See all<span class="see-all-icon"><i class="fas fa-arrow-right"></i></span></a>
                          </div>
                       </div>
                    </div>
                 </div>
                 <div class="all-corses-main">
                    <div class="tab-content">
                       <div class="tab-content">
                          <div class="tab-pane fade active show" id="alltab" role="tabpanel">
                             <div class="all-course">
                                <div class="row">

                                    @foreach ($colleges as $college)
                                        
                                   <div class="col-xl-3 col-lg-6 col-md-6 col-12" data-aos="fade-up">
                                      <div class="course-box-three">
                                         <div class="course-three-item">
                                            <div class="course-three-img">
                                               <a href="course-details.html.htm">
                                               <img class="img-fluid" alt="" src="{{asset('uploads/'.$college->image)}}"  style="height: 150px; object-fit: contain">
                                               </a>
                                               <div class="heart-three">
                                                  <a href="#"><i class="fa-regular fa-heart"></i></a>
                                               </div>
                                            </div>
                                            <div class="course-three-content">
                                               <div class="course-group-three">
                                                  <div class="group-three-img">
                                                     {{-- <a href="instructor-profile.html.htm"><img src="{{asset('uiassets/img/user/user1.jpg')}}" alt="" class="img-fluid"></a> --}}
                                                  </div>
                                               </div>
                                               <div class="course-three-text">
                                                  <a href="course-details.html.htm">
                                                     <p>Best College</p>
                                                     <h3 class="title instructor-text">{{$college->college_name}}</h3>
                                                  </a>
                                               </div>
                                               <div class="student-counts-info d-flex align-items-center">
                                                  <div class="students-three-counts d-flex align-items-center">
                                                     <img src="{{asset('uiassets/img/icon/check-circle.svg')}}" alt="">
                                                     <p>{{$college->courses->count()}} Courses</p>
                                                  </div>
                                               </div>
                                               <div class="price-three-group d-flex align-items-center justify-content-between justify-content-between">
                                                  <div class="price-three-view d-flex align-items-center">
                                                     <div class="course-price-three">
                                                        <h3>Starts Rs. 5.5L</h3>
                                                     </div>
                                                  </div>
                                                  <div class="price-three-time d-inline-flex align-items-center">
                                                     <i class="fa-regular fa-clock me-2"></i>
                                                     <span>4 years</span>
                                                  </div>
                                               </div>
                                            </div>
                                         </div>
                                      </div>
                                   </div>

                                   @endforeach
                        
                                </div>
                             </div>
                          </div>
                       </div>
                    </div>
                 </div>
              </div>
           </div>
        </div>
     </section>
     

     <section class="featured-courses-sec">
        <div class="patter-one-main">
           <img class="patter-one" src="{{asset('uiassets/img/bg/patter-one.png')}}" alt="">
        </div>
        <div class="container">
           <div class="header-two-title text-center" data-aos="fade-up">
              <p class="tagline">What’s New</p>
              <h2>Featured Courses</h2>
              <div class="header-two-text m-auto text-center d-block">
                 <p class="mb-0">"Unlock your potential with our curated collection of industry-leading courses, designed to empower you with the skills and knowledge needed for success."
                 </p>
              </div>
           </div>
           <div class="featured-courses-two">
              <div class="row">

                @foreach ($courses as $course)
                 <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 d-flex" data-aos="fade-down">
                    <div class="featured-details-two">
                       <div class="product-item-two">
                          <div class="product-img-two">
                             <a href="course-details.html.htm">
                             <img class="img-fluid" alt="" src="{{asset('uploads/'.$course->image)}}" style="height: 350px; object-fit: contain">
                             </a>
                             <div class="price-text">
                                <h4><span>{{$course->seats_available}} Seats</span></h4>
                             </div>
                          </div>
                          <div class="course-details-content">
                             <div class="image-info">
                                {{-- <img class="img-fluid" alt="" src="{{asset('uiassets/img/profiles/avatar-01.jpg')}}"> --}}
                             </div>
                             <div class="rating">
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                                <span class="ms-3">203 reviews</span>
                             </div>
                             <div class="name-text featured-info-two">
                                <h3 class="title instructor-text"><a href="course-details.html.htm">{{ $course->title }}</a></h3>
                                <p class="me-3">By<span class="text-danger ms-2">{{ $course->college->college_name }}</span></p>
                             </div>
                             <div class="featured-info-time d-flex align-items-center">
                                <div class="hours-time-two d-flex align-items-center">
                                   <span><i class="fa-regular fa-clock me-2"></i></span>
                                   <p>{{$course->course_time_year}} Years</p>
                                </div>
                                <div class="course-view d-inline-flex align-items-center">
                                   <div class="course-price">
                                      <h3>Rs. {{$course->price}} </h3>
                                   </div>
                                </div>
                             </div>
                          </div>
                       </div>
                    </div>
                 </div>
                 @endforeach
              </div>
           </div>
           <div class="col-lg-12" data-aos="fade-up">
              <div class="more-details text-center">
                 <a href="course-details.html.htm" class="discover-btn">View all Courses <i class="fas fa-arrow-right ms-2"></i></a>
              </div>
           </div>
        </div>
     </section>
     
    
    
    <div class="knowledge-sec">
    <div class="container-fluid">
    <div class="row align-items-center">
    <div class="col-lg-6 col-sm-12 ps-0">
    <div class="featured-img-1"></div>
    </div>
    <div class="col-lg-6 col-sm-12" data-aos="fade-up">
    <div class="joing-group">
    <div class="section-title">
    <h2>Want to share your knowledge? Join us a Mentor</h2>
    <div class="joing-section-text">
    <p class="mb-0">High-definition video is video of higher resolution and quality than standard-definition. While there is no standardized meaning for high-definition, generally any video.</p>
    </div>
    </div>
    <div class="joing-list">
    <ul>
    <li data-aos="fade-bottom">
    <div class="joing-header">
    <span class="joing-icon bg-blue">
    <img src="{{asset('uiassets/img/icon/joing-01.svg')}}" alt="" class="img-fluid">
    </span>
    <div class="joing-content">
    <h5 class="joing-title">Stay motivated with engaging instructors</h5>
    <div class="joing-para">
    <p>High-definition video is video of higher resolution and quality than standard-definition.</p>
    <p>While there is no standardized meaning for high-definition, generally any video.</p>
    </div>
    </div>
    </div>
    </li>
    <li data-aos="fade-bottom">
    <div class="joing-header">
    <span class="joing-icon bg-yellow">
    <img src="{{asset('uiassets/img/icon/joing-02.svg')}}" alt="" class="img-fluid">
    </span>
    <div class="joing-content">
    <h5 class="joing-title">Keep up with in the latest in cloud</h5>
    <div class="joing-para">
    <p>High-definition video is video of higher resolution and quality than standard-definition.</p>
    <p>While there is no standardized meaning for high-definition, generally any video.</p>
    </div>
    </div>
    </div>
    </li>
    <li data-aos="fade-bottom">
    <div class="joing-header">
    <span class="joing-icon bg-green">
    <img src="{{asset('uiassets/img/icon/joing-03.svg')}}" alt="" class="img-fluid">
    </span>
    <div class="joing-content aos">
    <h5 class="joing-title">Build skills your way, from labs to courses</h5>
    <div class="joing-para">
    <p>High-definition video is video of higher resolution and quality than standard-definition.</p>
    <p>While there is no standardized meaning for high-definition, generally any video.</p>
    </div>
    </div>
    </div>
    </li>
    <li data-aos="fade-bottom" class="mb-0">
    <div class="joing-header">
    <span class="joing-icon bg-orange">
    <img src="{{asset('uiassets/img/icon/joing-04.svg')}}" alt="" class="img-fluid">
    </span>
    <div class="joing-content aos">
    <h5 class="joing-title">Get certified with 100+ certification courses</h5>
    <div class="joing-para">
    <p>High-definition video is video of higher resolution and quality than standard-definition.</p>
    <p>While there is no standardized meaning for high-definition, generally any video.</p>
    </div>
    </div>
    </div>
    </li>
    </ul>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    
@endsection