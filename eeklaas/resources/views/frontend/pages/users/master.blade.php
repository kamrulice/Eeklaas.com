@extends('frontend.layouts.master')


@section('content')

<main class="site-main">

            <div class="columns container">
                
                        
                <h2 class="page-heading">
                    <span class="page-heading-title3">Customer Account</span>
                </h2>

                <div class="page-content checkout-page">

                    <ul class="step">
                        <li class=" {{ Route::is('user.dashboard') ? 'current-step' : '' }}"><span><a href="{{route('user.dashboard')}}" >Dashboard</a></span></li>
                        <li class=" {{ Route::is('user.order') ? 'current-step' : '' }}"><span><a href="{{route('user.order_status')}}">Orders</a></span></li>
                        <li class=" {{ Route::is('user.address') ? 'current-step' : '' }}"><span><a href="{{route('user.address')}}">Address</a></span></li>
                        <li class=" {{ Route::is('user.account') ? 'current-step' : '' }}"><span><a href="{{route('user.account')}}">Account Detail</a></span></li>
                        <li class=" {{ Route::is('user.track') ? 'current-step' : '' }}"><span><a href="{{route('user.track')}}">Track Your Order</a></span></li>
                    </ul>
                    <br>

                    @yield('sub-content')
                </div>

            </div>


        </main>


@endsection




