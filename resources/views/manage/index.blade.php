@extends('layouts.app')

@section('content')
@if (session()->has('message'))
    <div class="w-4/5 m-auto mt-5 pl-3">
        <p class="w-2/6 text-gray-50  bg-green rounded-2xl py-4 px-8">
            {{session()->get('message')}}
        </p>
    </div>
 @endif
<div class="gap-20  mx-auto py-15">
    <a href="/add/create" class="uppercase bg-green-500 text-gray-80 text-s font-extrabold py-3 px-8 rounded-3xl">
        Add Agent</a>
    <a href="/add/create" class="uppercase bg-green-500 text-gray-80 text-s font-extrabold py-3 px-8 rounded-3xl">
        Add Supplier</a>
    <a href="/add/create" class="uppercase bg-green-500 text-gray-80 text-s font-extrabold py-3 px-8 rounded-3xl">
        Add Driver</a>
    <a href="/add/create" class="uppercase bg-green-500 text-gray-80 text-s font-extrabold py-3 px-8 rounded-3xl">
        Add Reception</a>
    <a href="/add/create" class="uppercase bg-green-500 text-gray-80 text-s font-extrabold py-3 px-8 rounded-3xl">
        Add Senior Engineer</a>

</div>
    <div class="row">
        <div class="col-sm-12 m-auto pt-20">
            <div class="card">
                <div class="card-header">
                    <h3>Ordered product</h3>
                </div>
                <div class="card-body m-md-auto">
                    <div class="table-responsive dt-responsive">
                        <table id="orders" class="table table-bordered  nowrap">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Price</th>
                                    <th>Company</th>
                                    <th>Validate</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($product as $product)
                                <tr>
                                        <td>{{$product->title}}</td>
                                        <td>{{$product->cost}}</td>
                                        <td></td>
                                        <td>
                                            <a href="">
                                                <button class="button">
                                                    Accept
                                                </button>
                                            </a>
                                            <a href="">
                                                <button class="button">
                                                    Decline
                                                </button>
                                            </a>
                                        </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
