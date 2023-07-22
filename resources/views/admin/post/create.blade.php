@extends('layouts.app')
 @section('content')
  <div class="container">
   <div class="row justify-content-center">
     <div class="col-md-10">
       <div class="card" >
        <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Add Post</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="{{route('post.store')}}" method="post" enctype="multipart/form-data">
              @csrf
            <div class="card-body">
              <div class="form-group">
                <label for="exampleInputEmail1">Post Title</label>
                <input type="text" class="form-control" name="title" placeholder="Post Title" required>
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Choose Category</label>
                <select name="subcategory_id" id="" class="form-control" required> 
                  <option disabled selected >Example</option>
                  @foreach ($category as $cat)
                  @php
                      $subcategory=DB::table('subcategory')->where('category_id',$cat->id)->get();
                  @endphp
                  <option disabled class="text-info">{{$cat->category_name}}</option>
                  @foreach ($subcategory as $sub)
                  <option value="{{$sub->id}}">---{{$sub->subcategory_name}}</option>  
                   @endforeach
                    @endforeach
                </select>
              </div>
              {{-- <div class="form-group">
                  <label for="exampleInputPassword1">Choose SubCategory</label>
                  <select name="subcategory_id" id="" class="form-control" required> 
                    <option value="">Example</option>
      
                  </select>
                </div> --}}

                <div class="form-group">
                  <label for="exampleInputEmail1">Post Date</label>
                  <input type="date" class="form-control" name="post_date" placeholder="Post Date" required>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Tags</label>
                  <input type="text" class="form-control" name="tag" placeholder="Post Tag">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Description</label>
                  <textarea name="description" rows="4" class="form-control" placeholder="Description" required></textarea>
                </div>




              <div class="form-group">
                <label for="exampleInputFile">File input</label>
                <div class="input-group">
                  <div class="custom-file">
                    <input type="file" class="custom-file-input" name="image">
                    <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                  </div>
                  <div class="input-group-append">
                    <span class="input-group-text">Upload</span>
                  </div>
                </div>
              </div>
              <div class="form-check">
                <input type="checkbox" class="form-check-input" name="status" value="1">
                <label class="form-check-label" for="exampleCheck1">Publish Now</label>
              </div>
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
          </form>
          </div>



         </div>
     </div>
    </div>
</div>
 @endsection