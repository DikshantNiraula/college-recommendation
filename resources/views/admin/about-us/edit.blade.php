@extends('admin.layouts.master')
@section('content')

<div class="sb2-2">
    <div class="sb2-2-2">
        <ul>
            <li><a href="#"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
            </li>
            <li class="active-bre"><a href="#"> Edit About Us</a>
            </li>
            <li class="page-back"><a href="#"><i class="fa fa-backward" aria-hidden="true"></i> Back</a>
            </li>
        </ul>
    </div>
    <div class="sb2-2-add-blog">
        <div class="box-inn-sp">
            <div class="inn-title">
                <h4>Update About Us</h4>
                <p>Update About us to update in UI.</p>
            </div>
            <div class="bor">
                <form action="{{ route('about-us.update', $about->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="about-title" type="text" class="validate" name="title" value="{{ $about->title }}">
                            <label for="about-title">Title</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <textarea id="about-description" class="materialize-textarea" name="description">{{ $about->description }}</textarea>
                            <label for="about-description">Description</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="file-field input-field col s12">
                            <div class="btn">
                                <span>Image</span>
                                <input type="file" name="image">
                            </div>
                            <div class="file-path-wrapper">
                                <input class="file-path validate" type="text" placeholder="Upload an image file">
                            </div>
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