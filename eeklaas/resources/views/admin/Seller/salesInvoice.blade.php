<!DOCTYPE html>
<html>
<head>
    <title>Sales Invoice</title>
    <link href="{{ asset('backend/css/bootstrap.min.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="{{asset('css/admin_style.css')}}">
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

    <h4>Sales </h4>

    <table id="table" class="table table-bordered table-hover">
                        <thead>
                        <tr>
                            <th>SL.</th>
                            <th>Product Name</th>
                            <th>Quantity</th>
                            <th>price</th>
                            <th>Sub-total</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $total=0; $total_price;?>
                        @foreach($sales as $key=> $delivery)
                            <tr>
                                <td>{{$key+1}}</td>
                                <td>{{$delivery->product_name}}</td>
                                <td>{{$delivery->product_quantity}}</td>
                                <td>{{$delivery->product_price}}</td>
                                <td>{{$delivery->product_quantity*$delivery->product_price}}</td>
                                @php
                                $total_price= $delivery->product_quantity*$delivery->product_price;
                                 $total += $total_price ;@endphp
                            </tr>
                        @endforeach
                        <tr>
                            <td colspan="3"></td>
                            <td>Total Sale</td>
                            <td><?php echo $total; ?></td>
                        </tr>
                        </tbody>
                    </table>
    <div class="authority float-right mt-5">
        <p>------------------------------------</p>
        <h5 style="margin-left: 17px">Authority Signature</h5>
    </div>
    <div class="clearfix"></div>
</div>
<!-- content-wrapper ends -->
</body>
</html>
