@extends('layouts.app')

@section('title','Breakfast')

@push('css')
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap.min.css" />
@endpush

@section('content')
<div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <a href="{{ route('bfast.create')}}" class="btn btn-primary">Add New</a>
            @include('layouts.include.msg')
            <div class="card">
              <div class="card-header card-header-primary" data-background-color="purple">
                <h4 class="card-title ">All Breakfast</h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table id="table" class="table" style="width:100%">
                    <thead class=" text-primary">
                      <th>
                        ID
                      </th>
                      <th>
                        Title
                      </th>
                      <th>
                        Image
                      </th>
                      <th>
                        Create At
                      </th>
                      <th>
                        Updated At
                      </th>
                      <th>
                        Action
                      </th>
                    </thead>
                    <tbody>
                      @foreach($bfasts as $key=>$bfast)
                      <tr>
                        <td>{{ $key + 1}}</td>
                        <td>{{ $bfast->title}}</td>
                        <td>{{ $bfast->image}}</td>
                        <td>{{ $bfast->created_at}}</td>
                        <td>{{ $bfast->updated_at}}</td>
                        <td>
                          <a href="{{ route('bfast.edit',$bfast->id)}}" class="btn btn-info btn-sm"><i class="material-icons">mode_edit</i></a>
                          <form id="delete-form-{{ $bfast-> id}}" action="{{ route('bfast.destroy',$bfast->id)}}" style="display:none;" method="POST">
                            @csrf
                            @method('DELETE')
                          </form>
                          <button type="button" class="btn btn-danger btn-sm" onclick="if(confirm('Are you Sure?You want to delete this?')){
                            event.preventDefault();
                            document.getElementById('delete-form-{{$bfast->id }}').submit();
                          }else{
                            event.preventDefault();
                          }"><i class="material-icons">delete</i></button>
                        </td>


                      </tr>
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
  <script>
      $(document).ready(function() {
      $('#table').DataTable();
    } );
  </script>
@endpush
