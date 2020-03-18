<!DOCTYPE html>
<html>
<head>
    <title>Invoice - {{ $product->invoice_number }}</title>
    <link rel="stylesheet" href="{{asset('css/admin_style.css')}}">
    <link href="{{ asset('backend/css/bootstrap.min.css') }}" rel="stylesheet" />
    <style type="text/css">
        .content-wrapper{
            background: #FFF;
        }
        .invoice-header {
            background: #f7f7f7;
            padding: 10px 20px 10px 20px;
            border-bottom: 3px solid rgb(154, 71, 181);
        }
        .invoice-right-top h3 {
            padding-right: 20px;
            margin-top: 20px;
            color: #ec5d01;
            font-size: 55px;
            font-family: auto;
        }
        .invoice-left-top {
            border-left: 5px solid #ec5d00;
            padding-left: 20px;
            padding-top: 20px;
        }
        thead{
            background: #ec5d01;
            color: #FFF;
        }
        .authority h5{
            margin-top: -10px;
            color: #ec5d01;
        }
        .thanks h4{
            color: #ec5d01;
            font-size: 25px;
            font-weight: normal;
            font-family: serif;
            margin-top: 20px;
        }
        .site-address p{
            line-height: 6px;
            font-weight: 300;
        }
    </style>
</head>
<body>
<div class="content-wrapper">
    <div class="invoice-header">
        <div class="col-md-12">
            <div class="float-left site-logo">
                <img src="{{ asset('frontend/images/icon/logo_pdf.png') }}" alt="logo" style="height: 50px;width: 50px;">
            </div>
            <div class="float-right site-address">
                <h4>Eeklaas Ecommerce</h4>
                <p> 162, Shahid Sayed Nazrul Islam Sarani, Suleman Plaza (2nd Floor), </p>
                <p> Room # 10, Old-3/3-B, Purana Paltan, Dhaka-1000. </p>
                <p>Phone: <a href="">+88-01819-259584</a></p>
                <p>E-Mail:<a href="mailto:info@Laraecommerce.com">ceo@biggroup.com.bd</a></p>
            </div>
        </div>


    </div>
    <div class="invoice-description">
        <div class="invoice-left-top float-left">
            <h6>Invoice To: </h6>
            <h3>{{$shipping->first_name}}</h3>
            <div class="address">
                <strong>Adress: </strong>
                {{ $shipping->address }}
            </div>
            <strong>Adress: {{ $shipping->mobile }}</strong>
            <strong>Email:</strong> <a href="mailto:{{ $order->email }}">{{ $shipping->email }}</a></p>
        </div>
        <div class="invoice-right-top float-right">
            <h3 style="font-size: 12px;">Invoice <strong></strong>{{ $product->invoice_number }}</h3>
            <p>{{ $shipping->created_at }}</p>
        </div>
        <div class="clearfix"></div>
    </div>
    <h4>Products </h4>

    <table class="table table-bordered table-hover">
        <thead>
        <tr>
            <th width="5%">SL</th>
            <th width="15%">Product Name</th>
            <th width="10%">Unit price</th>
            <th width="15%">Quantity</th>
            <th width="5%">Total Price</th>

        </tr>
        </thead>
        <tbody>
        @foreach($orders as $key=> $order)
            <tr>
                <td>{{$key+1}}</td>
                <td>{{$order->product_name}}</td>
                <td>{{$order->product_price }}</td>
                <td>{{$order->product_quantity}}</td>
                <td>{{$order->product_price *$order->product_quantity}}</td>
            </tr>
        @endforeach
        <tr>
            <td colspan="3"></td>
            <td colspan="">Sub-Total</td>
            <td>{{$product->subtotal}}</td>
        </tr>
        <tr>
            <td colspan="3"></td>
            <td colspan="">Shipping Cost</td>
            <td>60</td>
        </tr>
        <tr>
            <td colspan="3"></td>
            <td colspan="">Total</td>
            <td>{{$product->total}}</td>
        </tr>

        </tbody>
    </table>

    <div class="thanks mt-3">
        <h4>Thanking You For Your Business !!</h4>
    </div>
    <div class="authority float-right mt-5">
        <p>------------------------------------</p>
        <h5 style="margin-left: 17px">Authority Signature</h5>
    </div>
    <div class="clearfix"></div>
</div>
<!-- content-wrapper ends -->
</body>
</html>
