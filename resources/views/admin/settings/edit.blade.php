@extends('admin.layouts.master')
@section('content')

<div class="sb2-2">
    <div class="sb2-2-2">
        <ul>
            <li><a href="#"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
            </li>
            <li class="active-bre"><a href="#"> Edit Setting</a>
            </li>
            <li class="page-back"><a href="#"><i class="fa fa-backward" aria-hidden="true"></i> Back</a>
            </li>
        </ul>
    </div>
    <div class="sb2-2-add-blog">
        <div class="box-inn-sp">
            <div class="inn-title">
                <h4>Edit Setting</h4>
                <p>Edit Setting to show in User Interface.</p>
            </div>
            <div class="bor">
                <form action="{{ route('setting.update', $setting->id) }}" method="post">
                    @csrf
                    @method('PATCH')
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="list-title" type="text" class="validate" name="phone_1" value="{{ $setting->phone_1 }}">
                            <label for="list-title">Phone 1</label>
                        </div>
                        <div class="input-field col s12">
                            <input id="list-title" type="text" class="validate" name="phone_2" value="{{ $setting->phone_2 }}">
                            <label for="list-title">Phone 2</label>
                        </div>
                    </div>

                    <div class="row">
                        <div class="input-field col s12">
                            <input id="list-title" type="text" class="validate" name="address_1" value="{{ $setting->address_1 }}">
                            <label for="list-title">Address 1</label>
                        </div>
                        <div class="input-field col s12">
                            <input id="list-title" type="text" class="validate" name="address_2" value="{{ $setting->address_2 }}">
                            <label for="list-title">Address 2</label>
                        </div>
                    </div>
                    

                    <div class="row">
                        <div class="input-field col s12">
                            <input id="list-title" type="text" class="validate" name="email_1" value="{{ $setting->email_1 }}">
                            <label for="list-title">Email 1</label>
                        </div>
                        <div class="input-field col s12">
                            <input id="list-title" type="text" class="validate" name="email_2" value="{{ $setting->email_2 }}">
                            <label for="list-title">Email 2</label>
                        </div>
                    </div>

                    <div class="row">
                        <div class="input-field col s12">
                            <input id="list-title" type="text" class="validate" name="company_name" value="{{ $setting->company_name }}">
                            <label for="list-title">Company Name</label>
                        </div>
                        <div class="input-field col s12">
                            <input id="list-title" type="text" name="office_hour" value="{{ $setting->office_hour }}">
                            <label for="list-title">Office Hour</label>
                        </div>
                        {{-- <div class="input-field col s12">
                            <input id="list-title" type="file" name="logo" value="{{ $setting->email_2 }}">
                            <label for="list-title">Logo</label>
                        </div> --}}
                    </div>
                   
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="list-title" type="text" name="facebook_link" value="{{ $setting->facebook_link }}">
                            <label for="list-title">Facebook Link</label>
                        </div>
                        <div class="input-field col s12">
                            <input id="list-title" type="text" name="linkedin_link" value="{{ $setting->linkedin_link }}">
                            <label for="list-title">LinkedIn Link</label>
                        </div>
                    </div>

                    <div class="row">
                        <div class="input-field col s12">
                            <input id="list-title" type="text" name="twitter_link" value="{{ $setting->twitter_link }}">
                            <label for="list-title">Twitter Link</label>
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
