<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Cinzel:wght@500&family=Dancing+Script&family=Geologica:wght@500&family=Josefin+Sans&family=Quicksand:wght@600&family=Raleway&family=Roboto&display=swap"
        rel="stylesheet" />
    @vite('resources/css/app.css')
</head>

<body>
    {{ $slot }}
    <script src="/js/navbar.js"></script>
</body>

</html>
