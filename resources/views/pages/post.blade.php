<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    {{-- <article class="max-w-screen-md py-8 border-b border-gray-500">
            <h2 class="mb-1 text-3xl font-bold tracking-tight text-gray-900 hover:underline">{{$post['title']}}</h2>
            <div class="text-base text-gray-500">
                <a href="">{{$post['author']}}</a> | {{$post['date']}}
            </div>
            <p class="my-4 font-light">
                {{$post['body']}}
            </p>
            <a href="/posts" class="font-medium text-blue-500">&laquo; Back to posts</a>
        </article> --}}
    <main class="pt-8 pb-16 lg:pt-16 lg:pb-24 bg-white dark:bg-gray-900 antialiased">
        <div class="flex justify-between px-4 mx-auto max-w-screen-xl ">
            <article
                class="mx-auto w-full max-w-2xl format format-sm sm:format-base lg:format-lg format-blue dark:format-invert">
                <header class="mb-4 lg:mb-6 not-format">
                    <address class="flex items-center mb-6 not-italic">
                        <div class="inline-flex items-center mr-3 text-sm text-gray-900 dark:text-white">
                            <img class="mr-4 w-16 h-16 rounded-full"
                                src="https://flowbite.com/docs/images/people/profile-picture-2.jpg" alt="Jese Leos">
                            <div>
                                <a href="/authors/{{ $post->author->id }}" rel="author"
                                    class="text-xl font-bold text-gray-900 dark:text-white">{{ $post->author->name }}</a>
                                <p class="text-base text-gray-500 dark:text-gray-400">{{ $post['date'] }}</p>
                            </div>
                        </div>
                    </address>
                    <h1
                        class="mb-4 text-3xl font-extrabold leading-tight text-gray-900 lg:mb-6 lg:text-4xl dark:text-white">
                        {{ $post['title'] }}</h1>
                </header>
                <p>
                    {{ $post['body'] }}
                </p>
                <a href="/posts" class="font-medium text-blue-500">&laquo; Back to posts</a>
            </article>
        </div>
    </main>
</x-layout>
