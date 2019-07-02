<html>
<head>

</head>
<body>
<h1>Projects</h1>

@forelse($projects as $project)
    <li>
        <a href="{{$project->path()}}">{{$project->title}}
    </li>
@empty
    <li>No projects here</li>
@endforelse
</body>
</html>
