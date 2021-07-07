<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Information;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {

        return view('profile.index')->with('information',Information::where('id',$id)->first());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function add(){

         return view('manage.add');

    }
    public function create()
    {
        return view('manage.index')->with('product',Post::orderBy('updated_at','DESC')->get());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'role'=> 'required',
            'company_name'=> 'required',
            'description'=>'required',
            'phone'=> 'required',
            'age'=> 'required',
            'address'=> 'required',
            'sex'=> 'required',
            'qualification'=> 'required',
        ]);

        Information::create([
            'role'=>$request->input('role'),
            'company_name'=>$request->input('company_name'),
            'description'=>$request->input('description'),
            'phone'=>$request->input('phone'),
            'age'=>$request->input('age'),
            'address'=>$request->input('address'),
            'sex'=>$request->input('sex'),
            'qualification'=>$request->input('qualification'),
            'user_id'=> auth()->user()->id

        ]);

        return redirect('/profile')
        ->with('message','You added new information');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('profile.show')->with('information',Information::where('id',$id)->first())
        ->with('user',User::where('id',$id)->first());
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        return view('profile.edit')->with('information',Information::where('id',$id)->first())
        ->with('user',User::where('id',$id)->first());

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
