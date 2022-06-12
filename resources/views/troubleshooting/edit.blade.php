@extends('layouts.app')

@section('content')
    <div class="flex justify-center">
        <div class="w-8/12 bg-white p-6 rounded-lg">
            Adding Problem
            <form action="{{ route('troubleshooting.update', ['troubleshooting' => $troubleshooting]) }}" method="POST">
                @method('PUT')
                @csrf
                <div class="form-control">
                    <label class="label">
                        <span class="label-text"></span>
                    </label>
                <label class="input-group py-8">
                    <span>Solution</span>
                    <input name="solutions" type="text" placeholder="solution" class="input input-bordered" />
                </label>
                    <br><input class="btn mt-3" type="submit">
            </form>
        </div>
    </div>
@endsection
