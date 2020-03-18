@extends('frontend.pages.users.master')
<body class="index-opt-1 catalog-product-view catalog-view_op1 page-order">

    <div class="wrapper">
        
        @section('sub-content')

        <div style="margin-top: 2%" class="order-detail-content"> <div class="box-border"> <h3 style="margin: 0">Order List</h3> <hr style="border:1px solid #f7f7f7; padding: 0;"> <ol> <li> Convallis erat ligula felis aenean massa. </li><li> Aliquam vestibulum nascetur pellentesque. </li><li> Orci scelerisque fusce dolor sodales. </li><li> Dictumst donec proin sed etiam, feugiat. </li><li> Ornare mollis ullamcorper eros hac sed per. </li></ol> </div><div class="con-crc"> <div class="crc act"><img src="{{ asset('frontend/images/icon/trk/order.png') }}" alt="" width="50"><p class="naa"> Order</p></div><div class="crc"><img src="{{ asset('frontend/images/icon/trk/mail.png') }}" alt="" width="50"><p class="naa"> Mail to You</p></div><div class="crc"><img src="{{ asset('frontend/images/icon/trk/transit.png') }}" alt="" width="50"><p class="naa"> In Transit</p></div><div class="crc"><img src="{{ asset('frontend/images/icon/trk/hub.png') }}" alt="" width="50"><p class="naa"> Eeklaas Hub</p></div><div class="crc"><img src="{{ asset('frontend/images/icon/trk/delivery.png') }}" alt="" width="50"><p class="naa"> On the Way</p></div><div class="crc"><img src="{{ asset('frontend/images/icon/trk/delivered.png') }}" alt="" width="50"><p class="naa"> Delivered</p></div></div><div class="track-container"> <ul class="progressbar"> <li class="active"></li><li><span class="na"></li><li><span class="na"></li><li><span class="na"></li><li><span class="na"></li><li><span class="na"></li></ul> </div></div>
                
        @endsection

        <a href="#" class="back-to-top">
            <i aria-hidden="true" class="fa fa-angle-up"></i>
        </a>
        
    </div>

    
    

 