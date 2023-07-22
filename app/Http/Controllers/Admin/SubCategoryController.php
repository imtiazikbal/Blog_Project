<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Subcategory;
use Illuminate\Support\Str;
use DB;

class SubCategoryController extends Controller
{
    //__create mehod__//
function create() {

    $category = DB::table('categories')->get();
    return view('admin.subcategory.create',compact('category'));
    
    
}

function store(Request $request) {
    

    $validated             =  $request->validate([
        'subcategory_name' => 'required|unique:subcategory|max: 255',
        'category_id'      => 'required',
       
    ]);


    $category                   = new Subcategory;
    $category->category_id      = $request->category_id;
    $category->subcategory_name = $request->subcategory_name;
    $category->subcategory_slug = Str::of($request->subcategory_name)->slug('-');
    $category->save();


    return redirect()->back()->with('message','Category Inserted');

}



//__subcategory Show Method__//

function index(){

    //  $category = DB::table('subcategory')->leftjoin('categories','subcategory.category_id','categories.id')->select('categories.category_name','subcategory.*')->get();

    $data=Subcategory::all();

    return view('admin.subcategory.index',compact('data'));
}


//__subcategory delete method__//
function destroy($id){
    //  $category=category::find($id);
     // $category->delete();
     Subcategory::destroy($id);
     return redirect()->back()->with('message','SubCategory Deleted');
}

//__edit method__//
function edit($id) {

    $categories=Category::all();
    $data=Subcategory::find($id);
    return view('admin.subcategory.edit',compact('categories','data'));
}



 //__update method__//
 function update(Request $request,$id){
    $category=Subcategory::find($id);
    // $category->update([
    //     $category->category_name=$request->category_name,
    //     $category->category_slug=Str::of($request->category_name)->slug('-'),

    // ]);
    $category->category_id = $request->category_id;
    $category->subcategory_name = $request->subcategory_name;
    $category->subcategory_slug = Str::of($request->subcategory_name)->slug('-');
    //$category->save();
dd($request->all());
   // return redirect()->route('admin.index');  
   //return redirect()->back()->with('message','Category Updated');

}

}




