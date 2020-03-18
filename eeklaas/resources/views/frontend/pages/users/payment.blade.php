@extends('frontend.pages.users.master')
<body class="index-opt-1 catalog-product-view catalog-view_op1 page-order">

    <div class="wrapper">

        @section('sub-content')
        <div style="background-color: #fafafa" class="box-border">

                                <div class="col-sm-6">
                                    <h3 class="2">Shipping Address</h3><hr>

                                    <form action="{{ route('checkouts.store')}}" method="post" enctype="multipart/form-data">
                                        @csrf

                                    <label for="address" class="required">Address</label>
                                    <input class="input form-control" name="address" id="address" type="text">

                                    <label for="thana" class="required">Thana</label>
                                    <input class="input form-control" name="thana" id="thana" type="text">

                                    <label for="city" class="required">City</label>
                                    <input class="input form-control" name="city" id="city" type="text">

                                    <label for="district" class="required">District</label>
                                    <input class="input form-control" name="district" id="district" type="text">

                                    <label for="division" class="required">Division</label>
                                    <input class="input form-control" name="division" id="division" type="text">

                                    <label for="post_code" class="required">Post Code</label>
                                    <input class="input form-control" name="post_code" id="post_code" type="text">

                                    <!-- <label for="contact_number" class="required">Contact Number</label>
                                    <input class="input form-control" name="contact_number" id="contact_number" type="text">

                                    <label for="email" class="required">Email</label>
                                    <input class="input form-control" name="email" id="email" type="text"> -->

                                    <div class="form-group row">
                <label for="payment_method" class="col-md-4 col-form-label text-md-right">{{ __('Payment Method') }}</label>

                <div class="col-md-6">
                    <select class="form-control" name="payment_method_id" required id="payments">
                        <option>Please Select A Payment Method</option>
                        @foreach ($payments as $payment)
                            <option value="{{ $payment->short_name }}">{{ $payment->name }}</option>
                        @endforeach
                    </select>
                    @foreach ($payments as $payment)

                            @if ($payment->short_name == 'cash')
                                <div id="payment_{{ $payment->short_name }}" class="hidden alert alert-success mt-2 text-center">
                                    <h3>For Cash in there is nothing necessery. Just click finish order.</h3>
                                    <p style="font-size: 18px">You will get your product in two or three business days.</p>
                                </div>
                            @else
                                <div id="payment_{{ $payment->short_name }}" class="hidden alert alert-success mt-2 text-center">
                                    <h3>{{ $payment->name }} Payment</h3>
                                    <p>
                                        <strong>{{ $payment->name }} No: {{ $payment->no }}</strong>
                                        <br>
                                        <strong>Account Type: {{ $payment->type }}</strong>
                                    </p>
                                    <div class="alert alert-success">
                                        Please Send the Above money to this bkash No and write your transaction code below there...
                                    </div>
                                </div>
                            @endif
                    @endforeach
                    <input type="text" name="transaction_id" id="transaction_id" class="form-control hidden" placeholder="Enter Transaction Code">
                </div>
            </div>

     <button type="submit" style="padding: 1% 3%" class="button">Order Now</button>
     </form>
                                </div>

                                <div class="col-sm-6">

                                    <h3 class="2">Billing Address</h3><hr>


                                    <label for="Roket" class="required">Address</label>
                                    <input class="input form-control" name="postal_code" id="postal_code" type="text">

                                    <label for="card" class="required">Thana</label>
                                    <input class="input form-control" name="city" id="city" type="text">

                                    <label for="Roket" class="required">City</label>
                                    <input class="input form-control" name="postal_code" id="postal_code" type="text">

                                    <label for="card" class="required">District</label>
                                    <input class="input form-control" name="city" id="city" type="text">

                                    <label for="Roket" class="required">Division</label>
                                    <input class="input form-control" name="postal_code" id="postal_code" type="text">

                                    <label for="card" class="required">Post Code</label>
                                    <input class="input form-control" name="city" id="city" type="text">

                                    <label for="Roket" class="required">Contact Number</label>
                                    <input class="input form-control" name="postal_code" id="postal_code" type="text">

                                    <label for="card" class="required">Email</label>
                                    <input class="input form-control" name="city" id="city" type="text">

                                     <button style="padding: 1% 3%" class="button">Save</button>
                                </div>

                    </div>

        @endsection

        <a href="#" class="back-to-top">
            <i aria-hidden="true" class="fa fa-angle-up"></i>
        </a>

    </div>

    @section('script')

    <script type="text/javascript">
        $("#payments").change(function() {
            $payment_method = $("#payments").val();
            if ($payment_method === "cash") {
                $("#payment_cash").removeClass('hidden');
                $("#payment_bkash").addClass('hidden');
                $("#payment_rocket").addClass('hidden');
            }else if($payment_method === "bkash"){
                $("#payment_bkash").removeClass('hidden');
                $("#payment_cash").addClass('hidden');
                $("#payment_rocket").addClass('hidden');
                $("#transaction_id").removeClass('hidden');
            }else if($payment_method === "rocket"){
                $("#payment_rocket").removeClass('hidden');
                $("#payment_bkash").addClass('hidden');
                $("#payment_cash").addClass('hidden');
                $("#transaction_id").removeClass('hidden');
            }
        })
    </script>


    @endsection




