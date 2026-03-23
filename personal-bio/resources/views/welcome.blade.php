<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal Bio</title>

    @vite('resources/css/app.css')
</head>
<body class="text-center px-8 py-12">
    <h1>Welcome to my Personal Bio Page</h1>
    <h3>Click the button below to view my personal information</h3>

    <a href="/home" class="btn mt-4 inline-block">
        Go to Profile
    </a>
</body>
</html>