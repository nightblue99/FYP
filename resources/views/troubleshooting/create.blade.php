@extends('layouts.app')

@section('content')
    <div class="flex justify-center">
        <div class="w-8/12 bg-white p-6 rounded-lg">
            Adding Problem

            <div class="form-control">
                <label class="label">
                  <span class="label-text"></span>
                </label>
                <label class="input-group py-8">
                  <span>Title Problem</span>
                  <input type="text" placeholder="name" class="input input-bordered" />
                </label>
            </label>
            <label class="input-group py-8">
              <span>Problem Content</span>
              <input type="text" placeholder="content" class="input input-bordered input-lg w-full max-w-xs" />
              </div>
              <label class="input-group py-8">
                <span>Solution</span>
                <input type="text" placeholder="solution" class="input input-bordered" />
              </label>
              <form class="flex items-center space-x-6 py-8">
                <div class="shrink-0">
                  <img class="h-16 w-16 object-cover rounded-full" src="https://images.unsplash.com/photo-1580489944761-15a19d654956?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1361&q=80" alt="Current profile photo" />
                </div>
                <label class="block">
                  <span class="sr-only">Choose image</span>
                  <input type="file" class="block w-full text-sm text-slate-500
                    file:mr-4 file:py-2 file:px-4
                    file:rounded-full file:border-0
                    file:text-sm file:font-semibold
                    file:bg-violet-50 file:text-violet-700
                    hover:file:bg-violet-100
                  "/>
                </label>
              </form>
              <button class="btn btn-outline">Submit</button>
        </div>
    </div>
@endsection
