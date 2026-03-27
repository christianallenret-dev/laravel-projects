<x-layout title="Home | Movie Watchlist">
    <body class="bg-gray-950 text-white font-sans">
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
            @foreach ($movies as $movie)
                <x-card>
                    <img 
                    src="{{ $movie->img_url }}" 
                    alt="Card Image"
                    class="w-full h-72 object-cover rounded-xl mb-4"
                    >

                    <h2 class="text-xl font-semibold text-gray-300 mb-2">
                        {{ $movie->title }}
                    </h2>
                    
                    <p class="text-gray-500 text-md">
                        {{ $movie->genre }}
                    </p>

                    <a 
                        href="{{ route('movie.show', $movie->id) }}"
                        class="mt-auto block text-center px-4 py-2 bg-linear-to-r from-blue-500 to-indigo-500 text-white font-medium rounded-lg shadow hover:from-blue-600 hover:to-indigo-600 transition"
                    >
                        View Details →
                    </a>
                </x-card>
            @endforeach
            
            {{ $movies->links() }}
        </div>
    </body>
</x-layout>