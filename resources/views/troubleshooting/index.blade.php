@extends('layouts.app')

@section('content')
    <div class="flex justify-center">
        <div class="w-10/12 bg-white p-6 rounded-lg">
            Troubleshooting

            <div class="hero min-h-screen bg-base-200">
                <div class="hero-content text-center">
                  <div class="max-w-md">
                    <h1 class="text-5xl font-bold">Troubleshooting</h1>
                    <p class="py-6">Provident cupiditate voluptatem et in. Quaerat fugiat ut assumenda excepturi exercitationem quasi. In deleniti eaque aut repudiandae et a id nisi.</p>
                    <div class="drawer drawer-end m-4">
                        <input id="my-drawer-4" type="checkbox" class="drawer-toggle" />
                        <div class="drawer-content">
                          <!-- Page content here -->
                          <label for="my-drawer-4" class="drawer-button btn btn-primary">Choose Your Problem</label>
                        </div>
                        <div class="drawer-side">
                          <label for="my-drawer-4" class="drawer-overlay"></label>
                          <ul class="menu p-4 overflow-y-auto w-80 bg-base-100 text-base-content">
                            <!-- Sidebar content here -->
                            <li><a href="{{ route('troubleshooting.show', ['troubleshooting'=>1]) }}">Modem Problem</a></li>
                            <li><a href="{{ route('troubleshooting.show', ['troubleshooting'=>1]) }}">Wifi Problem</a></li>
                            <li><a href="{{ route('troubleshooting.show', ['troubleshooting'=>1]) }}">Overheating Problem</a></li>
                            <li><a href="{{ route('troubleshooting.show', ['troubleshooting'=>1]) }}">Desktop crashes Problem</a></li>
                          </ul>
                        </div>
                      </div>
                  </div>
                </div>
              </div>
              <a class="btn btn-secondary" href="{{ route('troubleshooting.create') }} ">Add</a>

        </div>

    </div>
@endsection
