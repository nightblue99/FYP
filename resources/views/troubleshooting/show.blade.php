@extends('layouts.app')

@section('content')
    <div class="flex justify-center">
        <div class="w-10/12 bg-white p-6 rounded-lg">
            How to solve to your problem

            <div tabindex="0" class="collapse collapse-plus border border-base-300 bg-base-100 rounded-box m-4">
                <div class="collapse-title text-xl font-medium">
                    Focus me to see content
                </div>
                {{-- @dd($troubleshooting) --}}
                <div class="collapse-content">
                    <p>{{ $troubleshooting->problem_content }} , {{ $troubleshooting->solutions }}</p>
                </div>
            </div>
            @if (Auth::user()->is_advisor == 1)
                <a class="btn"
                    href="{{ route('troubleshooting.edit', ['troubleshooting' => $troubleshooting]) }}">edit</a>
            @endif
        </div>
    </div>
@endsection
