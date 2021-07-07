@extends('layouts.app')

@section('content')
<style>
   .background-image
{
    background-image:url('images/sunset.jpg');
    background-position: center center;
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: cover;
    height: 500px;
}
</style>
    <div class="background-image grid grid-cols-1 m-auto">
        <div class="flex text-gray-100 pt-100">
            <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block text-center">
                <h1 class="sm:text-white text-5xl uppercase font-bold text-shadow-md pb-14">
                    welcome to sdmds!
                </h1>
            </div>
        </div>
    </div>
    @if (Auth::check())
        <div class="w-4/5 m-auto text-center">
            <div class="py-15 border-b border-gray-200">
                <h1 class="text-5xl">
                    profile
                </h1>
            </div>
        </div>

        @include('profile.index')
@endif
    <div class="sm:grid grid-cols-2 gap-20 w-25 mx-auto py-15 border-b border-gary-200">
        <div class="m-auto right ">
            <img src="{{ URL('images/coca.jpg')}}" width="250" height="400" alt="drinks">
        </div>
        <div class="m-auto sm:m-auto text-left w-4/5 block">
            <h2 class="text-3xl font-extrabold text-gray-600">
                wanna drink?
            </h2>
            <p class="py-8 text-gray-500 text-s">
                Order any drink and we deliver it instantaneously.
            </p>
            <p class="font-extrabold text-gray-700 text-s pb-9">
                get it now!!!
            </p>
            <a href="/product" class="uppercase bg-blue-500 text-gray-80 text-s font-extrabold py-3 px-8 rounded-3xl">
            Check out</a>
        </div>
    </div>

@endsection
