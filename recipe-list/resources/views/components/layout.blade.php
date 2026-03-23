<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home | Recipe List</title>

    @vite('resources/css/app.css')
</head>
<body>
    
    <main>
        {{ $slot }}
    </main>

</body>
</html>