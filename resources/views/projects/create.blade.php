@extends('layouts.app')

@section('content')
    <h1> Create Project </h1>
    <form method="POST" action="/projects">
        @csrf

        <div class="form-group">
            <label for="title"></label>
            <input class="form-control" name="title" id="title">
        </div>

        <div class="form-group">
            <label for="description"></label>
            <textarea id="description" name="description" class="form-control">

                </textarea>
        </div>
        <div class="form-group">
            <input type="submit" value="Create">
            <a href="/projects">Cancel</a>
        </div>
    </form>
@endsection

