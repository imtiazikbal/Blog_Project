{{-- 
@extends('layouts.app')
@section('title','User List')
@section('content-header','user-list')
@section('content-action')
<a href="{{route('user.create')}}" class="btn btn-info">Add new</a>
@endsection
@section('content')
<div class="card">
  <div class="card-body">
   <div class="table table-responsive-lg">
    <a href="{{route('user.create')}}" class="btn btn-info">Add new</a>
   </div>
  </div>
</div>

<div class="card" >
    <div class="card-body">
     <div class="table table-responsive-lg">
      <form>
        <div class="mb-3">
          <label for="name" class="form-label">Name</label>
          <input type="email" class="form-control" id="name" name="name" placeholder="Enter Your Name" value="{{old('name')}}" required>
       
        @if($errors->has('name'))
        <span class="alert alert-danger">
            <strong>{{$errors->first('name') }}</strong>
        </span>
        @endif
      </div>

      <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" id="email" name="email" placeholder="Enter Your Email" value="{{old('email')}}" required>
     
      @if($errors->has('email'))
      <span class="alert alert-danger">
          <strong>{{$errors->first('email') }}</strong>
      </span>
      @endif
    </div>

    <div class="mb-3">
      <label for="password" class="form-label">Password</label>
      <input type="password" class="form-control" id="password" name="password" placeholder="Enter Your Name" value="{{old('password')}}" required>
   
    @if($errors->has('password'))
    <span class="alert alert-danger">
        <strong>{{$errors->first('password') }}</strong>
    </span>
    @endif
  </div>




  <div class="mb-3">
    <label for="confirm-password" class="form-label">Confirm Password</label>
    <input type="password" class="form-control" id="confirm-password" name="confirm-password" placeholder="Confirm Password"  required>
</div>









      
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
     </div>
    </div>
  </div>
@endsection
 --}}





 
@extends('layouts.app')
@section('title','User List')
@section('content-header','user-list')
@section('content-action')
<a href="{{route('user.create')}}" class="btn btn-info">Add new</a>

@endsection
@section('content')

<div class="card">
  <div class="card-body ml-10">
   <div class="table table-responsive-lg">
    <a href="{{route('user.create')}}" class="btn btn-info">Add new</a>
   </div>
  </div>
</div>
<div class="card ml-10" >
  {{-- <p class="login-box-msg">@include('massege.message')</p> --}}
  <form class="row g-3 needs-validation" action="{{route('user.store')}}" novalidate>
    @csrf
   
     <div class="mb-3">
          <label for="name" class="form-label">Name</label>
          <input type="name" class="form-control" id="name" name="name" placeholder="Enter Your Name" value="{{old('name')}}" required>
       
        @if($errors->has('name'))
        <span class="alert alert-danger">
            <strong>{{$errors->first('name') }}</strong>
        </span>
        @endif
      </div> 
    
      <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" id="email" name="email" placeholder="Enter Your Email" value="{{old('email')}}" required>
     
      @if($errors->has('email'))
      <span class="alert alert-danger">
          <strong>{{$errors->first('email') }}</strong>
      </span>
      @endif
    </div>

    <div class="mb-3">
      <label for="password" class="form-label">Password</label>
      <input type="password" class="form-control" id="password" name="password" placeholder="Enter Your Name" value="{{old('password')}}" required>
   
    @if($errors->has('password'))
    <span class="alert alert-danger">
        <strong>{{$errors->first('password') }}</strong>
    </span>
    @endif
  </div>




  <div class="mb-3">
    <label for="confirm-password" class="form-label">Confirm Password</label>
    <input type="password" class="form-control" id="confirm-password" name="confirm-password" placeholder="Confirm Password"  required>
</div>
  
  
    <div class="col-12">
      <button class="btn btn-primary" type="submit"><i class="fa fa-plus"></i>Save</button>
      <a href="{{route('user.index')}}" class="btn btn-danger " ><i class="fa-solid fa-xmark"></i>Close</a>
     

    </div>
  </form>
  </div>

  
@endsection

