
@extends('ui.layouts.master')
@section('content')

<!-- CSS file -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" rel="stylesheet" />

<!-- JS files -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>


<div class="page-content" style="margin-top: 100px;">
   <div class="container">
      <div class="row">
         <div class="col-lg-9">
            <div class="showing-list">
               <div class="row">
                 
                  <div class="col-lg-6">
                     <div class="show-filter add-course-info">
                        <form action="#">
                           <div class="row gx-2 align-items-center">
                              {{-- <div class="col-md-6 col-item">
                                 <div class=" search-group">
                                    <i class="feather-search"></i>
                                    <input type="text" class="form-control collegeName" placeholder="Search our courses">
                                 </div>
                              </div> --}}
                              <div class="col-md-6 col-lg-6 col-item">
                                 <div class="form-group select-form mb-0">
                                    <select id="collegeSelect" class="radius" multiple>
                                        <option disabled>Select at least 3 Colleges </option>
                                       @foreach ($colleges as $college)
                                        <option value="{{$college->id}}">{{$college->college_name}}</option>
                                       @endforeach
                                    </select>
                                 </div>
                              </div>
                           </div>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
            <div class="row">

            <div class="colleges">

            </div>
     
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

                    @foreach ($courses as $course)
                        <div>
                           <label class="custom_check">
                           <input type="checkbox" name="select_specialist">
                           <span class="checkmark"></span> {{$course->title}}
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
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


<script>
    $(document).ready(function() {
        $('#collegeSelect').change(function() {
            var selectedColleges = $(this).val();
            var locationData = JSON.parse(localStorage.getItem('location'));

            if (selectedColleges && selectedColleges.length >= 3) {
            // Call the API to retrieve the shortest path
            $.ajax({
                url: '/shortest-path',
                method: 'GET',
                data: {
                latitude: locationData[0], 
                longitude: locationData[1],
                collegeIds: selectedColleges
                },
                success: function(response) {
                // Process the response and display the shortest path
                    appendToView(response)
                },
                error: function(xhr, status, error) {
                console.error('Error:', error);
                }
            });
            }
        });
        });

        function appendToView(html)
        {
            $('.colleges').empty();
            $('.colleges').html(html);
        }
</script>


@endsection

