<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('product.index')->with('posts',Post::orderBy('updated_at','DESC')->get());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('product.create');
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
            'title'=> 'required',
            'description'=>'required',
            'image'=> 'required|mimes:png,jpg,jpeg|max:4500'
        ]);
        // name the new image
        $newImageName = uniqid().'-'.$request->title.'.'.$request->image->extension();
        // move the image into a folder
        $request->image->move(public_path('images'),$newImageName);

        Post::create([
            'title'=>$request->input('title'),
            'slug'=>$request->input('title'),
            'description'=>$request->input('description'),
            'image_path'=>$newImageName,
            'user_id'=> auth()->user()->id,
            'cost'=>$request->input('cost')
        ]);

        return redirect('/product')
        ->with('message','You added new product');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('product.show')->with('post',Post::where('id',$id)->first());
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('product.edit')->with('post',Post::where('id',$id)->first());
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
        $request->validate([
            'title'=> 'required',
            'description'=>'required',
            'image'=> 'required|mimes:png,jpg,jpeg|max:4500'
        ]);
        // name the new image
        $newImageName = uniqid().'-'.$request->title.'.'.$request->image->extension();
        // move the image into a folder
        $request->image->move(public_path('images'),$newImageName);

        Post::where('id',$id)->update([
            'title'=>$request->input('title'),
            'slug'=>$request->input('title'),
            'description'=>$request->input('description'),
            'image_path'=>$newImageName,
            'user_id'=> auth()->user()->id,
            'cost'=>$request->input('cost')
        ]);

        return redirect('/product')
        ->with('message','You updated the product!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::where('id', $id);
        $post->delete();
        return redirect('/product')
        ->with('message','You deleted the product!');
    }
}
