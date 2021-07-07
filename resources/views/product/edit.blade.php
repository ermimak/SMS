@extends('layouts.app')

@section('content')
<div class="w-4/5 m-auto text-center">
    <div class="py-15 border-b">
        <h1 class="text-5xl">
            Edit
        </h1>
    </div>
</div>
@if ($errors->any())
    <div class="w-4/5 m-auto">
        <ul>
            @foreach ($errors->all() as $error )
                <li class="w-1/5 mb-4 text-gray-50 bg-red-600 rounded-2xl py-4 px-7">
                    {{$error}}
                </li>
            @endforeach
        </ul>
    </div>
@endif
<div class="w-4/5 m-auto pt-20">
    <form action="/product/{{$post->id}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <input type="text" name="title" value="{{$post->title}}"
        class="bg-transparent block border-b-2 w-full h-20 outline-none">
        <input type="number" name="cost" value="{{$post->cost}}"
        class="bg-transparent block border-b-2 w-full h-20 outline-none">
        <textarea name="description" placeholder="Description" class="py-20 outline-none bg-transparent block border-b-2 w-full h-30">{{$post->description}}</textarea>
        <div class="bg-grey-lighter pt-15">
            <label class="w-44 flex flex-col items-center p-3 bg-white-rounded-lg shadow-lg uppercase">
                <span class="mt-2 text-base leading-normal">
                    Select picture
                </span>
                <input type="file" name="image" class="hidden">
            </label>
        </div>
        <button type="submit" class="uppercase outline-none bg-blue-500 text-gray-100 text-lg mt-4 py-4 px-8 rounded-3xl">
            Post
        </button>
    </form>
    <span class="float-right">
        <form action="/product/{{$post->id}}" method="POST">
            @csrf
            @method('delete')
            <button class="text-red-500 outline-none rounded-2xl align-content-md-center py-3 px-6">Delete</button>
        </form>
    </span>
</div>

@endsection
