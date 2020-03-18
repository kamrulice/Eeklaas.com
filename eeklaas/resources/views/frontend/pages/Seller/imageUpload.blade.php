@extends('frontend.layouts.master')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <header class="header " style="box-shadow:-1px 10px 8px 7px #E6E6E6;">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Dashboard</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="profile-tab" data-toggle="tab" href="{{route('seller.productAdd')}}" role="tab" aria-controls="profile">Product</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('sellerAll.product')}}" role="tab">Inventory</a>
                        </li>
                    </ul>
                </header>
            </div>
            <div class="container">
                <div class="row" style="border:40px solid #E7E7E7;">
                    <div class="col-md-12">
                        @if(Session::has('msg'))
                            <div>
                                <span class="alert alert-success alert-dismissable text-center">{{Session::get('msg')}}</span>
                            </div>
                        @endif
                        <div class="card offset-2">

                            <div class="card-header" data-background-color="purple">
                                <br>
                                <h2 class="title text-center" style="font-size:20px;">Upload Product Image</h2>
                            </div>
                            <form action="{{route('image.upload')}}" class="dropzone" method="POST" id="my-awesome-dropzone" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <div class="fallback">
                                    <input name="file" type="file" multiple/>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
