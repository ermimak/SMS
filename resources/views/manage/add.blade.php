@extends('layouts.app')

@section('content')
<div class="w-4/5 m-auto text-center">
    <div class="py-15 border-b">
        <h1 class="text-5xl">
            ADD
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
    <form action="/add" method="POST" enctype="multipart/form-data">
        @csrf
        <div>
        <input id="name" type="text" class=" bg-transparent block border-b-2 w-max h-20 outline-none @error('name')@enderror"
        name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Full Name">
        @error('name')
                        <p class="text-red-500 text-xs italic mt-4">
                            {{ $message }}
                        </p>
                        @enderror
        </div>
        <div>
            <input id="email" type="email" placeholder="E-mail"
                            class="bg-transparent block border-b-2 w-full h-20 outline-none @error('email') @enderror" name="email"
                            value="{{ old('email') }}" required autocomplete="email">

                        @error('email')
                        <p class="text-red-500 text-xs italic mt-4">
                            {{ $message }}
                        </p>
                        @enderror
        </div>
        <div>
            <input id="password" type="password" placeholder="Password"
                            class="bg-transparent block border-b-2 w-full h-20 outline-none @error('password')  @enderror" name="password"
                            required autocomplete="new-password">

                        @error('password')
                        <p class="text-red-500 text-xs italic mt-4">
                            {{ $message }}
                        </p>
                        @enderror
        </div>
        <div>
            <input id="password-confirm" type="password" placeholder="Re Enter Password" class="bg-transparent block border-b-2 w-max h-20 outline-none"
                            name="password_confirmation" required autocomplete="new-password">
        </div>

        <input type="text" name="role" placeholder="role" required
        class="bg-transparent block border-b-2 w-max h-20 outline-none">
        <input type="text" name="company_name" placeholder="Company Name"
        class="bg-transparent block border-b-2 w-full h-20 outline-none">
        <textarea name="description" placeholder="Description about company" class="py-20 outline-none bg-transparent block border-b-2 w-full h-30"></textarea>
        <input type="number" name="phone" placeholder="Phone" required
        class="bg-transparent block border-b-2 w-max h-20 outline-none">
        <input type="number" name="age" placeholder="Age" required
        class="bg-transparent block border-b-2 w-max h-20 outline-none">
        <input type="text" name="address" placeholder="Address" required
        class="bg-transparent block border-b-2 w-max h-20 outline-none">
        <input type="text" name="sex" placeholder="Gender" required
        class="bg-transparent block border-b-2 w-max h-20 outline-none">
        <textarea type="text" name="qualification" placeholder="qualification for Engineers"
        class="bg-transparent block border-b-2 w-max h-20 outline-none"></textarea>

        <button type="submit" class="uppercase outline-none bg-blue-500 text-gray-100 text-lg mt-4 py-4 px-8 rounded-3xl">
            {{ __('Register') }}
        </button>
    </form>

</div>

@endsection
