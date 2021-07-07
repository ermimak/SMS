@extends('layouts.app')

@section('content')
<div class="w-4/5 m-auto text-center">
    <div class="py-15 border-b">
        <h1 class="text-5xl">
            {{$post->title}}
        </h1>
    </div>
</div>

<div class="w-4/5 m-auto pt-20">
    <span class="text-gray-500">
        By <span class="font-bold italic text-gray-800">Moha Drinks</span>, Created on {{ date('jS M Y', strtotime($post->updated_at))}}
    </span>
    <p class="text-xl text-gray-700 pt-8 pb-10 leading-8 font-light">
        {{$post->description}}
    </p>
    <span class="text-bold">
        ${{$post->cost}}
    </span>
    <a href="" class="uppercase bg-blue-500 text-gray-80 text-s font-extrabold py-3 px-8 rounded-3xl">
        Order
        </a>

</div>

@endsection
