<x-layout>
    <x-slot:title>{{ $title }}</x-slot>
    {{--
        @foreach ($posts as $post)
        <article class="max-w-screen-md py-8 border-b border-gray-500">
        <h2 class="mb-1 text-3xl font-bold tracking-tight text-gray-900 hover:underline">{{ $post['title'] }}</h2>
        <div class="text-base text-gray-500">
        <a href="">{{ $post['author'] }}</a> | {{ $post['date'] }}
        </div>
        <p class="my-4 font-light">
        {{ $post['body'] }}
        </p>
        <a href="/posts/{{ $post['slug'] }}" class="font-medium text-blue-500">Read more &raquo;</a>
        </article>
        @endforeach
    --}}
    <section class="bg-white dark:bg-gray-900">
        <div class="mx-auto max-w-screen-xl px-4 py-8 lg:px-6 lg:py-16">
            <div class="grid gap-8">
                @foreach ($posts as $post)
                    <article
                        class="rounded-lg border border-gray-200 bg-white p-6 shadow-md dark:border-gray-700 dark:bg-gray-800"
                    >
                        <div
                            class="mb-5 flex items-center justify-between text-gray-500"
                        >
                            <span
                                class="inline-flex items-center rounded bg-primary-100 px-2.5 py-0.5 text-xs font-medium text-primary-800 dark:bg-primary-200 dark:text-primary-800"
                            >
                                <svg
                                    class="mr-1 h-3 w-3"
                                    fill="currentColor"
                                    viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg"
                                >
                                    <path
                                        d="M2 6a2 2 0 012-2h6a2 2 0 012 2v8a2 2 0 01-2 2H4a2 2 0 01-2-2V6zM14.553 7.106A1 1 0 0014 8v4a1 1 0 00.553.894l2 1A1 1 0 0018 13V7a1 1 0 00-1.447-.894l-2 1z"
                                    ></path>
                                </svg>
                                Blog
                            </span>
                            <span class="text-sm">
                                {{ $post->created_at->format("j F Y") }}
                            </span>
                        </div>
                        <h2
                            class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white"
                        >
                            <a href="#">{{ $post["title"] }}</a>
                        </h2>
                        <p
                            class="mb-5 font-light text-gray-500 dark:text-gray-400"
                        >
                            {{ $post["body"] }}
                        </p>
                        <div class="flex items-center justify-between">
                            <div class="flex items-center space-x-4">
                                <img
                                    class="h-7 w-7 rounded-full"
                                    src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/jese-leos.png"
                                    alt="Jese Leos avatar"
                                />
                                <span class="font-medium dark:text-white">
                                    {{ $post->author->name }}
                                </span>
                            </div>
                            <a
                                href="/posts/{{ $post["slug"] }}"
                                class="inline-flex items-center font-medium text-primary-600 hover:underline dark:text-primary-500"
                            >
                                Read more
                                <svg
                                    class="ml-2 h-4 w-4"
                                    fill="currentColor"
                                    viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg"
                                >
                                    <path
                                        fill-rule="evenodd"
                                        d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                        clip-rule="evenodd"
                                    ></path>
                                </svg>
                            </a>
                        </div>
                    </article>
                @endforeach
            </div>
        </div>
    </section>
</x-layout>
