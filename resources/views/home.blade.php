@extends('layouts.app')

@section('content')
    <div class="flex justify-center">
        <div class="w-10/12 bg-white p-6 rounded-lg m=10">
            <div class="hero min-h-screen"
                style="background-image: url(https://cdn1.dotesports.com/wp-content/uploads/2021/11/03033405/Razer-Products-OGimage-1200x630-1.jpg);">
                <div class="hero-overlay bg-opacity-60"></div>
                <div class="hero-content text-center text-neutral-content">
                    <div class="max-w-md">
                        <h1 class="mb-5 text-5xl font-bold">Welcome to Computer Advisor</h1>
                        <p class="mb-5">PC gamers have more options than ever when it comes to computers. Prebuilt gaming desktops range from budget options to high-end custom or semi-custom versions. Users can also build their own gaming PC with parts of their choice and upgrade whenever they like. While desktops remain popular, many users are now choosing gaming laptops to play their games.</p>
                        <a class="btn btn-primary" href="{{ route('recommendation') }} ">Get Started</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
