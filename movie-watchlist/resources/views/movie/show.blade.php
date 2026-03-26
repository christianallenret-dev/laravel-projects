<x-layout title="{{ $movie->title }} | Movie Watchlist">
    <body class="bg-gray-950 text-white font-sans">

        <!-- 🎬 HERO SECTION -->
        <section class="relative">
            <!-- Background -->
            <div class="absolute inset-0">
            <img src="{{ $movie->img_url }}" 
                class="w-full h-full object-cover opacity-30" />
            <div class="absolute inset-0 bg-linear-to-t from-gray-950"></div>
            </div>

            <!-- Content -->
            <div class="relative max-w-6xl mx-auto px-6 py-16 flex flex-col md:flex-row gap-8 items-center md:items-end">
            
            <!-- Poster -->
                <img src="{{ $movie->img_url }}"
                    class="w-48 md:w-64 rounded-xl shadow-lg" />

            <!-- Info -->
                <div class="max-w-xl text-center md:text-left">
                    <h1 class="text-3xl md:text-5xl font-bold mb-3">{{ $movie->title }}</h1>
                    <p class="text-gray-400 mb-2">Drama • 2024 • TV-MA</p>

                    <p class="mb-4 text-yellow-400">⭐ 8.7 / 10 • 120K reviews</p>

                    <p class="text-gray-300 mb-6">
                        {{ $movie->description }}
                    </p>

                    <div class="flex gap-3 justify-center md:justify-start">
                    <button class="bg-white text-black px-5 py-2 rounded-lg font-medium hover:bg-gray-200">
                        ▶ Play
                    </button>
                    <button class="bg-gray-800 px-5 py-2 rounded-lg hover:bg-gray-700">
                        + My List
                    </button>
                    </div>
                </div>

            </div>
        </section>


        <!-- 📖 OVERVIEW -->
        <section class="max-w-4xl mx-auto px-6 py-12">
            <h2 class="text-2xl font-semibold mb-4">Overview</h2>
            <p class="text-gray-300 leading-relaxed">
            This is a concise description of the show. It introduces the premise,
            characters, and tone without overwhelming the viewer. Keep it short and
            readable for a modern minimalist feel.
            </p>
            <button class="mt-3 text-sm text-blue-400 hover:underline">Read more</button>
        </section>


        <!-- 💬 COMMENTS -->
        <section class="max-w-4xl mx-auto px-6 pb-16">
            <h2 class="text-2xl font-semibold mb-6">Comments</h2>

            <!-- Comment -->
            <div class="space-y-6">
            
                <div class="flex gap-4">
                    <img src="https://via.placeholder.com/40"
                        class="w-10 h-10 rounded-full" />
                    <div>
                    <p class="font-medium">Username</p>
                    <p class="text-gray-300 text-sm mb-2">
                        This show is amazing. Loved the pacing and visuals.
                    </p>
                    <div class="flex items-center gap-4 text-sm text-gray-400">
                        <span>⭐⭐⭐⭐☆</span>
                        <button class="hover:text-white">Like</button>
                        <button class="hover:text-white">Reply</button>
                    </div>
                </div>
            </div>

            <div class="space-y-4">
                    @foreach ($movie->comment as $comment)
                        <div>
                            <div class="flex gap-4">
                                <img src="https://via.placeholder.com/40"
                                    class="w-10 h-10 rounded-full" />
                                <div>
                                    <p class="font-medium">{{ $comment->author }}</p>
                                    <p class="text-gray-300 text-sm mb-2">
                                        {{ $comment->body }}
                                    </p>
                                    <div class="flex items-center gap-4 text-sm text-gray-400">
                                        <span>⭐⭐⭐☆☆</span>
                                        <button class="hover:text-white">Like</button>
                                        <button class="hover:text-white">Reply</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
            </div>

            </div>

            <!-- Add Comment -->
            <div class="mt-8 flex gap-3">
            <input type="text" placeholder="Add a comment..."
                    class="flex-1 bg-gray-800 text-white px-4 py-2 rounded-lg outline-none focus:ring-2 focus:ring-blue-500"/>
            <button class="bg-blue-500 px-5 py-2 rounded-lg hover:bg-blue-600">
                Post
            </button>
            </div>

        </section>

        </body>
</x-layout>