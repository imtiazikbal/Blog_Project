<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Str;

use DB;


class CategpryController extends Controller
{
function index(){
    
    //__queryBuilder er maddome data show kora__//
  // $category=DB::table('categories')->get();

    //__Eloquent Warrem er maddome Mane Model  er maddome__//
   $category=Category::all();

    return view('admin.index',compact('category'));

}


//__ Create method_//
function create()  {
    return view('admin.create');
    
}
function store(Request $request){
    $validated = $request->validate([
        'category_name' => 'required|unique:categories|max:255',
       
    ]);
    $category= new Category;
    $category->category_name=$request->category_name;
    $category->category_slug=Str::of($request->category_name)->slug('-');
    $category->save();
    return redirect()->back()->with('message','Category Inserted');

    
}
  //__Edit Method__//

  function edit($id){
    //$data=DB::table('categories')->where('id',$id)->first();
    $data=category::find($id);
    return view('admin.edit',compact('data'));
}

 //__update method__//
 function update(Request $request,$id){
    $category=category::find($id);
    // $category->update([
    //     $category->category_name=$request->category_name,
    //     $category->category_slug=Str::of($request->category_name)->slug('-'),

    // ]);
    $category->category_name = $request->category_name;
    $category->category_slug = Str::of($request->category_name)->slug('-');
    $category->save();

   // return redirect()->route('admin.index');  
   return redirect()->back()->with('message','Category Updated');


}


 //__Delete method__//
 function destroy($id){
    //  $category=category::find($id);
     // $category->delete();
     category::destroy($id);
     return redirect()->back()->with('message','Category Deleted');
      

      
  }
}
