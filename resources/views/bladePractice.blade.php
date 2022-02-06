<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blade</title>
</head>
<body>

    <h1>Blade Practice</h1>

    {{-- @if ($name == 'apple')

    <h2>Hlw {{$name}} I want to eat you.</h2>
    @else
    <h3>There is no {{$name}}</h3>
    @endif --}}


    @for ($i=0; $i<=10; $i++)
        <h2>{{$i}}</h2>
    @endfor


    @foreach ($names as $name)
        <h1>{{$name}}</h1>
    @endforeach
</body>
</html>
