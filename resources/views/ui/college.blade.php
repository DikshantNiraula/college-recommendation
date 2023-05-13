@extends('ui.layouts.master')
@section('content')


 <div class="inner-banner" style="margin-top: 100px;">
    <div class="container">
       <div class="row">
          <div class="col-lg-8">
             <div class="instructor-wrap border-bottom-0 m-0">
                <div class="about-instructor align-items-center">
                   {{-- <div class="abt-instructor-img">
                      <a href="instructor-profile.html.htm"><img src="assets/img/user/user1.jpg" alt="img" class="img-fluid"></a>
                   </div> --}}
                   {{-- <div class="instructor-detail me-3">
                      <h5><a href="instructor-profile.html.htm">Nicole Brown</a></h5>
                      <p>UX/UI Designer</p>
                   </div> --}}
                   {{-- <div class="rating mb-0">
                      <i class="fas fa-star filled"></i>
                      <i class="fas fa-star filled"></i>
                      <i class="fas fa-star filled"></i>
                      <i class="fas fa-star filled"></i>
                      <i class="fas fa-star"></i>
                      <span class="d-inline-block average-rating"><span>4.5</span> (15)</span>
                   </div> --}}
                </div>
                <span class="web-badge mb-3">WEB DEVELPMENT</span>
             </div>
             <h2>{{$college->college_name}}</h2>
             <p>Learn more about college!</p>
             <div class="course-info d-flex align-items-center border-bottom-0 m-0 p-0">
                <div class="cou-info">
                   <img src="{{asset('uiassets/img/icon/icon-01.svg')}}" alt="">
                   <p>Lat: {{$college->latitude}}, Long: {{$college->longitude}}</p>
                </div>
                <div class="cou-info">
                   <img src="{{asset('uiassets/img/icon/timer-icon.svg')}}" alt="">
                   <p>4 Years</p>
                </div>
                <div class="cou-info">
                   <img src="{{asset('uiassets/assets/img/icon/people.svg')}}" alt="">
                   <p>-- Seats</p>
                </div>
             </div>
          </div>
       </div>
    </div>
 </div>
 <section class="page-content course-sec">
    <div class="container">
       <div class="row">
          <div class="col-lg-8">
             <div class="card overview-sec">
                <div class="card-body">
                   <h5 class="subs-title">Overview</h5>
                   <h6>College Description</h6>
                    {!! $college->description !!}
                   
                </div>
             </div>
             {{-- <div class="card content-sec">
                <div class="card-body">
                   <div class="row">
                      <div class="col-sm-6">
                         <h5 class="subs-title">Course Content</h5>
                      </div>
                      <div class="col-sm-6 text-sm-end">
                         <h6>92 Lectures 10:56:11</h6>
                      </div>
                   </div>
                   <div class="course-card">
                      <h6 class="cou-title">
                         <a class="collapsed" data-bs-toggle="collapse" href="#collapseOne" aria-expanded="false">In which areas do you operate?</a>
                      </h6>
                      <div id="collapseOne" class="card-collapse collapse" style="">
                         <ul>
                            <li>
                               <p><img src="assets/img/icon/play.svg" alt="" class="me-2">Lecture1.1 Introduction to the User Experience Course</p>
                               <div>
                                  <a href="javascript:;">Preview</a>
                                  <span>02:53</span>
                               </div>
                            </li>
                            <li>
                               <p><img src="assets/img/icon/play.svg" alt="" class="me-2">Lecture1.2 Exercise: Your first design challenge</p>
                               <div>
                                  <a href="javascript:;">Preview</a>
                                  <span>02:53</span>
                               </div>
                            </li>
                            <li>
                               <p><img src="assets/img/icon/play.svg" alt="" class="me-2">Lecture1.3 How to solve the previous exercise</p>
                               <div>
                                  <a href="javascript:;">Preview</a>
                                  <span>02:53</span>
                               </div>
                            </li>
                            <li>
                               <p><img src="assets/img/icon/play.svg" alt="" class="me-2">Lecture1.3 How to solve the previous exercise</p>
                               <div>
                                  <a href="javascript:;">Preview</a>
                                  <span>02:53</span>
                               </div>
                            </li>
                            <li>
                               <p><img src="assets/img/icon/play.svg" alt="" class="me-2">Lecture1.5 How to use text layers effectively</p>
                               <div>
                                  <a href="javascript:;">Preview</a>
                                  <span>02:53</span>
                               </div>
                            </li>
                         </ul>
                      </div>
                   </div>
                   <div class="course-card">
                      <h6 class="cou-title">
                         <a class="collapsed" data-bs-toggle="collapse" href="#course2" aria-expanded="false">The Brief</a>
                      </h6>
                      <div id="course2" class="card-collapse collapse" style="">
                         <ul>
                            <li>
                               <p><img src="assets/img/icon/play.svg" alt="" class="me-2">Lecture1.1 Introduction to the User Experience Course</p>
                               <div>
                                  <a href="javascript:;">Preview</a>
                                  <span>02:53</span>
                               </div>
                            </li>
                            <li>
                               <p><img src="assets/img/icon/play.svg" alt="" class="me-2">Lecture1.2 Exercise: Your first design challenge</p>
                               <div>
                                  <a href="javascript:;">Preview</a>
                                  <span>02:53</span>
                               </div>
                            </li>
                            <li>
                               <p><img src="assets/img/icon/play.svg" alt="" class="me-2">Lecture1.3 How to solve the previous exercise</p>
                               <div>
                                  <a href="javascript:;">Preview</a>
                                  <span>02:53</span>
                               </div>
                            </li>
                            <li>
                               <p><img src="assets/img/icon/play.svg" alt="" class="me-2">Lecture1.3 How to solve the previous exercise</p>
                               <div>
                                  <a href="javascript:;">Preview</a>
                                  <span>02:53</span>
                               </div>
                            </li>
                            <li>
                               <p><img src="assets/img/icon/play.svg" alt="" class="me-2">Lecture1.5 How to use text layers effectively</p>
                               <div>
                                  <a href="javascript:;">Preview</a>
                                  <span>02:53</span>
                               </div>
                            </li>
                         </ul>
                      </div>
                   </div>
                   <div class="course-card">
                      <h6 class="cou-title">
                         <a class="collapsed" data-bs-toggle="collapse" href="#course3" aria-expanded="false">Wireframing Low Fidelity</a>
                      </h6>
                      <div id="course3" class="card-collapse collapse" style="">
                         <ul>
                            <li>
                               <p><img src="assets/img/icon/play.svg" alt="" class="me-2">Lecture1.1 Introduction to the User Experience Course</p>
                               <div>
                                  <a href="javascript:;">Preview</a>
                                  <span>02:53</span>
                               </div>
                            </li>
                            <li>
                               <p><img src="assets/img/icon/play.svg" alt="" class="me-2">Lecture1.2 Exercise: Your first design challenge</p>
                               <div>
                                  <a href="javascript:;">Preview</a>
                                  <span>02:53</span>
                               </div>
                            </li>
                            <li>
                               <p><img src="assets/img/icon/play.svg" alt="" class="me-2">Lecture1.3 How to solve the previous exercise</p>
                               <div>
                                  <a href="javascript:;">Preview</a>
                                  <span>02:53</span>
                               </div>
                            </li>
                            <li>
                               <p><img src="assets/img/icon/play.svg" alt="" class="me-2">Lecture1.3 How to solve the previous exercise</p>
                               <div>
                                  <a href="javascript:;">Preview</a>
                                  <span>02:53</span>
                               </div>
                            </li>
                            <li>
                               <p><img src="assets/img/icon/play.svg" alt="" class="me-2">Lecture1.5 How to use text layers effectively</p>
                               <div>
                                  <a href="javascript:;">Preview</a>
                                  <span>02:53</span>
                               </div>
                            </li>
                         </ul>
                      </div>
                   </div>
                   <div class="course-card">
                      <h6 class="cou-title mb-0">
                         <a class="collapsed" data-bs-toggle="collapse" href="#coursefour" aria-expanded="false">Type, Color & Icon Introduction</a>
                      </h6>
                      <div id="coursefour" class="card-collapse collapse" style="">
                         <ul>
                            <li>
                               <p><img src="assets/img/icon/play.svg" alt="" class="me-2">Lecture4.1 Introduction to the User Experience Course</p>
                               <div>
                                  <a href="javascript:;">Preview</a>
                                  <span>02:53</span>
                               </div>
                            </li>
                            <li>
                               <p><img src="assets/img/icon/play.svg" alt="" class="me-2">Lecture4.2 Exercise: Your first design challenge</p>
                               <div>
                                  <a href="javascript:;">Preview</a>
                                  <span>02:53</span>
                               </div>
                            </li>
                            <li>
                               <p><img src="assets/img/icon/play.svg" alt="" class="me-2">Lecture4.3 How to solve the previous exercise</p>
                               <div>
                                  <a href="javascript:;">Preview</a>
                                  <span>02:53</span>
                               </div>
                            </li>
                            <li>
                               <p><img src="assets/img/icon/play.svg" alt="" class="me-2">Lecture4.4 How to solve the previous exercise</p>
                               <div>
                                  <a href="javascript:;">Preview</a>
                                  <span>02:53</span>
                               </div>
                            </li>
                            <li>
                               <p><img src="assets/img/icon/play.svg" alt="" class="me-2">Lecture4.5 How to use text layers effectively</p>
                               <div>
                                  <a href="javascript:;">Preview</a>
                                  <span>02:53</span>
                               </div>
                            </li>
                         </ul>
                      </div>
                   </div>
                </div>
             </div> 
             <div class="card instructor-sec">
                <div class="card-body">
                   <h5 class="subs-title">About the instructor</h5>
                   <div class="instructor-wrap">
                      <div class="about-instructor">
                         <div class="abt-instructor-img">
                            <a href="instructor-profile.html.htm"><img src="assets/img/user/user1.jpg" alt="img" class="img-fluid"></a>
                         </div>
                         <div class="instructor-detail">
                            <h5><a href="instructor-profile.html.htm">Nicole Brown</a></h5>
                            <p>UX/UI Designer</p>
                         </div>
                      </div>
                      <div class="rating">
                         <i class="fas fa-star filled"></i>
                         <i class="fas fa-star filled"></i>
                         <i class="fas fa-star filled"></i>
                         <i class="fas fa-star filled"></i>
                         <i class="fas fa-star"></i>
                         <span class="d-inline-block average-rating">4.5 Instructor Rating</span>
                      </div>
                   </div>
                   <div class="course-info d-flex align-items-center">
                      <div class="cou-info">
                         <img src="assets/img/icon/play.svg" alt="">
                         <p>5 Courses</p>
                      </div>
                      <div class="cou-info">
                         <img src="assets/img/icon/icon-01.svg" alt="">
                         <p>12+ Lesson</p>
                      </div>
                      <div class="cou-info">
                         <img src="assets/img/icon/icon-02.svg" alt="">
                         <p>9hr 30min</p>
                      </div>
                      <div class="cou-info">
                         <img src="assets/img/icon/people.svg" alt="">
                         <p>270,866 students enrolled</p>
                      </div>
                   </div>
                   <p>UI/UX Designer, with 7+ Years Experience. Guarantee of High Quality Work.</p>
                   <p>Skills: Web Design, UI Design, UX/UI Design, Mobile Design, User Interface Design, Sketch, Photoshop, GUI, Html, Css, Grid Systems, Typography, Minimal, Template, English, Bootstrap, Responsive Web Design, Pixel Perfect, Graphic Design, Corporate, Creative, Flat, Luxury and much more.</p>
                   <p>Available for:</p>
                   <ul>
                      <li>1. Full Time Office Work</li>
                      <li>2. Remote Work</li>
                      <li>3. Freelance</li>
                      <li>4. Contract</li>
                      <li>5. Worldwide</li>
                   </ul>
                </div>
             </div> --}}
         
          
          </div>
          <div class="col-lg-4">
             <div class="sidebar-sec">

                <div class="card include-sec">
                   <div class="card-body">
                      <div class="cat-title">
                         <h4>Includes</h4>
                      </div>
                      <ul>
                         <li><img src="{{asset('uiassets/img/icon/import.svg')}}" class="me-2" alt=""> {{$college->courses->count()}} Courses</li>
                         <li><img src="{{asset('uiassets/img/icon/play.svg')}}" class="me-2" alt=""> Latitude: {{$college->latitude}}</li>
                         <li><img src="{{asset('uiassets/img/icon/key.svg')}}" class="me-2" alt=""> Longitude: {{$college->longitude}}</li>
                      </ul>
                   </div>
                </div>
       
             </div>
          </div>
       </div>
    </div>
 </section>

@endsection