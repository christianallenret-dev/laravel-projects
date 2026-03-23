<x-layout>
    <div class="max-w-3xl mx-auto px-4 py-10">
        
        <div class="bg-white rounded-2xl shadow-lg overflow-hidden">

            <div class="overflow-hidden">
                <img 
                    class="w-full h-72 object-cover transform hover:scale-105 transition duration-300"
                    src="{{ $recipes->img_url }}"
                    alt="{{ $recipes->name }}"
                >
            </div>

            <div class="p-6">
                
                <h1 class="text-3xl font-bold text-gray-800 mb-3">
                    {{ $recipes->name }}
                </h1>

                <p class="text-sm text-gray-400 mb-5">
                    Added on {{ $recipes->created_at->format('F d, Y') }}
                </p>

                <p class="text-gray-600 leading-relaxed mb-8">
                    {{ $recipes->description ?? 'No description available.' }}
                </p>

                <div class="flex items-center justify-between">
                    
                    <a 
                        href="{{ route('recipes.index') }}"
                        class="inline-flex items-center gap-2 px-4 py-2 bg-gray-100 text-gray-700 rounded-lg hover:bg-gray-200 transition"
                    >
                        ← Back to Recipes
                    </a>

                </div>

            </div>
        </div>
    </div>
</x-layout>