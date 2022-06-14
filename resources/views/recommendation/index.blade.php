@extends('layouts.app')

@section('content')
    <div class="flex justify-center">
        <div class="w-10/12 bg-white p-6 rounded-lg">
            Recommendation
                <h2 class="text-xl py-5">
                    Choose Your usage and category
                </h2>
                <div class="flex flex-col w-full border-opacity-50">
                    <div class="card w-100 bg-base-100 shadow-xl px-8 m-4 ">
                        <div class="carousel w-full max-h-0.7">
                            <div id="slide1" class="carousel-item relative w-full">
                                <img src="https://www.adorama.com/alc/wp-content/uploads/2021/03/video-editing-tips-beginners-feature.jpg?w=100&h=50&hash=8B7BCDC2"
                                    class="w-full" />
                                <div class="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2">
                                    <a href="#slide3" class="btn btn-circle">❮</a>
                                    <a href="#slide2" class="btn btn-circle">❯</a>
                                </div>
                            </div>
                            <div id="slide2" class="carousel-item relative w-full">
                                <img src="https://signal.avg.com/hubfs/Blog_Content/Avg/Signal/AVG%20Signal%20Images/9%20Ways%20to%20Boost%20Your%20Gaming%20Rig/How_to_Improve_Your_Gaming_PC_Performance-Hero.jpg?w=100&h=50&hash=500B67FB"
                                    class="w-full" />
                                <div
                                    class="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2">
                                    <a href="#slide1" class="btn btn-circle">❮</a>
                                    <a href="#slide3" class="btn btn-circle">❯</a>
                                </div>
                            </div>
                            <div id="slide3" class="carousel-item relative w-full">
                                <img src="https://www.hp.com/us-en/shop/app/assets/images/uploads/prod/laptop-vs-desktop-pc-11555346980300.jpg?w=100&h=50&hash=A89D0DE6"
                                    class="w-full" />
                                <div
                                    class="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2">
                                    <a href="#slide2" class="btn btn-circle">❮</a>
                                    <a href="#slide1" class="btn btn-circle">❯</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <h2 class="card-title">Choose Category!</h2>
                            <p>Using for?</p>
                            <label class="input-group py-8">
                                <span>Category</span>
                                <select class="select select-bordered w-full max-w-xs mt-3" name="category">
                                    <option disabled="disabled" selected="selected">Select Usage</option>
                                    <option value="gaming">gaming</option>
                                    <option value="multimedia">Multimedia</option>
                                    <option value="work">work</option>
                                </select>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="divider">And</div>
                <div class="card w-300 bg-base-100 shadow-xl px-8 m-4 ">
                    <div class="carousel w-full">
                        <div id="slideA" class="carousel-item relative w-full">
                            <img src="https://consumer-img.huawei.com/content/dam/huawei-cbg-site/en/mkt/plp/laptops/02list_01-v1.jpg?w=100&h=50&hash=8B7BCDC2"
                                class="w-full" />
                            <div class="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2">
                                <a href="#slideB" class="btn btn-circle">❮</a>
                                <a href="#slideB" class="btn btn-circle">❯</a>
                            </div>
                        </div>
                        <div id="slideB" class="carousel-item relative w-full">
                            <img src="https://www.hp.com/content/dam/sites/worldwide/desktops-all-in-ones/VCS_3_Mobile.png?w=100&h=50&hash=500B67FB"
                                class="w-full" />
                            <div class="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2">
                                <a href="#slideA" class="btn btn-circle">❮</a>
                                <a href="#slideA" class="btn btn-circle">❯</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <h2 class="card-title">Choose Category!</h2>
                        <p>Laptop OR Desktop?</p>
                        <label class="input-group py-8">
                            <span>Category</span>
                            <select class="select select-bordered w-full max-w-xs mt-3" name="category">
                                <option disabled="disabled" selected="selected">Select Category</option>
                                <option value="laptop">laptop</option>
                                <option value="desktop">Desktop</option>
                            </select>
                        </label>
                    </div>
                    <a class="btn btn-info px-20 m-10" href="{{ route('recommendation.list') }} "> Submit</a>
                </div>

        </div>
        <div>
        </div>
    </div>
    </div>
@endsection
