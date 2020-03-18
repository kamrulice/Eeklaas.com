@extends('frontend.pages.users.master')
<body class="index-opt-1 catalog-product-view catalog-view_op1 page-order">

    <div class="wrapper">
        
        @section('sub-content')

        @include('layouts.include.msg')

        <div style="background-color: #fafafa" class="box-border">
                        <h3 class="2">Account Detail</h3><hr>
                        <form method="POST" action="{{ route('account-update') }}">
                            @csrf
                            <ul>
                                <li class="row">
                                    <div class="col-sm-6">
                                        <label for="first_name" class="required">First Name *</label>
                                        <input class="input form-control" value="{{ $user->first_name }}" name="first_name" id="first_name" type="text">
                                    </div>
                                    <div class="col-sm-6">
                                        <label for="last_name" class="required">Last Name *</label>
                                        <input name="last_name" value="{{ $user->last_name }}" class="input form-control" id="last_name" type="text">
                                    </div>
                                </li>
                                <li class="row">
                                    <div class="col-sm-6">
                                        <label for="display name">Display Name *</label>

                                        <input name="name" class="input form-control" id="company_name" type="text" value="{{ $user->name }}">
                                        <p style="font-size: 13px; font-style: italic; color: #8c8c8c">This will be how your name will displayed in the account section and in reviews</p>
                                    </div>
                                    <div class="col-sm-6">
                                        <label for="Phone" class="required">Phone Number</label>
                                        <input class="input form-control" name="phone" id="phone" type="text" value="{{ $user->phone }}">
                                    </div>
                                </li>
                                

                                <li class="row">

                                    <div class="col-sm-6">
                                        
                                        <label for="Email" class="required">Email Address *</label>
                                        <input class="input form-control" name="email" id="email" type="text" value="{{ $user->email }}">

                                    </div>

                                    <div class="col-sm-6">
                                        
                                        <label for="Bkash" class="required">Bkash Number</label>
                                        <input class="input form-control" name="bkash" id="bkash" type="text" value="{{ $user->bikash }}">

                                    </div>

                                    
                                </li>

                                <li class="row">

                                    <div class="col-sm-6">

                                        <label for="Roket" class="required">Roket Number</label>
                                        <input class="input form-control" name="rocket" id="rocket" type="text" value="{{ $user->rocket }}">
                                    </div>

                                    <div class="col-sm-6">
                                        
                                        <label for="card" class="required">Card Number</label>
                                        <input class="input form-control" name="card" id="card" type="text" value="{{ $user->card_number }}">

                                    </div>

                                    
                                </li>

                                <h3 class="checkout-sep2">Change Password</h3>
                                <hr>

                                <li class="row">
                                    

                                </li>

                                <li class="row">
                                    <div class="col-sm-6">
                                        <label for="Current Pass" class="required">Current Password</label>
                                        <input class="input form-control" name="current-password" id="current-password" type="password" placeholder="Current Password">
                                        <p style="font-size: 13px; font-style: italic; color: #8c8c8c">(leave blank to leave unchanged)</p>
                                    
                                        <label for="New Pass">New Password</label>
                                        <input class="input form-control" name="password" id="password" type="password" placeholder="New Password">
                                        <p style="font-size: 13px; font-style: italic; color: #8c8c8c">(leave blank to leave unchanged)</p>
                                    
                                        <label for="newpass" class="required">Confirm Password</label>
                                        <input class="input form-control" name="password_confirmation" id="password_confirmation" type="password" placeholder="New Password Again">
                                        <p style="font-size: 13px; font-style: italic; color: #8c8c8c">(leave blank to leave unchanged)</p>
                                    </div>
                                </li>
                                <li>
                                    <button type="submit" style="padding: 1% 3%" class="button">Update</button>
                                </li>
                            </ul>
                        </form>
                    </div>
                
        @endsection

        <a href="#" class="back-to-top">
            <i aria-hidden="true" class="fa fa-angle-up"></i>
        </a>
        
    </div>

    
    

 