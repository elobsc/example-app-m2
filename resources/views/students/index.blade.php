<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
        @foreach ($students as $student)
        <li>{{ $student->last_name}}, {{$student->first_name}},{{$student->birth_date}}, {{$student->adress}}, {{$student->group->name}}</li>
        @endforeach
    </ul>
    
</body>
</html>