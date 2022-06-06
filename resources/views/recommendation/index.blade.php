@extends('layouts.app')

@section('content')
    <div class="flex justify-center">
        <div class="w-10/12 bg-white p-6 rounded-lg">
            Recommendation
            <h2 class="text-xl py-5">
                Choose Your usage and category
            </h2>
            <div class="flex flex-row">
                <div class="card w-100 bg-base-100 shadow-xl px-8 m-4 ">
                    <figure><img src="https://api.lorem.space/image/shoes?w=400&h=225" alt="Shoes" /></figure>
                    <div class="card-body">
                        <h2 class="card-title">Choose Usage!</h2>
                        <p>If a dog chews shoes whose shoes does he choose?</p>
                        <div class="card-actions justify-end">
                            <select class="select select-bordered w-full max-w-xs">
                                <option disabled selected>Choose Your usage?</option>
                                <option>Work</option>
                                <option>Multimedia</option>
                                <option>Gaming</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="divider lg:divider-horizontal">And</div>
                <div class="card w-100 bg-base-100 shadow-xl px-8 m-4 ">
                    <figure><img src="https://api.lorem.space/image/shoes?w=400&h=225" alt="Shoes" /></figure>
                    <div class="card-body">
                        <h2 class="card-title">Choose Category!</h2>
                        <p>If a dog chews shoes whose shoes does he choose?</p>
                        <div class="card-actions justify-end">
                            <select class="select select-bordered w-full max-w-xs">
                                <option disabled selected>Choose Your Category?</option>
                                <option>Laptop</option>
                                <option>Desktop</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <a class="btn btn-info px-20 m-10" href="{{ route('recommendation.list') }} "> Submit</a>
            </div>
        </div>
    </div>
@endsection
