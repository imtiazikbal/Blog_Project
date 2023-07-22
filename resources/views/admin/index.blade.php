@extends('layouts.app')
@section('content-action')
@endsection
@section('content')
<div class="card" >
    <div class="card-body">
        <head>
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
        </head>
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Category</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{route('category.index')}}">Home</a></li>
                <li class="breadcrumb-item active">Category Tables</li>
              </ol>
            </div>
          </div>
        </div>
      </section> 
  
      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-12">
                      <div class="card">
                        <div class="card-header">
                          <h3 class="card-title">All Categories</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                          <table id="example1" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                  <th>SL.</th>
                                  <th>Name</th>
                                  <th>Slug</th>
                                  <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                              @foreach ($category as $key=> $row)
                              <tr>
                                <th scope="row">{{++$key}}</th>
                                <td>{{  $row-> category_name}}</td>
                                <td>{{  $row-> category_slug}}</td>
                                <td>
                                    <a href="{{route('category.edit',$row->id)}}" class="btn btn-info">edit</a>
                                    <a href="{{route('category.delete',$row->id)}}" class="btn btn-info">delete</a>
                                </td>
                              </tr>
                              @endforeach
                            </tbody>
                            </tfoot>
                          </table>
                        </div>
                        <!-- /.card-body -->
                      </div>
                      <!-- /.card -->
      </div>
      </div>
     </div>
    </div>
   </div>
          <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  
@endsection







        {{-- <table class="table table-bordered">
            <thead>
              <tr>
                <th scope="col">SL.</th>
                <th scope="col">Name</th>
                <th scope="col">Slug</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($category as $key=> $row)
                    
              
              <tr>
                <th scope="row">{{++$key}}</th>
                <td>{{  $row-> category_name}}</td>
                <td>{{  $row-> category_slug}}</td>
                <td>
                    <a href="{{route('category.edit',$row->id)}}" class="btn btn-info">edit</a>
                    <a href="{{route('category.delete',$row->id)}}" class="btn btn-info">delete</a>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
     --}}
