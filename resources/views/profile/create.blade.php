@extends('layouts.app')

@section('content')
<div class="w-4/5 m-auto text-center">
    <div class="py-15 border-b">
        <h1 class="text-5xl">
            Enter
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
    <form action="/" method="POST" enctype="multipart/form-data">
        @csrf
        @method('GET')
        <input type="text" name="role" placeholder="role"
        class="bg-transparent block border-b-2 w-max h-20 outline-none">
        <input type="text" name="company_name" placeholder="Company Name"
        class="bg-transparent block border-b-2 w-full h-20 outline-none">
        <textarea name="description" placeholder="Description about company" class="py-20 outline-none bg-transparent block border-b-2 w-full h-30"></textarea>
        <input type="number" name="phone" placeholder="Phone"
        class="bg-transparent block border-b-2 w-max h-20 outline-none">
        <input type="number" name="age" placeholder="Age"
        class="bg-transparent block border-b-2 w-max h-20 outline-none">
        <input type="text" name="address" placeholder="Address"
        class="bg-transparent block border-b-2 w-max h-20 outline-none">
        <input type="text" name="sex" placeholder="Gender"
        class="bg-transparent block border-b-2 w-max h-20 outline-none">
        <textarea type="text" name="qualification" placeholder="qualification"
        class="bg-transparent block border-b-2 w-max h-20 outline-none"></textarea>

        <button type="submit" class="uppercase outline-none bg-blue-500 text-gray-100 text-lg mt-4 py-4 px-8 rounded-3xl">
            Submit
        </button>
    </form>

</div>

@endsection
