@extends('frontend.layouts.master')

@section('title','Login')

@push('css')

@endpush

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 offset-3">
                    @include('layouts.include.msg')
                    <div class="card">
                        <div class="card-header" data-background-color="purple">
                            <div style="background-color: #fafafa" class="box-authentication">
                                <h3>Login</h3>
                                <hr style="border:1px solid #bfbfbf; padding: 0; margin:0 0 2% 0 ">
                              <div class="card-content">
                                  <form method="POST" action="{{ route('seller.store') }}">
                                      @csrf
                                      <div class="row">
                                          <div class="col-md-12">
                                              <div class="form-group {{ $errors->has('email') || $errors->has('phone') ? 'has-error': ''}} label-floating">
                                                  <label class="control-label">Email</label>
                                                  <input  type="email" class="form-control" name="email" value="{{ old('phone') }}" required>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="row">
                                          <div class="col-md-12">
                                              <div class="form-group label-floating">
                                                  <label class="control-label">Password</label>
                                                  <input type="password" class="form-control" name="password" required>
                                              </div>
                                          </div>
                                      </div>
                                      <button type="submit" class="btn btn-primary btn-block">Login</button>
                                      @if (Route::has('password.request'))

                                          <div class="text-right p-t-13 p-b-23">
                                    <span class="txt1">
                                        Forgot
                                    </span>
                                              <a href="{{ route('password.request') }}" class="txt2">
                                                  Email / Password?
                                              </a>
                                          </div>
                                      @endif

                                      <span style="float: right;"></span>
                                      <hr>
                                  </form>
                              </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')

@endpush
