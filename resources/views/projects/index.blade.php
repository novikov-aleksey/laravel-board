<html>
<head>

</head>
<body>
@foreach($projects as $project)
    <li>{{$project->title}}</li>
@endforeach
</body>
</html>
