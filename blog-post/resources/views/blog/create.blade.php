<x-app-layout>
    <div class="flex items-center justify-center min-h-screen">
        <form action="{{ route('blog.store') }}" method="POST" class="w-full max-w-xl bg-gray-800 p-8 rounded-2xl shadow-lg space-y-6 border-gray-700">
            @csrf

            <label for="title" class="block text-sm mb-1 text-gray-300">Blog Title:</label>
            <input 
                type="text"
                id="title"
                name="title"
                value="{{ old('title') }}"
                required
                class="w-full px-4 py-2 bg-gray-900 border border-gray-700 rounded-lg text-white focus:ring-2 focus:ring-indigo-500 focus:outline-none"    
            >
            @error('title')
                <p class="text-red-400 text-sm mt-1">{{ $message }}</p>
            @enderror

            <label for="content" class="block text-sm mb-1 text-gray-300">Content:</label>
            <textarea 
                name="content" 
                id="content"
                rows="5"
                required
                class="w-full px-4 py-2 bg-gray-900 border border-gray-700 rounded-lg text-white focus:ring-2 focus:ring-indigo-500 focus:outline-none resize-none"
            >{{ old('content') }}</textarea>
            @error('content')
                <p class="text-red-400 text-sm mt-1">{{ $message }}</p>
            @enderror

            <button type="submit" class="w-full bg-indigo-600 hover:bg-indigo-700 transition-colors py-2 rounded-lg text-white font-medium">Post</button>
        </form>
    </div>
</x-app-layout>