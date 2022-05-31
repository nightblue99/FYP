@extends('layouts.app')

@section('content')
    <div class="flex justify-center">
        <div class="w-8/12 bg-white p-6 rounded-lg">
            Specification

            <div tabindex="0" class="collapse collapse-plus border border-base-300 bg-base-100 rounded-box m-4">
                <div class="collapse-title text-xl font-medium">
                  Focus me to see content
                </div>
                <div class="collapse-content">
                  <p>{{$recommendation->specification}}</p>
                </div>
              </div>
        </div>
    </div>
@endsection
