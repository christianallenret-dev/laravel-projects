<x-layout>
    <h2 class="text-4xl font-bold mb-10">Skills</h2>
    
    <div class="grid md:grid-cols-2 gap-6">
        @foreach ($skills as $skill)
            <div class="bg-white p-6 rounded-xl shadow-sm hover:shadow-md transition">
                <h4 class="text-2xl font-semibold sm-2">{{ $skill['name'] }}</h4>
                <p class="text-gray-600">{{ $skill['description'] }}</p>
            </div>
        @endforeach
    </div>
</x-layout>