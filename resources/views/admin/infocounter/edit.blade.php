@extends('admin.layouts.master')
@section('content')

<div class="sb2-2">
    <div class="sb2-2-2">
        <ul>
            <li><a href="#"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
            </li>
            <li class="active-bre"><a href="#"> Edit Info Counter</a>
            </li>
            <li class="page-back"><a href="#"><i class="fa fa-backward" aria-hidden="true"></i> Back</a>
            </li>
        </ul>
    </div>
    <div class="sb2-2-add-blog">
        <div class="box-inn-sp">
            <div class="inn-title">
                <h4>Edit Info Counter</h4>
                <p>Edit Info Counter to show in User Interface.</p>
            </div>
            <div class="bor">
                <form action="{{ route('infocounter.update', $infocounter->id) }}" method="post">
                    @csrf
                    @method('PATCH')
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="list-title" type="number" class="validate" name="count1" value="{{ $infocounter->count1 }}">
                            <label for="list-title">Counter 1</label>
                        </div>
                        <div class="input-field col s12">
                            <input id="list-title" type="number" class="validate" name="count2" value="{{ $infocounter->count2 }}">
                            <label for="list-title">Counter 2</label>
                        </div>
                    </div>

                    <div class="row">
                        <div class="input-field col s12">
                            <input id="list-title" type="number" class="validate" name="count3" value="{{ $infocounter->count3 }}">
                            <label for="list-title">Counter 3</label>
                        </div>
                        <div class="input-field col s12">
                            <input id="list-title" type="number" class="validate" name="count4" value="{{ $infocounter->count4 }}">
                            <label for="list-title">Counter 4</label>
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
