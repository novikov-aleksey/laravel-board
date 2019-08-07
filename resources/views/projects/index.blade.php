@extends('layouts.app')

@section('content')
    <div style="display: flex;" class="items-center">
        <h1 class="mr-auto">Projects</h1>
        <a href="/projects/create">Create</a>
    </div>

    <div style="display: flex;" class="mr-4">
        @forelse($projects as $project)
            <div class="bg-white">
                <h3>{{$project->title}}</h3>

                <div>
                    {{$project->description}}
                </div>
            </div>
        @empty
            <div>No projects yet</div>
        @endforelse
    </div>
@endsection
