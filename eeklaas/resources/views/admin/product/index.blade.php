@extends('layouts.app')
@section('title','create Products')

@push('css')
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap.min.css" />
@endpush

@section('content')
<div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <a href="{{ route('product.create')}}" class="btn btn-primary">Add New</a>
            @include('layouts.include.msg')
            <div class="card">
              <div class="card-header card-header-primary" data-background-color="purple">
                <h4 class="card-title ">All Products</h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table id="table" class="table table-bordered table-hover">
                    <thead class=" text-primary">
                      <th width="4%">ID</th>
                      <th width="10%">product Name</th>
                      <th width="10%">Seller Name</th>
                      <th width="10%">Category Name</th>
                      <th width="5%">Price</th>
                      <th width="5%">Discount</th>
                      <th width="5%">publication status </th>
                      <th width="8%">Action</th>
                    </thead>
                    <tbody>
                      @foreach($products as $key=>$product)
                      <tr>
                        <td>{{ $key + 1}}</td>
                        <td>{{ $product->title}}</td>
                        <td>{{ $product->seller->name}}</td>
                        <td>{{ $product->category->name}}</td>
                        <td>{{ $product->price}}</td>
                        <td>{{ $product->offer_price}}</td>
                        <td>
                            @if($product->published==1)
                           <a href="{{route('product.published',$product->id)}}" class="btn btn-success btn-sm">Published</a>
                                @else
                            <a href="{{route('product.published',$product->id)}}" class="btn btn-warning btn-sm">Unpublished</a>
                                @endif
                        </td>

                        <td>




                            <div class="dropdown">
                                <button class="btn btn-info btn-sm dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                   option
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a href="{{ route('product.edit',$product->id)}}" class="btn btn-info btn-sm">view</a>
                                    <form id="delete-form-{{ $product->id}}" action="{{ route('product.destroy',$product->id)}}" style="display:none;" method="POST">
                                        @csrf
                                        @method('DELETE')
                                    </form>
                                    <button type="button" class="btn btn-danger btn-sm" onclick="if(confirm('Are you Sure?You want to delete this?')){
                                        event.preventDefault();
                                        document.getElementById('delete-form-{{$product->id }}').submit();
                                        }else{
                                        event.preventDefault();
                                        }"><i class="material-icons">delete</i></button>

                                    <button data-toggle="modal" data-target="#exampleModalLong{{$key}}" class="btn btn-success btn-sm">Add Quantity</button>
                                    <button data-toggle="modal" data-target="#exampleModalLongs{{$key}}" class="btn btn-dark btn-sm">Add Discount</button>

                                </div>
                            </div>

                        </td>


                      </tr>
                      {{-- Modal form--}}
                      <div class="modal fade" id="exampleModalLong{{$key}}"  role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                          <div class="modal-dialog" role="document">
                              <div class="modal-content">
                                  <div class="modal-header">
                                      <h5 class="modal-title" id="exampleModalLongTitle">Add Quantity</h5>
                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <span aria-hidden="true">&times;</span>
                                      </button>
                                  </div>
                                  <div class="modal-body">
                                      <form action="{{route('add.quantity')}}" method="POST">
                                          @csrf
                                          <div class="form-group">
                                              <input type="number" class="form-control" name="quantity" placeholder="Add Product Quantity">
                                              <input type="hidden" name="id" value="{{$product->id}}">
                                          </div>
                                          <div class="form-group">
                                              <button type="submit" class="btn btn-success">Add</button>
                                          </div>

                                      </form>
                                  </div>
                              </div>
                          </div>
                      </div>

                      <div class="modal fade" id="exampleModalLongs{{$key}}"  role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                          <div class="modal-dialog" role="document">
                              <div class="modal-content">
                                  <div class="modal-header">
                                      <h5 class="modal-title" id="exampleModalLongTitle">Add Discount Price</h5>
                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <span aria-hidden="true">&times;</span>
                                      </button>
                                  </div>
                                  <div class="modal-body">
                                      <form action="{{route('add.discount')}}" method="POST">
                                          @csrf
                                          <div class="form-group">
                                              <input type="number" id="offer_price" class="form-control" name="offer_price" placeholder="Add Discount Price">
                                              <input type="hidden" value="{{$product->id}}" name="id">
                                              <input type="hidden" id="status" value="1" name="status">
                                          </div>
                                          <div class="form-group">
                                              <button type="submit" class="btn btn-success">Save</button>
                                          </div>

                                      </form>
                                  </div>

                              </div>
                          </div>
                      </div>
                      {{-- Modal form--}}


                      @endforeach
                    </tbody>
                  </table>
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

  <script type="text/javascript">
      $(document).ready(function() {
          $('#table').DataTable();

    } );
  </script>
@endpush







