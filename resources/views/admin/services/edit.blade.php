@extends('admin.layouts.master')
@section('content')

<div class="sb2-2">
    <div class="sb2-2-2">
        <ul>
            <li><a href="{{ url('admin/dashboard') }}"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
            </li>
            <li class="active-bre"><a href="{{ url('admin/services/' . $service->id . '/edit') }}"> Edit Service</a>
            </li>
            <li class="page-back"><a href="{{ url('admin/dashboard') }}"><i class="fa fa-backward" aria-hidden="true"></i> Back</a>
            </li>
        </ul>
    </div>
    <div class="sb2-2-add-blog">
        <div class="box-inn-sp">
            <div class="inn-title">
                <h4>Edit Service</h4>
                <p>Edit existing Service.</p>
            </div>
            <div class="bor">
                <form action="{{ route('services.update', $service->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="service-title" type="text" class="validate" name="title" value="{{ $service->title }}">
                            <label for="service-title">Title</label>
                        </div>
                        <div class="input-field col s12">
                            <div class="file-field">
                                <div class="btn">
                                    <span>File</span>
                                    <input type="file" name="image">
                                </div>
                                <div class="file-path-wrapper">
                                    <input class="file-path" type="text" placeholder="Upload Service Image" name="image">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <textarea id="textarea1" class="materialize-textarea" name="description">{{ $service->description }}</textarea>
                            <label for="textarea1">Description:</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input type="submit" class="waves-effect waves-light btn-large" value="Update">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
