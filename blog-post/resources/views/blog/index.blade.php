<x-app-layout>
    <div class="max-w-[110rem] mx-auto py-8 min-h-screen">
        @foreach ($blogs as $blog)
            <x-blog>
                <!-- Content -->
                <div class="p-5">

                    <h3 class="mt-2 text-xl font-bold text-gray-900 dark:text-white">
                        {{ $blog->title }}
                    </h3>

                    <p class="mt-2 text-gray-600 dark:text-gray-300 text-sm">
                        {{ Str::limit($blog->content, 120) }}
                    </p>

                    <!-- Footer -->
                    <div class="mt-4 flex items-center justify-between">
                        <div class="flex flex-col">
                            <span class="text-sm text-gray-700 dark:text-gray-200">
                                By: {{ optional($blog->user)->name ?? 'Unknown' }}
                            </span>

                            @if(optional($blog->user)->role === 'admin')
                                <span class="text-xs text-red-700 italic">
                                    Admin
                                </span>
                            @endif
                        </div>

                        <span class="text-xs text-gray-500">
                            {{ optional($blog->created_at)->format('M d, Y') }}
                        </span>
                    </div>

                    <a href="{{ route('blog.show', $blog) }}" class="inline-block mt-4 text-indigo-600 dark:text-indigo-400 text-sm font-semibold hover:underline">
                        Read more →
                    </a>
                </div>
            </x-blog>
        @endforeach
    </div>
</x-app-layout>