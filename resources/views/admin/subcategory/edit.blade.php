{{-- <x-app-layout>
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    </head>
    <x-slot name="header">
        <a href="{{route('category.index')}}"><h2 class="btn btn-info">
            {{ __('All Category') }}
        </h2></a>
       
        
        </h2>
    </x-slot>

   <div class="container">
    <div class="row">
        <form action="{{route('category.update',$data->id)}}" method="post">
            @csrf
            <div class="form-group">
              <label for="exampleInputEmail1">Category Name</label><br><br>
              <input type="text" class="form-control" name="category_name" value="{{$data->category_name}}" required>
         
            </div>
        
            <br><br>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
      



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>




</x-app-layout> --}}






@extends('layouts.app')
@section('content-action')
<a href="" class="btn btn-info">Add new</a>

@endsection
@section('content')

<div class="card">
  <div class="card-body">
   <div class="table table-responsive-lg">
   
   </div>
  </div>
</div>
<div class="card" >
    <div class="card-body">
     
        <head>
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
        </head>
            <h2>
                <a href="{{route('subcategory.index')}}" class="btn btn-info">All SubCategory</a>
            </h2>
            <form action="{{route('subcategory.update',$data->id)}}" method="post">
                @csrf
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Choose Category </label>
                    <select class="form-control" id="category_id" name="category_id">
                       @foreach ($categories as $row)
                       <option value="{{$row->id}}" @if ($row->id==$data->category_id) selected @endif>{{$row->category_name}}</option>      
                       @endforeach
                   </select>    
             </div>
                 <div class="mb-3">
                   <label for="exampleInputEmail1" class="form-label">SubCategory Name</label>
                   <input type="text" class="form-control @error('subcategory_name') is-invalid @enderror" id="subcategory_name" name="subcategory_name" value="{{ $data->subcategory_name }}" placeholder="SubCategory Name" required >
                     <br><br>
                     @error('subcategory_name')
                  <div class="alert alert-danger">{{ $message }}</div>
              @enderror    
            </div>






            
                <br><br>
                <button type="submit" class="btn btn-primary">Update</button>
              </form>

    
          <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  
    </div>
  </div>
  
@endsection