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
                           <h4>Showing 1-{{$colleges->count()}} of {{$colleges->count()}} results</h4>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-6">
                     <div class="show-filter add-course-info">
                        <form action="#">
                           <div class="row gx-2 align-items-center">
                              <div class="col-md-6 col-item">
                                 <div class=" search-group">
                                    <i class="feather-search"></i>
                                    <input type="text" class="form-control collegeName" value="{{request()->college_name  ?? ""}}" placeholder="Search our courses">
                                 </div>
                              </div>
                              <div class="col-md-6 col-lg-6 col-item">
                                 <div class="form-group select-form mb-0">
                                    <select class="form-select radius" name="radius">
                                       <option disabled>College in radius of </option>
                                       <option {{request()->has('radius') && request()->radius == 5 ? 'selected' : ''}} value="5">5 KM radius</option>
                                       <option {{request()->has('radius') && request()->radius == 10 ? 'selected' : ''}} value="10">10 KM radius</option>
                                       <option {{request()->has('radius') && request()->radius == 25 ? 'selected' : ''}} value="25">25 KM Radius</option>
                                       <option {{request()->has('radius') && request()->radius == 10000 ? 'selected' : ''}} value="10000">All Over Nepal</option>
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
            <div class="row">
               <div class="col-md-12">
                  <ul class="pagination lms-page lms-pagination">
                     <li class="page-item prev">
                        <a class="page-link" href="javascript:void(0);" tabindex="-1"><i class="fas fa-angle-left"></i></a>
                     </li>
                     <li class="page-item first-page active">
                        <a class="page-link" href="javascript:void(0);">1</a>
                     </li>
                     <li class="page-item">
                        <a class="page-link" href="javascript:void(0);">2</a>
                     </li>
                     <li class="page-item">
                        <a class="page-link" href="javascript:void(0);">3</a>
                     </li>
                     <li class="page-item">
                        <a class="page-link" href="javascript:void(0);">4</a>
                     </li>
                     <li class="page-item">
                        <a class="page-link" href="javascript:void(0);">5</a>
                     </li>
                     <li class="page-item next">
                        <a class="page-link" href="javascript:void(0);"><i class="fas fa-angle-right"></i></a>
                     </li>
                  </ul>
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
loadColleges();

function loadColleges()
{
        // Retrieve the location from localStorage
    var locationData = JSON.parse(localStorage.getItem('location'));

    // Send an AJAX request to the API endpoint
    if (locationData) {
    var url = "{{url('nearest-college')}}"; // Replace with the actual API endpoint URL
    let collegeName = $('.collegeName').val() ?? '';
    var radiusVal = $('.radius').val() ?? 10;

    $.ajax({
        url: url,
        type: 'GET',
        data: {latitude: locationData[0], longitude: locationData[1], name: collegeName, radius: radiusVal},
        contentType: 'application/json',
        success: function(response) {
        // Process the response from the API
        console.log('API Response:', response);

        // Render the page with the nearest college result
        renderNearestCollege(response);
        },
        error: function(xhr, status, error) {
        console.error('API Request Failed:', error);
        }
    });
    } else {
    console.log('Location data not found in localStorage.');
    }
}


function renderNearestCollege(result) {
    $('.colleges').empty()
    $('.colleges').html(result)
}


$(document).on('keyup', '.collegeName', function() {
    var inputVal = $(this).val();
    if (inputVal.length >= 3) {
        // Perform your action here
        loadColleges();
    }
});

$(document).on('change', '.radius', function() {
    loadColleges();
});


</script>


@endsection