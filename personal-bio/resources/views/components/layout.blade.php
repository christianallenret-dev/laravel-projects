<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home | Personal Bio</title>

    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 text-gray-800 font-sans">
    <div class="flex min-h-screen">
        <aside class="w-64 bg-gray-900 text-gray-800 flex flex-col fixed h-full shadow-lg">
            <div class="p-6 border-b border-gray-700">
                <h1 class="text-xl font-bold tracking-wide">Christian Ret</h1>
                <p class="text-sm text-gray-400">IT Student</p>
            </div>

            <nav class="flex-1 p-4 space-y-2">
                <a href="/home" class="block px-4 py-2 rounded-lg text-gray-500 hover:bg-gray-800 transition">Home</a>
                <a href="/education" class="block px-4 py-2 rounded-lg text-gray-500 hover:bg-gray-800 transition">Education</a>
                <a href="/skills" class="block px-4 py-2 rounded-lg text-gray-500 hover:bg-gray-800 transition">Skills</a>
                <a href="/projects" class="block px-4 py-2 rounded-lg text-gray-500 hover:bg-gray-800 transition">Projects</a>
            </nav>

            <div class="p-4 text-xs text-gray-500 border-t border-gray-700">
                {{ date('Y') }}
            </div>
        </aside>
        

        <main class="ml-64 p-6">
            <div class="max-5-wxl mx-auto">
                {{ $slot }}
            </div>
        </main>
    </div>

    
</body>
</html>