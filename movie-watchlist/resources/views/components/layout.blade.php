<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Movie Watchlist' }}</title>

    @vite('resources/css/app.css')
</head>
<body>
    <header class="flex items-center justify-between max-w-5xl mx-auto px-6 py-4 border-b border-gray-200 gap-4">
        <h1 class="text-4xl font-bold tracking-tight text-gray-400">Movie Watchlist</h1>
        <a href="/watchlist" class="text-gray-600 hover:text-black transition">
            All Movies
        </a>

        <a href="/watchlist/create" class="px-4 py-2 rounded-lg bg-black text-white hover:bg-gray-800 transition">
            Add a New Movie
        </a>
    </header>

    <main class="bg-gray-950 container mx-auto px-6 py-6">
        {{ $slot }}
    </main>
</body>
</html>