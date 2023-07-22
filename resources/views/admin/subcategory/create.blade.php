@extends('layouts.app')
 @section('content-action')
 @endsection
 @section('content')
 <div class="card" >
     <div class="card-body">
         <head>
             <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
         </head>
             <h2>
               <a href="{{route('category.index')}}" class="btn btn-info">All SubCategory</a>
             </h2>
             <form method="post" action="{{route('subcategory.store')}}">
                 @csrf
                 <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Choose Category </label>
                    <select class="form-control" id="category_id" name="category_id">
                       @foreach ($category as $row)
                       <option value="{{$row->id}}">{{$row->category_name}}</option>
                           
                       @endforeach
                    
                    </select>    
             </div>


                 <div class="mb-3">
                   <label for="exampleInputEmail1" class="form-label">SubCategory Name</label>
                   <input type="text" class="form-control @error('subcategory_name') is-invalid @enderror" id="subcategory_name" name="subcategory_name" value="{{old('subcategory_name')}}" placeholder="SubCategory Name" required >
                     <br><br>
                     @error('subcategory_name')
                  <div class="alert alert-danger">{{ $message }}</div>
              @enderror    
            </div>
                 <button type="submit" class="btn btn-primary">Submit</button>
               </form>
 
 
           
     
           <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
   
     </div>
   </div>
   
 @endsection