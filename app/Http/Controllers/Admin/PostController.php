<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Subcategory;
use App\Models\Post;
use Illuminate\Support\Str;
use DB;
use Auth;
use Image;
class PostController extends Controller
{
   function create() {
      
               $category=Category::all();
               //  $subcategory=Subcategory::all();
                  return view('admin.post.create',compact('category'));
                  
   }

   //__Store method with validation__//

   function store(Request $request) {
  
                     $validated = $request->validate([

                        'subcategory_id' => 'required',
                        'post_date' => 'required',
                        'title' => 'required',
                        'tags' => 'required',
                        'description' => 'required',
        
     ]);
 
     
    $categoryid=DB::table('subcategory')->where('id',$request->subcategory_id)->first()->category_id;
 
    
                  $data=array();

                  $data['category_id']=$categoryid;
                  $data['subcategory_id']=$request->subcategory_id;
                  $data['post_date']=$request->post_date;
                  $data['title']=$request->title;
                  $data['tag']=$request->tag;
                  $data['description']=$request->description;
                  $data['user_id']=Auth::id();
                  $data['slug']=Str::of($request->title)->slug('-');
                  $data['status']=$request->status;
                  $data['image']=$request->image;
               
                  return response()-json($data);
                        
                  }
     
 }



























// if ($photo) {
//    $photoname=$slug.'.'.$photo->getClientOriginalExtension();
//    Image::make($photo)->resize(600,400)->save('public/media/'.$photoname);
//    $data['image']='public/media/'.$photoname;
//    DB::table('posts')->insert($data);
//     return redirect()->back()->with('message','Category Updated');



   
// }












// $request->validate([

//    'subcategory_id' => 'required',
//    'post_date' => 'required',
//    'title' => 'required',
//    'tags' => 'required',
//    'description' => 'required',
//     'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',

//     // Add validation rules for other form fields as needed
// ]);

// // Handle image upload
// $imagePath = $request->file('image')->store('images', 'public');
// //categoryId with queryBuilder__//
// $categoryid=DB::table('subcategory')->where('id',$request->subcategory_id)->first()->category_id;

// // Save the form data to the database

// $post                   = new Post;
// $post->category_id      = $request->category_id;
// $post->subcategory_id = $request->subcategory_id;
// $post->post_date = $request->post_date;
// $post->title = $request->title;
// $post->tag = $request->tag;
// $post->description = $request->description;
// $post->user_id = $request->Auth::id();
// $post->slug = $request->slug;
// $post->status = $request->status;
// $post->subcategory_slug = Str::of($request->subcategory_name)->slug('-');


// dd($request->all());
// $post->save();



// return redirect()->back()->with('success', 'Form data saved successfully!');