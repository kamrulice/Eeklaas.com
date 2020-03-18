@extends('frontend.pages.users.master')
<body class="index-opt-1 catalog-product-view catalog-view_op1 page-order">
    <div class="wrapper">
        @section('sub-content')
        <div style="background-color: #fafafa" class="box-border">
            <div class="col-md-12 offset-3">
                <div class="col-sm-6">
                    <h3 class="2" style="text-align: center;">Shipping Address</h3><hr>
                    <form action="{{ route('checkouts.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <label for="address" class="required">First Name</label>
                        <input class="form-control" name="first_name" type="text">

                        <label for="thana" class="required">Last Name</label>
                        <input class=" form-control" name="last_name" type="text">
                        <label for="thana" class="required">Email</label>
                        <input class=" form-control" name="email" type="text">
                        <label for="thana" class="required">Phone</label>
                        <input class=" form-control" name="mobile" type="text">
                        <label for="thana" class="required">Address</label>
                        <textarea class=" form-control" name="address" rows="4"></textarea>
                        <label for="thana" class="required">Zip Code</label>
                        <input class=" form-control" name="zip" type="text">
                        <label for="thana" class="required">Bill To</label>
                        <input class=" form-control" name="shipping_to_bill" type="text">

                        <button type="submit" style="padding: 1% 3%" class="btn btn-success btn-block">Submit</button>
                    </form>
                </div>
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
            if ($payment_method == "cash") {
                $("#payment_cash").removeClass('hidden');
                $("#payment_bkash").addClass('hidden');
                $("#payment_rocket").addClass('hidden');
            }else if($payment_method == "bkash"){
                $("#payment_bkash").removeClass('hidden');
                $("#payment_cash").addClass('hidden');
                $("#payment_rocket").addClass('hidden');
                $("#transaction_id").removeClass('hidden');
            }else if($payment_method == "rocket"){
                $("#payment_rocket").removeClass('hidden');
                $("#payment_bkash").addClass('hidden');
                $("#payment_cash").addClass('hidden');
                $("#transaction_id").removeClass('hidden');
            }
        })
    </script>


    @endsection




