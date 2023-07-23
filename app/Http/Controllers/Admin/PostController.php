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

        //__Index Method_//
        function index(){
            $posts=Post::all();
            return view('admin.post.index',compact('posts'));

            
        }


    //__ Create Post__//
    function create() {
      
        $category=Category::all();
        //  $subcategory=Subcategory::all();
           return view('admin.post.create',compact('category'));
           
}
//____ store Method__//
public function store(Request $request) {
    $validated = $request->validate([

        'subcategory_id' => 'required',
        'title' => 'required',

]);


$categoryid=DB::table('subcategory')->where('id',$request->subcategory_id)->first()->category_id;
$slug=Str::of($request->title)->slug('-');

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
                

                 $photo=$request->image;

                 if ($photo) {
                 $photoname=$slug.'.'.$photo->getClientOriginalExtension();
                // Image::make($photo)->resize(600,400)->save('public/media/'.$photoname);
                 $data['image']='public/media/'.$photoname;
                 DB::table('posts')->insert($data);
                 return redirect()->back()->with('message','Post Created');

                }


}
}
