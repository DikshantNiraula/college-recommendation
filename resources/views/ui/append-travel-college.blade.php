{{-- <h2>Best Path [ {{$bestDistance}} KM]</h2>
@foreach ($bestColleges as $college)
               <div class="col-lg-12 d-flex">
                  <div class="instructor-list flex-fill">
                     <div class="instructor-img">
                        <a href="instructor-profile.html.htm">
                        <img class="img-fluid" alt="" src="{{asset('uploads/'.$college->image)}}">
                        </a>
                     </div>
                     <div class="instructor-content">
                        <h5><a href="instructor-profile.html.htm">{{$college->college_name}}</a></h5>
                        <h6>Co-ordinates: {{$college->longitude}}, {{$college->latitude}} [Distance: {{$college->distance}} KM]</h6>
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


<h2>Worst Path [ {{$worstDistance}} KM]</h2>
@foreach ($worstColleges as $college)
               <div class="col-lg-12 d-flex">
                  <div class="instructor-list flex-fill">
                     <div class="instructor-img">
                        <a href="instructor-profile.html.htm">
                        <img class="img-fluid" alt="" src="{{asset('uploads/'.$college->image)}}">
                        </a>
                     </div>
                     <div class="instructor-content">
                        <h5><a href="instructor-profile.html.htm">{{$college->college_name}}</a></h5>
                        <h6>Co-ordinates: {{$college->longitude}}, {{$college->latitude}} [Distance: {{$college->distance}} KM]</h6>
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
            @endforeach --}}


            <!-- resources/views/path/show.blade.php -->

<h2>Best Path:</h2>
<ul>
    @foreach ($bestPath['path'] as $pathItem)
        <li>
            College: {{ $colleges->firstWhere('id', $pathItem['college'])->name }}
            Distance: {{ $pathItem['distance'] }} km
        </li>
    @endforeach
</ul>
<p>Overall Distance: {{ $bestPath['distance'] }} km</p>

<h2>Worst Path:</h2>
<ul>
    @foreach ($worstPath['path'] as $pathItem)
        <li>
            College: {{ $colleges->firstWhere('id', $pathItem['college'])->name }}
            Distance: {{ $pathItem['distance'] }} km
        </li>
    @endforeach
</ul>
<p>Overall Distance: {{ $worstPath['distance'] }} km</p>
