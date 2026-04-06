<x-layout title="{{ $movie->title }} | Movie Watchlist">
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
                    <p class="text-gray-400 mb-2">{{ $movie->genre }} • {{ $movie->release_year }} • TV-MA</p>

                    <p class="mb-4 text-yellow-400">
                        ⭐ {{ $movie->rating }} / 10 •
                        @if ($movie->total_reviews >= 1000000)
                            {{ round($movie->total_reviews / 1000000) . 'M' }} reviews
                        @elseif ($movie->total_reviews >= 1000)
                            {{ round($movie->total_reviews / 1000) . 'K' }} reviews
                        @else
                            {{ $movie->total_reviews }} reviews
                        @endif
                    </p>

                    <p class="text-gray-300 mb-6">
                        {{ $movie->description }}
                    </p>

                    <div class="mt-4">
                        <form action="{{ route('movie.destroy', $movie->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="bg-red-600 hover:bg-red-700 text-white px-4 py-2 rounded-lg"
                                onclick="return confirm('Are you sure you want to delete this movie?');">
                                Delete Movie
                            </button>
                        </form>
                    </div>
                </div>

            </div>
        </section>


        <!-- 📖 OVERVIEW -->
        <section class="max-w-4xl mx-auto px-6 py-12">
            <h2 class="text-2xl font-semibold mb-4">Overview</h2>
            <p class="text-gray-300 leading-relaxed">
                {{ $movie->overview }}
            </p>
        </section>


        <!-- 💬 COMMENTS -->
        <section class="max-w-4xl mx-auto px-6 pb-16">
            <h2 class="text-2xl font-semibold mb-6">Comments</h2>

            <!-- Comment -->
            <div class="space-y-4">
                    @foreach ($movie->comments as $comment)
                        <div>
                            <div class="flex gap-4">
                                <img src="https://img.freepik.com/premium-vector/vector-flat-illustration-grayscale-avatar-user-profile-person-icon-gender-neutral-silhouette-profile-picture-suitable-social-media-profiles-icons-screensavers-as-templatex9xa_719432-2210.jpg?semt=ais_incoming&w=740&q=80"
                                    class="w-10 h-10 rounded-full" />
                                <div>
                                    <p class="font-medium">{{ $comment->author }}</p>
                                    <p class="text-gray-300 text-sm mb-2">
                                        {{ $comment->body }}
                                    </p>
                                    <div class="flex items-center gap-4 text-sm text-gray-400">
                                        <span>{{ str_repeat('⭐', $comment->rating) }} {{ str_repeat('☆', 5 - $comment->rating) }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
            </div>

            <!-- Add Comment -->
            <form action="{{ route('comments.store', $movie) }}" method="POST" class="mt-8 space-y-4">
                @csrf
                <div class="flex flex-col md:flex-row gap-3">
                    <input 
                        type="text"
                        id="author"
                        name="author"  
                        placeholder="Name"
                        value="{{ old('author') }}"
                        class="w-full md:w-1/2 bg-gray-800 text-white px-4 py-2 rounded-lg outline-none focus:ring-2 focus:ring-blue-500"
                    />

                    <input
                        id="rating"
                        name="rating" 
                        type="number" 
                        placeholder="Rating"
                        min="1"
                        max="5"
                        value="{{ old('rating') }}"
                        required
                        class="w-full md:w-1/2 bg-gray-800 text-white px-4 py-2 rounded-lg outline-none focus:ring-2 focus:ring-blue-500"
                    />
                </div>
                
                <textarea
                    id="body"
                    name="body"  
                    placeholder="Add a comment..."
                    class="w-full bg-gray-800 text-white px-4 py-2 rounded-lg outline-none focus:ring-2 focus:ring-blue-500"
                >{{ old('body') }}</textarea>
                
                <button type="submit" class="bg-blue-500 px-5 py-2 rounded-lg hover:bg-blue-600">
                    Post
                </button>
            </form>

        </section>
</x-layout>