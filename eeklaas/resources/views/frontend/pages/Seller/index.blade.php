@extends('frontend.layouts.master')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
        @if($seller->status==1)
        <header class="header " style="box-shadow:-1px 10px 8px 7px #E6E6E6;">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link"   href="{{route('seller.dashboard')}}">Dashboard</a>
                </li>
                <li class="nav-item">
                    <a href="{{route('seller.productAdd')}}" class="nav-link">Product</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('sellerAll.product')}}" role="tab">Inventory</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('sellerOrder.product')}}" role="tab">Orders</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('seller.advertise')}}" role="tab">Advertising</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('seller.details')}}" role="tab">Seller Details</a>
                </li>
                <li class="nav-item">
                    <div class="dropdown show">
                        <a class="nav-link dropdown-toggle" href="#" role="tab" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Reports
                        </a>

                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                            <a class="nav-link" href="{{route('seller.productReports')}}" role="tab" style="font-size:15px;">Sales</a>
                            <a class="nav-link" href="{{route('seller.productStock')}}" style="font-size:15px;">Stock IN</a>
                            <a class="nav-link" href="{{route('seller.productStockOut')}}" style="font-size:15px;">Stock Out</a>
                            <a class="nav-link" href="{{route('seller.transactions')}}" style="font-size:15px;">Transaction overview</a>
                        </div>
                    </div>

                </li>
            </ul>
        </header>
        </div>
        <div class="container">
             <div class="row" style="border:40px solid #E7E7E7; height:500px;">
                 <div class="col-md-3" style="height:425px; box-shadow:0 10px 10px 0 #E5E5E5;">
                     <p class="mt-2">Your Orders</p>
                     <div>Pending <span class="float-right badge badge-info badge-pill">{{count($pending)}}</span></div>
                     <div class="mt-2">Premium Unshipped<span class="float-right badge badge-success badge-pill">{{count($premium)}}</span></div>
                     <div class="mt-2">Unshipped <span class="float-right badge badge-warning badge-pill">{{count($pending)}}</span></div>
                     <div class="mt-2">
                         <a href="{{route('rejects.product')}}">Rejected Products <span class="float-right badge badge-danger badge-pill">{{count($reject)}}</span>
                         </a>
                     </div>
                     <div class="mt-2">
                         <a href="{{route('expire.product')}}">Expiry Date Products <span class="float-right badge badge-danger badge-pill">{{count($expiryDate)}}</span>
                         </a>
                     </div>
                 </div>
                 <div class="col-md-6" style="height:425px; box-shadow:0 0 1px 5px #E5E5E5; grid-gap:1em ;">
                     <p class="text-center mt-4">All Sales Summary</p>

                         <table class="table table-bordered table-hover table-responsive">
                             <thead>
                                <tr>
                                    <th>SL.</th>
                                    <th>Product</th>
                                    <th>Quantity</th>
                                    <th>Unit price</th>
                                    <th>Total Price</th>
                                </tr>
                             </thead>
                             <tbody>
                             @php $total=0; @endphp
                             @foreach($complete as $key=> $sale)
                                <tr>
                                    <td>{{$key+1}}</td>
                                    <td>{{$sale->productName}}</td>
                                    <td>{{$sale->quantity}}</td>
                                    <td>{{$sale->price}}&nbsp;Taka</td>
                                    <td>{{$sale->total_price}}&nbsp;Taka</td>
                                    @php $total = $total+$sale->total_price @endphp
                                </tr>
                                 @endforeach
                             <tr>
                                 <td colspan="3"></td>
                                 <td>Total Sales</td>
                                 <td>{{$total}}&nbsp;Taka</td>
                             </tr>
                             </tbody>
                         </table>

                 </div>
                 <div class="col-md-3" style="height:425px; box-shadow:0 0 10px 0 #E5E5E5; grid-gap:1em ;">
                     <P class="mt-3">payment Summary</P>
                     <div class="mb-5" style="border-bottom:10px solid #E7E7E7;">Balance<span class="float-right">{{$total}}&nbsp;Taka</span></div>
                     <div class="mt-2 mb-3" style="border-bottom:10px solid #E7E7E7; text-align: center;">Manage Your Case Log</div>
                     <div class="mb-5" style="border-bottom:10px solid #E7E7E7;">
                         <p class="mt-2" class="text-center">Sales Summary</p>
                         <p class="text-center mt-2">Order products Sales</p>
                        <div>
                            7 Days<span class="float-right">{{$perDaySales}}&nbsp;Taka</span><br>
                            15 Days<span class="float-right">{{$perWeekSales}}&nbsp;Taka</span><br>
                            30 Days<span class="float-right">{{$perMonthSales}}&nbsp;Taka</span>
                        </div>
                 </div>
             </div>
        </div>
            @elseif($seller->status==2)
            <div class="col-lg-12 mt-5">
                <div class="card lead text-center text-muted">We Are Happy You Are Here.Please Wait For Admin Approve</div>
                <br> <br>
            </div>

            @else

                <div class="col-lg-12 mt-5">
                    <div class="card lead text-center text-muted">Be patient and give your valuable information</div>
                </div>

           <div class="col-md-12 mt-5">
            <form method="POST" action="{{route('seller.info')}}" id="registration_form" enctype="multipart/form-data">
                @csrf
                <div class="form-group row">
                    <label for="phone" class="col-md-2 col-form-label text-md-right">{{ __('Profile Image') }}</label>
                    <div class="col-md-4">
                        <input id="" type="file" class="form-control" name="ProfileImage" value="{{ old('ProfileImage') }}" required autocomplete="ProfileImage" autofocus>
                        <input type="hidden" name="id" value="{{Session::get('sellerId')}}">
                        <input type="hidden" name="status" value="2">
                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                    </div>

                    <label for="phone" class="col-md-2 col-form-label text-md-right">{{ __('NID Number') }}</label>
                    <div class="col-md-4">
                        <input  type="text" class="form-control" name="NidNumber" value="{{ old('NidNumber') }}" required autocomplete="NidNumber" autofocus>

                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="phone" class="col-md-2 col-form-label text-md-right">{{ __('NID Scan Copy') }}</label>
                    <div class="col-md-4">
                        <input id="" type="file" class="form-control" name="NidImage" value="{{ old('NidImage') }}" required autocomplete="NidImage" autofocus>
                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                    </div>

                    <label for="phone" class="col-md-2 col-form-label text-md-right">{{ __('Address') }}</label>
                    <div class="col-md-4">
                        <textarea class="form-control" name="address" rows="4"></textarea>
                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                    </div>
                </div>
                <div class="mt-2" style="margin-bottom:40px; margin-top:20px;  ">Enter Your Bank Information:</div>
                <div class="form-group row">
                    <label for="phone" class="col-md-2 col-form-label text-md-right">{{ __('Account Name') }}</label>
                    <div class="col-md-4">
                        <input id="" type="text" class="form-control" name="account_name" value="{{ old('account_name') }}" required autocomplete="account_name" autofocus>
                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                    </div>

                    <label for="phone" class="col-md-2 col-form-label text-md-right">{{ __('Account Number') }}</label>
                    <div class="col-md-4">
                        <input id="" type="text" class="form-control" name="account_number" value="{{ old('account_number') }}" required autocomplete="account_number" autofocus>
                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="phone" class="col-md-2 col-form-label text-md-right">{{ __('Bank name') }}</label>
                    <div class="col-md-4">
                        <input id="" type="text" class="form-control" name="bank_name" value="{{ old('bank_name') }}" required autocomplete="bank_name" autofocus>
                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                    </div>

                    <label for="phone" class="col-md-2 col-form-label text-md-right">{{ __('Branch Name') }}</label>
                    <div class="col-md-4">
                        <input id="" type="text" class="form-control" name="branch_name" value="{{ old('branch_name') }}" required autocomplete="branch_name" autofocus>
                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="phone" class="col-md-2 col-form-label text-md-right">{{ __('Cheque Scan Copy') }}</label>
                    <div class="col-md-4">
                        <input id="" type="file" class="form-control" name="checkImage" value="{{ old('checkImage') }}" required autocomplete="checkImage" autofocus>
                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                    </div>
                </div>

                <div class="form-group row mb-0">
                    <div class="" style="margin-left: 195px;">
                        <button type="submit" class="btn btn-primary">
                            {{ __('Save') }}
                        </button>
                    </div>
                </div>
            </form>
               <br>
           </div>
        @endif
    </div>
</div>
@endsection





