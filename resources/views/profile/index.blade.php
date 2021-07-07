<div class="sm:grid grid-cols-2 gap-20 w-4/5 mx-auto py-15 border border-gray-300">
    <div>
        <span><img src="{{URL('images/drop.jpg')}}" alt=""></span>
    </div>
    <div>
        <h2 class="text-gray-700 font-bold text-4xl pb-4">
            <span>{{ Auth::user()->name }}</span>
        </h2>
        <span class="text-gray-500">
            <span class="font-bold italic text-gray-800">
                {{Auth::user()->email}}</span>

        </span>
        <p class="text-xl text-gray-700 pt-8 pb-10 leading-8 font-light">
            <span></span>
        </p>

        <a href="/profile/{{Auth::user()->id}}/edit" class="uppercase bg-green-500 text-gray-80 text-s font-extrabold py-3 px-8 rounded-3xl">
            Edit</a>
            @if (Auth::user()->name == 'Ermias Mekonnen')
            <a href="/profile/create" class="uppercase bg-green-500 text-gray-80 text-s font-extrabold py-3 px-8 rounded-3xl">
                Add</a>
            @endif

    </div>
</div>
