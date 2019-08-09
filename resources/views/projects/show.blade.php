@extends('layouts.app')

@section('content')
    <header class="flex items-center mb-3 py-4">
        <div class="flex justify-between items-center w-full">
            <p class="text-grey text-sm text-normal no-underline">
                <a href="/projects" class="text-grey text-sm text-normal no-underline">My Projects</a>  / {{$project->title}}
            </p>
            <a class="button" href="/projects/create">Create</a>
        </div>
    </header>

    <main>
        <div class="lg:flex -mx-3">
            <div class="lg:w-3/4 px-3">
                {{--tasks--}}
                <div class="mb-6">
                    <h2 class="text-grey text-normal text-lg mb-3">Tasks</h2>
                    @foreach($project->tasks as $task)
                        <div class="mb-3 card">{{$task->body}}</div>
                    @endforeach
                </div>

                {{-- general notes --}}
                <div >
                    <h2 class="text-grey text-normal text-lg mb-3">General notes</h2>

                    <textarea class="card w-full" style="min-height: 200px">General notes</textarea>
                </div>
            </div>
            <div class="lg:w-1/4 px-3">
                @include('projects.card')
            </div>
        </div>
    </main>
@endsection


