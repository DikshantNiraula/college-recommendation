@extends('admin.layouts.master')
@section('content')

<div class="sb2-2">
    <div class="sb2-2-2">
        <ul>
            <li><a href="{{ url('admin/dashboard') }}"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
            </li>
            <li class="active-bre"><a href="{{ url('admin/collegs/create') }}"> Edit Course</a>
            </li>
            <li class="page-back"><a href="{{ url('admin/dashboard') }}"><i class="fa fa-backward" aria-hidden="true"></i> Back</a>
            </li>
        </ul>
    </div>
    <div class="sb2-2-add-blog">
        <div class="box-inn-sp">
            <div class="inn-title">
                <h4>Edit Course</h4>
                <p>Edit Course to show in User Interface.</p>
            </div>
            <div class="bor">
                <form action="{{ route('courses.update',$course->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="service-title" type="text" class="validate" name="title" value="{{$course->title}}">
                            <label for="service-title">Course Name</label>
                        </div>
                        <div class="input-field col s12">
                            <select name="college_id" id="">
                                <option value="" selected disabled>Select College</option>
                                @foreach($colleges as $college)
                                <option {{$college->id == $course->college_id ? 'selected' : ''}} value="{{$college->id}}" >{{$college->college_name}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="input-field col s12">
                            <div class="file-field">
                                <div class="btn">
                                    <span>File</span>
                                    <input type="file" name="file">
                                </div>
                                <div class="file-path-wrapper">
                                    <input class="file-path" type="text" placeholder="Upload Course Image" name="file">
                                </div>
                            </div>
                        </div>

                        <div class="input-field col s12">
                            <input id="service-title" type="number" class="validate" name="price" value="{{$course->price}}">
                            <label for="service-title">Price</label>
                        </div>

                        <div class="input-field col s12">
                            <input id="service-title" type="number" class="validate" name="course_time_year" value="{{$course->course_time_year}}">
                            <label for="service-title">Year of Completion</label>
                        </div>

                        <div class="input-field col s12">
                            <input id="service-title" type="number" class="validate" name="seats_available"  value="{{$course->seats_available}}">
                            <label for="service-title">Seats Available</label>
                        </div>

                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <textarea id="textarea1" class="materialize-textarea" name="course_detail">{{$course->course_detail}}</textarea>
                            <label for="textarea1">Description:</label>
                        </div>
                    </div>
                   
                    <div class="row">
                        <div class="input-field col s12">
                            <input type="submit" class="waves-effect waves-light btn-large" value="Submit">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
