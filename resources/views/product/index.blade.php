@extends('layouts.app')

@section('content')
<div class="w-4/5 m-auto text-center">
    <div class="py-15 border-b border-gray-200">
        <h1 class="text-5xl">
            New Products
        </h1>
    </div>
</div>
 @if (session()->has('message'))
    <div class="w-4/5 m-auto mt-5 pl-3">
        <p class="w-2/6 text-gray-50  bg-green rounded-2xl py-4 px-8">
            {{session()->get('message')}}
        </p>
    </div>
 @endif
@if (Auth::check())
    <div class="pt-15 w-4/5 m-auto">
        <a href="/product/create"
        class="bg-green-500 uppercase bg-transparent text-gray-100 text-xs font-extrabold  py-3 rounded-3xl">
        Add Product</a>
    </div>
@endif

@foreach ($posts as $post )
    <div class="sm:grid grid-cols-2 gap-20 w-4/5 mx-auto py-15 border-b border-gray-200">
        <div>
        <span>
            <img src="images/{{$post->image_path}}" alt="{{$post->slug}}">
        </span>
        </div>
        <div>
            <h2 class="text-gray-700 font-bold text-5xl pb-4">
                {{$post->title}}
            </h2>
            <span class="text-gray-500">
                By <span class="font-bold italic text-gray-800">Moha Drinks</span>, Created on {{ date('jS M Y', strtotime($post->updated_at))}}
            </span>

            <p class="text-xl text-gray-700 pt-8 pb-10 leading-8 font-light">
                {{$post->description}}
            </p>
            @if (Auth::check())
            <a href="/product/{{$post->id}}" class="uppercase bg-blue-500 text-gray-80 text-s font-extrabold py-3 px-8 rounded-3xl">
                Check out</a>
            @endif

            @if (isset(Auth::user()->id) && Auth::user()->id== $post->user_id)
                <span class="float-right">
                    <a href="/product/{{$post->id}}/edit"
                        class="text-gray-700 bg bg-red-300 button  btn-secondary font-extrabold rounded-3xl py-3 px-5 italic">
                        Edit</a>
                </span>
            @endif
        </div>
    </div>

@endforeach


@endsection
