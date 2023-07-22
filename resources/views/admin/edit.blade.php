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
                <a href="{{route('category.index')}}" class="btn btn-info">All Category</a>
            </h2>
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
  
    </div>
  </div>
  
@endsection