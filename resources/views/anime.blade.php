<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>My Favorite Animes:</h1>
    <ul>
        @foreach ($anime as $anime_yamete)
            <li>{{ $anime_yamete }}</li>
        @endforeach
    </ul>
</body>
</html>