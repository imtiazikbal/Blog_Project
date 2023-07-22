{{-- <x-app-layout>
    <head>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    </head>

    <x-slot name="header">     
        <h2>
            <a href="{{route('category.index')}}" class="btn btn-info">All Category</a>
        </h2>
        <h2>
            <a href="{{route('category.create')}}" class="btn btn-info">Add Category</a>
        </h2>
    </x-slot>
    <form method="post" action="{{route('category.store')}}">
        @csrf
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Category Name</label>
          <input type="text" class="form-control @error('category_name') is-invalid @enderror" id="category_name" name="category_name" value="{{old('category_name')}}" placeholder="Category Name" required >
         </div>

         <br><br>
         @error('category_name')
         <div class="alert alert-danger">{{ $message }}</div>
     @enderror     
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</x-app-layout>





 --}}


 


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
       


            <form method="post" action="{{route('category.store')}}">
                @csrf
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Category Name</label>
                  <input type="text" class="form-control @error('category_name') is-invalid @enderror" id="category_name" name="category_name" value="{{old('category_name')}}" placeholder="Category Name" required >
                 </div>
        
                 <br><br>
                 @error('category_name')
                 <div class="alert alert-danger">{{ $message }}</div>
             @enderror     
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>


          
    
          <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  
    </div>
  </div>
  
@endsection