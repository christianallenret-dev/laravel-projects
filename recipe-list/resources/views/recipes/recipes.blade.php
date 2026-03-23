<x-layout>
    <div class="max-w-7xl mx-auto px-6 py-10">
        <h1 class="text-3xl font-bold text-gray-800 mb-8">
            Recipe Collection
        </h1>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach ($recipes as $recipe)
                <div class="bg-white rounded-2xl shadow-md overflow-hidden hover:shadow-xl transition duration-300 flex flex-col">
                    
                    <div class="overflow-hidden">
                        <img 
                            class="w-full h-52 object-cover transform hover:scale-105 transition duration-300"
                            src="{{ $recipe->img_url }}"
                            alt="{{ $recipe->name }}"
                        />
                    </div>

                    <div class="p-5 flex flex-col grow">
                        <h2 class="text-xl font-semibold text-gray-800 mb-4">
                            {{ $recipe->name }}
                        </h2>

                        <a 
                            href="{{ route('recipes.show', $recipe->id) }}"
                            class="mt-auto block text-center px-4 py-2 bg-linear-to-r from-blue-500 to-indigo-500 text-white font-medium rounded-lg shadow hover:from-blue-600 hover:to-indigo-600 transition"
                        >
                            View Details →
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</x-layout>