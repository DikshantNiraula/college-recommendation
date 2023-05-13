@extends('admin.layouts.master')
@section('content')

<div class="sb2-2">
    <div class="sb2-2-2">
        <ul>
            <li><a href="#"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
            </li>
            <li class="active-bre"><a href="#"> Edit FAQ</a>
            </li>
            <li class="page-back"><a href="#"><i class="fa fa-backward" aria-hidden="true"></i> Back</a>
            </li>
        </ul>
    </div>
    <div class="sb2-2-add-blog">
        <div class="box-inn-sp">
            <div class="inn-title">
                <h4>Edit FAQ</h4>
                <p>Edit FAQ for User Interface.</p>
            </div>
            <div class="bor">
                <form action="{{ route('faqs.update', $faq->id) }}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="list-title" type="text" class="validate" name="question" value="{{ $faq->question }}">
                            <label for="list-title">Question</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <textarea id="textarea1" class="materialize-textarea" name="answer">{{ $faq->answer }}</textarea>
                            <label for="textarea1">Answer:</label>
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
