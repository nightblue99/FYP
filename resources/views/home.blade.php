@extends('layouts.app')

@section('content')
    <div class="flex justify-center">
        <div class="w-10/12 bg-white p-6 rounded-lg">
            <div class="hero min-h-screen"
                style="background-image: url(https://api.lorem.space/image/fashion?w=1000&h=800);">
                <div class="hero-overlay bg-opacity-60"></div>
                <div class="hero-content text-center text-neutral-content">
                    <div class="max-w-md">
                        <h1 class="mb-5 text-5xl font-bold">Welcome to Computer Advisor</h1>
                        <p class="mb-5">Provident cupiditate voluptatem et in. Quaerat fugiat ut assumenda
                            excepturi exercitationem quasi. In deleniti eaque aut repudiandae et a id nisi.</p>
                        <a class="btn btn-primary" href="{{ route('recommendation') }} ">Get Started</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
