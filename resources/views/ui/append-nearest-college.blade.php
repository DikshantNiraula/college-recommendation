@foreach ($colleges as $college)
               <div class="col-lg-12 d-flex">
                  <div class="instructor-list flex-fill">
                     <div class="instructor-img">
                        <a href="instructor-profile.html.htm">
                        <img class="img-fluid" alt="" src="{{asset('uploads/'.$college->image)}}">
                        </a>
                     </div>
                     <div class="instructor-content">
                        <h5><a href="instructor-profile.html.htm">{{$college->college_name}}</a></h5>
                        <h6>Co-ordinates: {{$college->longitude}}, {{$college->latitude}}</h6>
                        <div class="instructor-info">
                           <div class="rating-img d-flex align-items-center">
                              <img src="{{asset('uiassets/img/icon/icon-01.svg')}}" class="me-1" alt="">
                              <p>{{$college->courses->count()}} Courses</p>
                           </div>
                           <div class="course-view d-flex align-items-center ms-0">
                              <img src="{{asset('uiassets/img/icon/icon-02.svg')}}" class="me-1" alt="">
                              <p>4 years</p>
                           </div>
                           <div class="rating-img d-flex align-items-center">
                              <img src="{{asset('uiassets/img/icon/user-icon.svg')}}" class="me-1" alt="">
                              <p>{{ $college->courses->sum('seats_available') }} Seats</p>
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
                        <div class="instructor-badge">
                            @if($college->courses->first() != null)
                                <span class="web-badge">{{ optional($college->courses->first())->title }}</span>
                            @else
                             <span class="web-badge"><i class="fas fa-cancel"></i>&nbsp;No Course Available</span>
                            @endif
                            @if($college->courses->skip(1)->first() != null)
                                <span class="web-badge">{{ optional($college->courses->skip(1)->first())->title }}</span>
                            @endif

                        </div>
                     </div>
                  </div>
               </div>
            @endforeach