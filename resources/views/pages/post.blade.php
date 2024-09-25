<x-layout>
    <x-slot:title>{{ $title }}</x-slot>
    {{--
        <article class="max-w-screen-md py-8 border-b border-gray-500">
        <h2 class="mb-1 text-3xl font-bold tracking-tight text-gray-900 hover:underline">{{$post['title']}}</h2>
        <div class="text-base text-gray-500">
        <a href="">{{$post['author']}}</a> | {{$post['date']}}
        </div>
        <p class="my-4 font-light">
        {{$post['body']}}
        </p>
        <a href="/posts" class="font-medium text-blue-500">&laquo; Back to posts</a>
        </article>
    --}}
    <main
        class="bg-white pb-16 pt-8 antialiased dark:bg-gray-900 lg:pb-24 lg:pt-16"
    >
        <div class="mx-auto flex max-w-screen-xl justify-between px-4">
            <article
                class="format format-sm format-blue mx-auto w-full max-w-2xl dark:format-invert sm:format-base lg:format-lg"
            >
                <header class="not-format mb-4 lg:mb-6">
                    <address class="mb-6 flex items-center not-italic">
                        <div
                            class="mr-3 inline-flex items-center text-sm text-gray-900 dark:text-white"
                        >
                            <img
                                class="mr-4 h-16 w-16 rounded-full"
                                src="https://flowbite.com/docs/images/people/profile-picture-2.jpg"
                                alt="Jese Leos"
                            />
                            <div>
                                <a
                                    href="/authors/{{ $post->author->id }}"
                                    rel="author"
                                    class="text-xl font-bold text-gray-900 dark:text-white"
                                >
                                    {{ $post->author->name }}
                                </a>
                                <p
                                    class="text-base text-gray-500 dark:text-gray-400"
                                >
                                    {{ $post["date"] }}
                                </p>
                            </div>
                        </div>
                    </address>
                    <h1
                        class="mb-4 text-3xl font-extrabold leading-tight text-gray-900 dark:text-white lg:mb-6 lg:text-4xl"
                    >
                        {{ $post["title"] }}
                    </h1>
                </header>
                <p>
                    {{ $post["body"] }}
                </p>
                <a href="/posts" class="font-medium text-blue-500">
                    &laquo; Back to posts
                </a>
            </article>
        </div>
    </main>
</x-layout>
