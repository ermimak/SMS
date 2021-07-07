@extends('layouts.app')

@section('content')
<div class="w-4/5 m-auto text-center">
    <div class="py-15 border-b">
        <h1 class="text-5xl">
            Add Product
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
    <form action="/product" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="text" name="title" placeholder="Product name"
        class="bg-transparent block border-b-2 w-full h-20 outline-none">
        <textarea name="description" placeholder="Description" class="py-20 outline-none bg-transparent block border-b-2 w-full h-30"></textarea>
        <input type="number" name="cost" placeholder="Cost"
        class="bg-transparent block border-b-2 w-full h-20 outline-none">
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
</div>

@endsection
