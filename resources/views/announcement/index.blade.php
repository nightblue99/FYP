@extends('layouts.app')

@section('content')
    <div class="flex justify-center">
        <div class="w-10/12 bg-white p-6 rounded-lg">
            <div class="overflow-x-auto">
                <h2>Announcement</h2>

                @if ($announcements != null)
                    @foreach ($announcements as $announcement)
                        <table class="divide-y divide-slate-700 border-separate p-2 border border-slate-600"
                            style="width:100%">
                            <tr>
                                <td class="border border-slate-400">{{ $announcement->title }}</td>
                            </tr>
                            <tr class="h-24">
                                <td class="border border-slate-400">{{ $announcement->content }} , {{$announcement->description }}</td>
                            </tr>
                        </table>
                    @endforeach
                @endif
            </div>
            @if (Auth::user()->is_advisor == 1)
                <a class="btn" href="{{ route('announcement.create') }}">Add</a>
            @endif
        </div>
    </div>
@endsection
