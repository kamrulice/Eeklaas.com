@extends('frontend.layouts.master')
@push('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap.min.css" />
@endpush
@section('content')
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
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
                        </ul>
                    </header>
                    <div class="card">
                        <div class="card-header card-header-primary" data-background-color="purple">
                            <h4 class="card-title text-center">Sales Summary</h4>
                            <span class="float-right">
                                <a href="{{route('seller.product.invoice')}}" target="_blank">
                                    <button class="btn btn-success btn-sm">Generate Invoice</button>
                                </a>
                            </span>
                        </div>
                        <div class="card-body">
                            <table id="table" class="table table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th>SL.</th>
                                    <th>SKU</th>
                                    <th>Product Name</th>
                                    <th>Quantity</th>
                                    <th>price</th>
                                    <th>Discount</th>
                                    <th>Shipping Cost</th>
                                    <th>Total Price</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php $total=0;?>
                                @foreach($sales as $key=> $delivery)
                                    <tr>
                                        <td>{{$key+1}}</td>
                                        <td>{{$delivery->shipping->sku}}</td>
                                        <td>{{$delivery->productName}}</td>
                                        <td>{{$delivery->quantity}}</td>
                                        <td>{{$delivery->price}}</td>
                                        <td>{{$delivery->discount}}</td>
                                        <td>{{$delivery->shipping_charge}}</td>
                                        <td>{{$delivery->total_price}}</td>
                                        @php $total = $total+$delivery->total_price @endphp

                                    </tr>
                                @endforeach
                                <tr>

                                    <td colspan="6"></td>

                                    <td>Total Sale</td>
                                    <td><?php echo $total; ?></td>
                                </tr>
                                </tbody>
                            </table>
                            <div class="text-center">
                                <span class="text-center">{{$sales->links()}}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#table').DataTable();
        } );
    </script>
@endpush
