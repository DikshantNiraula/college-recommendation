@extends('ui.layouts.master')
@section('content')

<div class="page-content" style="margin-top: 100px;">
   <div class="container">
      <div class="row">
         <div class="col-lg-9">
            <div class="showing-list">
               <div class="row">
                  <div class="col-lg-6">
                     <div class="d-flex align-items-center">
                        <div class="view-icons">
                           <a href="instructor-grid.html.htm" class="grid-view "><i class="feather-grid"></i></a>
                           <a href="instructor-list.html.htm" class="list-view active"><i class="feather-list"></i></a>
                        </div>
                        <div class="show-result">
                           <h4>Showing 1-{{$courses->count()}} of {{$courses->count()}} results</h4>
                        </div>
                     </div>
                  </div>
                
               </div>
            </div>
            <div class="row">

                @foreach ($courses as $course)
                <div class="col-lg-12 d-flex">
                   <div class="instructor-list flex-fill">
                      <div class="instructor-img">
                         <a href="instructor-profile.html.htm">
                         <img class="img-fluid" alt="" src="{{asset('uploads/'.$course->image)}}">
                         </a>
                      </div>
                      <div class="instructor-content">
                         <h5><a href="instructor-profile.html.htm">{{$course->title}}</a></h5>
                         {{-- <h6>Co-ordinates: {{$course->longitude}}, {{$course->latitude}} [Distance: {{$course->distance}} KM]</h6> --}}
                         <div class="instructor-info">
                            <div class="rating-img d-flex align-items-center">
                               <img src="{{asset('uiassets/img/icon/icon-01.svg')}}" class="me-1" alt="">
                               <p>{{$course->college->college_name}}</p>
                            </div>
                            <div class="course-view d-flex align-items-center ms-0">
                               <img src="{{asset('uiassets/img/icon/icon-02.svg')}}" class="me-1" alt="">
                               <p>{{$course->course_time_year}} years</p>
                            </div>
                            <div class="rating-img d-flex align-items-center">
                               <img src="{{asset('uiassets/img/icon/user-icon.svg')}}" class="me-1" alt="">
                               <p>{{ $course->seats_available }} Seats</p>
                             </div>
                            {{-- <div class="rating">
                               <i class="fas fa-star filled"></i>
                               <i class="fas fa-star filled"></i>
                               <i class="fas fa-star filled"></i>
                               <i class="fas fa-star filled"></i>
                               <i class="fas fa-star"></i>
                               <span class="d-inline-block average-rating"><span>4.0</span> (15)</span>
                            </div> --}}
                            <a href="#rate" class="rating-count"><i class="fa-regular fa-heart"></i></a>
                         </div>
                         {{-- <div class="instructor-badge">
                             @if($course->courses->first() != null)
                                 <span class="web-badge">{{ $course->title }}</span>
                             @else
                              <span class="web-badge"><i class="fas fa-cancel"></i>&nbsp;No Course Available</span>
                             @endif
                             @if($course->courses->skip(1)->first() != null)
                                 <span class="web-badge">{{ optional($course->courses->skip(1)->first())->title }}</span>
                             @endif
 
                         </div> --}}
                      </div>
                   </div>
                </div>
             @endforeach
     
            </div>
   
         </div>
         <div class="col-lg-3">
            <div class="filter-clear">
               <div class="clear-filter d-flex align-items-center">
                  <h4><i class="feather-filter"></i>Filters</h4>
                  <div class="clear-text">
                     <p>CLEAR</p>
                  </div>
               </div>
               <div class="card search-filter">
                  <div class="card-body">
                     <div class="filter-widget mb-0">
                        <div class="categories-head d-flex align-items-center">
                           <h4>Course categories</h4>
                           <i class="fas fa-angle-down"></i>
                        </div>

                    @foreach ($colleges as $college)
                        <div>
                           <label class="custom_check">
                           <input type="checkbox" name="select_specialist">
                           <span class="checkmark"></span> {{$college->college_name}}
                           </label>
                        </div>
                    @endforeach
                       
                     </div>
                  </div>
               </div>
               <div class="card search-filter">
                  <div class="card-body">
                     <div class="filter-widget mb-0">
                        <div class="categories-head d-flex align-items-center">
                           <h4>Years</h4>
                           <i class="fas fa-angle-down"></i>
                        </div>
                        <div>
                           <label class="custom_check">
                           <input type="checkbox" name="select_specialist">
                           <span class="checkmark"></span> 2 Years
                           </label>
                        </div>
                        <div>
                           <label class="custom_check">
                           <input type="checkbox" name="select_specialist">
                           <span class="checkmark"></span> 3 Years
                           </label>
                        </div>
                        <div>
                           <label class="custom_check">
                           <input type="checkbox" name="select_specialist">
                           <span class="checkmark"></span> 4 Years
                           </label>
                        </div>
                        <div>
                           <label class="custom_check mb-0">
                           <input type="checkbox" name="select_specialist" checked="">
                           <span class="checkmark"></span> Others
                           </label>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="card search-filter ">
                  <div class="card-body">
                     <div class="filter-widget mb-0">
                        <div class="categories-head d-flex align-items-center">
                           <h4>Price</h4>
                           <i class="fas fa-angle-down"></i>
                        </div>
                        <div>
                           <label class="custom_check custom_one">
                           <input type="radio" name="select_specialist">
                           <span class="checkmark"></span> All
                           </label>
                        </div>
                        <div>
                           <label class="custom_check custom_one">
                           <input type="radio" name="select_specialist">
                           <span class="checkmark"></span> Less than 2 Lakhs
                           </label>
                        </div>
                        <div>
                            <label class="custom_check custom_one">
                            <input type="radio" name="select_specialist">
                            <span class="checkmark"></span> Less than 5 Lakhs
                            </label>
                         </div>
                      
                        <div>
                            <label class="custom_check custom_one mb-0">
                            <input type="radio" name="select_specialist" checked="">
                            <span class="checkmark"></span> Above 5 Lakhs
                            </label>
                         </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>

@endsection