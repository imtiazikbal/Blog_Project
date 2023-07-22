
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
<div class="card" style="width: 18rem;">
    <div class="card-body">
     <div class="table table-responsive-lg">
    
     </div>
    </div>
  </div>
  
@endsection

