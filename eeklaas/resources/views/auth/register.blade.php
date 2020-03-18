@extends('frontend.layouts.master')
@section('content')
<div class="container">
    <div class="row justify-content-center">

        <div class="col-md-8">
            @include('layouts.include.msg')
            <div style="background-color: #fafafa" class="box-authentication">
                <div class="card">
                    <h3>Register</h3>
                        <hr style="border:1px solid #bfbfbf; padding: 0; margin:0 0 2% 0 ">

                    <div class="card-header">
                        <form method="POST" action="{{ route('register') }}" id="registration_form">
                            @csrf

                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                                <div class="col-md-6">
                                    <input id="form_name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                    <!-- @error('name')
                                        <span class="error_form" id="name_error_message" class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror -->
                                    <span class="error_form" id="name_error_message" class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="phone" class="col-md-4 col-form-label text-md-right">{{ __('Phone') }}</label>

                                <div class="col-md-6">
                                    <input id="form_phone" type="text" class="form-control" name="phone" value="{{ old('phone') }}" required autocomplete="phone" autofocus>

                                    <span class="error_phone" id="phone_error_message" class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                </div>
                            </div>

                            <!-- <div class="form-group row">
                                <label for="phone" class="col-md-4 col-form-label text-md-right">{{ __('Retype Phone') }}</label>

                                <div class="col-md-6">
                                    <input id="phone" type="text" class="form-control @error('phone') is-invalid @enderror" name="phone_confirmation" required autocomplete="phone">

                                    @error('phone')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror

                                </div>
                            </div>  -->


                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                                <div class="col-md-6">
                                    <input id="form_email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                    <span class="error_form" id="email_error_message" class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="address" class="col-md-4 col-form-label text-md-right">{{ __('Address') }}</label>

                                <div class="col-md-6">
                                    <input id="form_address" type="text" class="form-control @error('street_address') is-invalid @enderror" name="street_address" value="{{ old('street_address') }}" required autocomplete="street_address" autofocus>
                                    <!-- @error('name')
                                        <span class="error_form" id="name_error_message" class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror -->
                                    <span class="error_form" id="address_error_message" class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                </div>
                            </div>



                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                                <div class="col-md-6">
                                    <input id="form_password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                    <span class="error_form" id="password_error_message"></span>

                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                                <div class="col-md-6">
                                    <input id="form_retype_password" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                    <!-- @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror -->
                                    <span class="error_form" id="retype_password_error_message"></span>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-6 offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Register') }}
                                    </button>

                                </div>
                            </div>
                            <span style="font-weight: bold;margin-left: 150px;"><a href="{{ route('login') }}"> Already Have an Account ??? Please Click Here</a></span>
                            <hr>

                            <!-- <div class="form-group row mb-0">
                             <div class="col-md-8 offset-md-4">
                                <a href="{{ url('login/facebook') }}" class="btn btn-primary"><i class="fa fa-facebook"></i> Facebook</a>
                            </div>
                            </div> -->

                        </form>

                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection


