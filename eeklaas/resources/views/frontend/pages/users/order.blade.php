@extends('frontend.layouts.master')
<style>
    .block{
        display: none;
    }
</style>
@section('content')
    <div class="container mt-5">

        <div class="card card-body mt-2 box-border" style="background-color: #fafafa;margin-top: 10px;" >
            <h3 class="text-center">Payment Methoad</h3>
         <form method="POST" action="{{ route('order.confirm') }}">
            @csrf
            <div class="form-group row">
                <label for="payment_method" class="col-md-4 col-form-label text-md-right">{{ __('Payment Method') }}</label>

                <div class="col-md-6">
                    <select class="form-control" name="payment" required id="payments">
                        <option>Please Select A Payment Method</option>
                        @foreach ($payments as $payment)
                            <option value="{{ $payment->short_name }}">{{ $payment->name }}</option><br>
                        @endforeach
                    </select>

                    @foreach ($payments as $payment)

                        <div id="payment_{{ $payment->short_name }}" class="block alert alert-success mt-2 text-center">
                            <h3>{{ $payment->name }} Payment</h3>
                            <p>
                                <strong>{{ $payment->name }} No: {{ $payment->no }}</strong>
                                <br>
                                <strong>Account Type: {{ $payment->type }}</strong>
                            </p>
                            <div class="alert alert-success">
                                Please Send the Above money to this payment method No and write your transaction code below there...
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="form-group mt-2 mb-2 col-md-6 offset-4">
                    <input type="text" name="transaction_id" id="transaction_id" class="form-control hidden" placeholder="Enter Transaction Code">
                    <div class="card mt-2">
                        <div class="card-header text-muted">Sipping cost of Tk.  <strong>60</strong> </div>
                    </div>
                    <div class="col-md-6 mt-2">
                        <div class="form-group">
                            <button class="btn btn-primary btn-block" type="submit">Confirm Order</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        </div>
    </div>
@endsection

@section('script')

    <script type="text/javascript">
        $("#payments").change(function() {
            $payment_method = $("#payments").val();
            if ($payment_method == "cash") {
                $("#payment_cash").removeClass('block');
                $("#payment_bkash").addClass('block');
                $("#payment_rocket").addClass('block');
            }else if($payment_method == "bkash"){
                $("#payment_bkash").removeClass('block');
                $("#payment_cash").addClass('block');
                $("#payment_rocket").addClass('block');
                $("#transaction_id").removeClass('block');
            }else if($payment_method == "rocket"){
                $("#payment_rocket").removeClass('block');
                $("#payment_bkash").addClass('block');
                $("#payment_cash").addClass('block');
                $("#transaction_id").removeClass('block');
            }
        })
    </script>


    @endsection
