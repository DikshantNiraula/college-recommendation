@extends('admin.layouts.master')
@section('content')

<div class="sb2-2">
    <div class="sb2-2-2">
        <ul>
            <li><a href="{{ url('admin/dashboard') }}"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
            </li>
            <li class="active-bre"><a href="{{ url('admin/testimonials/create') }}"> Add Testimonial</a>
            </li>
            <li class="page-back"><a href="{{ url('admin/dashboard') }}"><i class="fa fa-backward" aria-hidden="true"></i> Back</a>
            </li>
        </ul>
    </div>
    <div class="sb2-2-add-blog">
        <div class="box-inn-sp">
            <div class="inn-title">
                <h4>Add New Testimonial</h4>
                <p>Add New Testimonial to show in User Interface.</p>
            </div>
            <div class="bor">
                <form action="{{ route('testimonials.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="list-title" type="text" class="validate" name="name">
                            <label for="list-title">Name</label>
                        </div>
                        <div class="input-field col s12">
                            <div class="file-field">
                                <div class="btn">
                                    <span>File</span>
                                    <input type="file" name="image">
                                </div>
                                <div class="file-path-wrapper">
                                    <input class="file-path" type="text" placeholder="Upload Testimonial Image" name="image">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <textarea id="textarea1" class="materialize-textarea" name="description"></textarea>
                            <label for="textarea1">Testimony:</label>
                        </div>
                    </div>
                    <div class="input-field col s12">
                        <input id="list-title" type="text" class="validate" name="designation">
                        <label for="list-title">Designation</label>
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
