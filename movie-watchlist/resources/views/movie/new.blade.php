<x-layout title="Add Movie | Movie Watchlist">
    <div class="flex justify-center">
        <form action="{{ route('movie.store') }}" method="POST" class="w-full max-w-xl bg-gray-900 p-8 rounded-2xl shadow-lg space-y-6">
            @csrf
            
            <h2 class="text-2xl font-semibold text-center">Add a new Movie</h2>

            <label for="movie_title" class="block text-sm mb-1 text-gray-300">Movie Title:</label>
            <input 
                type="text"
                id="title"
                name="title"
                value="{{ old('title') }}"
                required
                class="w-full px-4 py-2 bg-gray-800 border border-gray-700 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:outline-none"    
            >

            <label for="genre" class="block text-sm mb-1 text-gray-300">Movie Genre:</label>
            <input 
                type="text"
                id="genre"
                name="genre"
                value="{{ old('genre') }}"
                required
                class="w-full px-4 py-2 bg-gray-800 border border-gray-700 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:outline-none"    
            >

            <label for="overview" class="block text-sm mb-1 text-gray-300">Overview:</label>
            <textarea 
                name="overview" 
                id="overview"
                rows="3"
                required
                class="w-full px-4 py-2 bg-gray-800 border border-gray-700 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:outline-none"
            >{{ old('overview') }}</textarea>

            <label for="description" class="block text-sm mb-1 text-gray-300">Description:</label>
            <textarea 
                name="description" 
                id="description"
                rows="5"
                required
                class="w-full px-4 py-2 bg-gray-800 border border-gray-700 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:outline-none"
            >{{ old('description') }}</textarea>

            <label for="release_year" class="block text-sm mb-1 text-gray-300">Release Date:</label>
            <input 
                type="number"
                id="release_year"
                name="release_year"
                min="1900"
                max="2100"
                value="{{ old('release_year') }}"
                required
                class="w-full px-4 py-2 bg-gray-800 border border-gray-700 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:outline-none"    
            >

            <label for="rating" class="block text-sm mb-1 text-gray-300">Rating:</label>
            <input 
                type="number"
                id="rating"
                name="rating"
                min="0"
                max="10"
                value="{{ old('rating') }}"
                required
                class="w-full px-4 py-2 bg-gray-800 border border-gray-700 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:outline-none"    
            >

            <label for="total_reviews" class="block text-sm mb-1 text-gray-300">Total Reviews:</label>
            <input 
                type="number"
                id="total_reviews"
                name="total_reviews"
                min="0"
                value="{{ old('total_reviews') }}"
                required
                class="w-full px-4 py-2 bg-gray-800 border border-gray-700 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:outline-none"    
            >

            <label for="img_url" class="block text-sm mb-1 text-gray-300">Movie's Image Address:</label>
            <textarea 
                name="img_url" 
                id="img_url"
                rows="2"
                required
                class="w-full px-4 py-2 bg-gray-800 border border-gray-700 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:outline-none"
            >{{ old('img_url') }}</textarea>

            <div class="flex items-center justify-between pt-2">
                <span class="text-sm text-gray-300">Watched</span>

                <label class="relative inline-flex items-center cursor-pointer">
                    <!-- Hidden default -->
                    <input type="hidden" name="watched" value="0">

                    <!-- Checkbox -->
                    <input 
                        type="checkbox" 
                        name="watched" 
                        value="1"
                        class="sr-only peer"
                        {{ old('watched') ? 'checked' : '' }}
                    >

                    <!-- Track -->
                    <div class="w-11 h-6 bg-gray-700 rounded-full peer 
                                peer-checked:bg-indigo-600 
                                transition-colors duration-300">
                    </div>

                    <!-- Thumb -->
                    <div class="absolute left-1 top-1 w-4 h-4 bg-white rounded-full 
                                transition-transform duration-300
                                peer-checked:translate-x-5">
                    </div>
                </label>
            </div>

            <button type="submit" class="w-full bg-indigo-600 hover:bg-indigo-700 transition-colors py-2 rounded-lg font-medium">Add Movie</button>

            @if ($errors->any())
                <ul class="bg-red-500/10 border border-red-500 text-red-400 rounded-lg p-4">
                    @foreach ($errors->all() as $error)
                        <li class="my-2 text-red-500">
                            {{ $error }}
                        </li>
                    @endforeach
                </ul>
            @endif
        </form>
    </div>
</x-layout>