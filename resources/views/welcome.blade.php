<x-app-layout>
    <x-slot name="header">
        {{ __('Blog') }}
    </x-slot>

    <div class="py-12">
        <div class="max-w-full mx-auto sm:px-6 lg:px-8">
            <button class="focus:outline-none focus:shadow-outline m-4 transition duration-500 ease-in-out transform hover:-translate-y-1 hover:scale-110 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                Create a new post
            </button>
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                @livewire('posts.post-index')
            </div>
        </div>
    </div>
</x-app-layout>
