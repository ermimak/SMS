@extends('layouts.app')

@section('content')


<div class="w-4/5 m-auto pt-20">
    <span class="text-gray-500">
         <span class="font-bold italic text-gray-800">{{$information->id}}</span>,
    </span>
    <p class="text-xl text-gray-700 pt-8 pb-10 leading-8 font-light">
        @method('PUT')
        {{$information->role}}
    </p>

</div>

@endsection
