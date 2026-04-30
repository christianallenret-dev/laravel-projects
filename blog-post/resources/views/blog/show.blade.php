<x-app-layout>
    <div class="max-w-4xl mx-auto py-10 px-6 min-h-screen">
        <!-- Blog Card -->
        <div class="mt-6 bg-white dark:bg-gray-800 shadow-md rounded-2xl overflow-hidden">

            <div class="p-8">

                <!-- Title -->
                <h1 class="text-3xl font-bold text-gray-900 dark:text-white">
                    {{ $blog->title }}
                </h1>

                <!-- Meta -->
                <div class="mt-3 flex items-center justify-between text-sm text-gray-500 dark:text-gray-400">
                    <span>
                        By: {{ $blog->user->name ?? 'Unknown' }}
                    </span>
                    <span>
                        {{ $blog->created_at?->format('M d, Y') }}
                    </span>
                </div>

                <!-- Divider -->
                <hr class="my-6 border-gray-200 dark:border-gray-700">

                <!-- Content -->
                <div class="prose dark:prose-invert max-w-none text-gray-800 dark:text-gray-200">
                    {{ $blog->content }}
                </div>

            </div>
        </div>

    </div>
</x-app-layout>