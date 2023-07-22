<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Models\User;

use DB;
class UserController extends Controller

{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       return view('users.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('users.create');
     
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>['required','string'],
            'email'=>['required','string'],
            'password'=>['required'],
        ]);
       $user=User::create([
            'name'=> $request->name,
            'email'=> $request->email,
            'password'=> $request->password,
        ]);
        if(!$user){
            return redirect()->back()->with('error','not success');
        }
        return redirect()->route(users.create)->with('success',' successfully save');




        // $request->validate([
         
        //     'name' => 'required',
        //     'email'=>'required',
           
        //     'password'=>'required',

        // ]);
        // $data=array(
          
        //     'name'=>$request->name,
       
        //     'email'=>$request->email,
        //     'password'=>$request->password,
        // );

        // DB::table('users')->insert($data);
        // return redirect()->back()->with('success','successfully inserted');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
