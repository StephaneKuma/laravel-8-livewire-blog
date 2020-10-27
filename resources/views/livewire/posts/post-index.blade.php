<div>
    <div class="flex flex-wrap">
        <!-- Main Content -->
        <div class="w-full md:w-4/5">

            <div class="container pt-4 px-4 sm:px-6 lg:px-8">
                {{ $posts->links('pagination-links') }}
            </div>

            <div class="container pt-16 px-4 sm:px-6 lg:px-8">
                <div class="mt-3 grid gap-5 max-w-lg mx-auto lg:grid-cols-3 lg:max-w-none">
                    @foreach ($posts as $post)

                        <div class="flex flex-col rounded-lg shadow-lg overflow-hidden bg-gray-100">
                            <div class="flex-shrink-0">
                                <img class="h-48 w-full object-cover" src="{{ asset('images/onboard2.png') }}" alt="">
                            </div>
                            <div class="flex-1 p-6 flex flex-col justify-between">
                                <div class="flex-1">
                                    <p class="text-sm leading-5 font-medium text-indigo-600">{{ $post->category->name }}</p>
                                    <h3 class="mt-2 text-xl leading-7 font-semibold text-gray-900">{{ $post->title }}</h3>
                                    <p class="mt-3 text-base leading-6 text-gray-600">{{ $post->content }}</p>
                                </div>
                                <div class="mt-6 flex items-center">
                                    <div class="flex-shrink-0">
                                        <img class="h-10 w-10" src="{{ asset('images/onboard2.png') }}" alt="">
                                    </div>
                                    <div class="ml-3">
                                        <p class="text-sm leading-5 font-medium text-gray-900">
                                            {{ $post->user->name }}
                                        </p>
                                        <div class="flex text-sm leading-5 text-gray-500">
                                            <time>{{ $post->created_at->diffForHumans() }}</time>
                                            <span class="mx-1">&middot;</span>
                                            <span class="">6 min read</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

                <div class="container pt-4 px-4 sm:px-6 lg:px-8">
                    {{ $posts->links('pagination-links') }}
                </div>
            </div>
        </div>

        <!--Sidebar-->
        <div class="w-full md:w-1/5 bg-gray-900 md:bg-gray-900 px-2 text-center bottom-0 md:pt-8 md:top-0 md:right-0 h-16 md:h-screen md:border-r-4 md:border-gray-600">
            <div class="md:relative mx-auto lg:float-right lg:px-6">
            </div>
        </div>
    </div>
</div>
