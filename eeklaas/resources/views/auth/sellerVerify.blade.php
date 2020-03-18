@extends('frontend.layouts.master')
@section('content')

    <div class="container">
        <div class="row justify-content-center">

            <div class="col-md-8 col-md-offset-2">
                @include('layouts.include.msg')
                <div style="background-color: #fafafa" class="box-authentication">
                    <div class="card py-5">
                        <h2 class="text-center" style="font-size:20px; ">Enter Verification Code</h2>
                        <hr style="border:1px solid #bfbfbf; padding: 0; margin:0 0 2% 0 ; margin-bottom: 50px; ">

                        <div class="card-header">
                            <form method="POST" action="{{ route('seller.check') }}" id="registration_form">
                                @csrf

                                <div class="form-group row">
                                    <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Verification Code') }}</label>

                                    <div class="col-md-6">
                                        <input id="code" type="password" class="form-control" name="code" required autocomplete="new-password">
                                    <!-- @error('code')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror -->
                                        <span class="error_form" id="code"></span>
                                    </div>
                                </div>

                                <div class="form-group row mb-0">
                                    <div class="col-md-6 offset-4">
                                        <button type="submit" class="btn btn-success btn-block">
                                            {{ __('Verify') }}
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection


