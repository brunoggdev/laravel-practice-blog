<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

</head>

<body>
    @foreach ($posts as $post)
    <li>
        {{ $post->author->name }}
    </li>
    <hr>
    @endforeach
</body>

</html>