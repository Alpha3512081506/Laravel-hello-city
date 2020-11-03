<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
</head>

<body>
    <h1>Hello From Roma </h1>
    <p>It's Currently {{date('h:i: A')}}</p>
    <footer>
        <p>Copyright All right reserved {{date('Y')}}&middot; <a href="">About</a></p>
    </footer>
</body>

</html>