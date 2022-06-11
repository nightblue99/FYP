@extends('layouts.app')

@section('content')
    <div class="flex justify-center">
        <div class="w-10/12 bg-white p-6 rounded-lg">
            Dashboard
            <div class="overflow-x-auto w-full">
                <table class="table w-full">
                    <!-- head -->
                    <thead>
                        <tr>
                            <th>
                                <label>
                                    <input type="checkbox" class="checkbox" />
                                </label>
                            </th>
                            <th>Name</th>
                            <th>Description</th>
                            <th>Brand</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @if ($recommendations != null)
                            @foreach ($recommendations as $recommendation)
                                <tr>
                                    <th>
                                        <label>
                                            <input type="checkbox" class="checkbox" />
                                        </label>
                                    </th>
                                    <td>
                                        <div class="flex items-center space-x-3">
                                            <div class="avatar">
                                                <div class="mask mask-squircle w-12 h-12">
                                                    <img src="/tailwind-css-component-profile-2@56w.png"
                                                        alt="Avatar Tailwind CSS Component" />
                                                </div>
                                            </div>
                                            <div>
                                                <div class="font-bold"> {{ $recommendation->name }}</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="font-bold"> {{ $recommendation->specification }}</div>

                                    </td>
                                    <td>
                                        <div class="font-bold"> {{ $recommendation->brand }}</div>
                                    </td>
                                    <th>
                                        <a class="btn btn-ghost btn-xs"
                                            href="{{ route('recommendation.show', ['recommendation' => 1]) }} ">details</a>
                                    </th>
                                </tr>
                            @endforeach
                        @endif
                    </tbody>
                    <!-- foot -->
                    <tfoot>
                        <tr>
                            <th></th>
                            <th>Name</th>
                            <th>Description</th>
                            <th>Brand</th>
                            <th></th>
                        </tr>
                    </tfoot>

                </table>
            </div>
            @if (Auth::user()->is_advisor == 1)
                <a class="btn btn-primary m-10 " href="{{ route('recommendation.create') }} ">Add new product</a>
            @endif
        </div>

    </div>
@endsection
