@props(['post'])

<article class="transition-colors duration-300 hover:bg-gray-100 rounded-xl border border-black border-opacity-0 hover:border-opacity-5">
    <div class="py-6 px-5 flex ">
        <div class="flex-1 mr-8">
            <img src="./images/illustration-1.png" alt="Illustration1" class="rounded-xl">
        </div>

        <div class="flex-1 flex flex-col justify-between">
            <header>
                <div class="space-x-4">
                    <a href="/categories/{{ $post->category->slug }}"
                         class="py-1 px-3 border rounded-full font-semibold border-blue-300 text-blue-300 text-xs uppercase">
                        {{ $post->category->name }}</a>
                </div>
                <div class="mt-4">
                    <h1 class="text-3xl">
                        <a href="/posts/{{ $post->slug }}">
                            {{ $post->title }}
                        </a>
                    </h1>
                    <span class="mt-2 block text-gray-400 text-xs">
                        Published
                        <time class="">{{$post->created_at->diffForHumans()}}</time>
                    </span>
                </div>
            </header>

            <div class="text-sm mt-2">
                <p>{{$post->excerpt}}</p>
            </div>

            <footer class="flex justify-between items-center mt-8">
                <div class="flex items-center text-sm">
                    <img src="./images/lary-avatar.svg" alt="larry-avatar">
                    <div class="ml-3">
                        <h5 class="font-bold">
                            <a href="/authors/{{ $post->author->username }}">
                                {{ $post->author->name }}
                            </a>
                        </h5>
                        <h6>Mascot at Laracasts</h6>
                    </div>
                </div>
                <div>
                    <a href="/posts/{{ $post->slug }}" class="py-2 px-8 text-xs font-semibold bg-gray-200 rounded-full">Read more</a>
                </div>
            </footer>
        </div>

    </div>
</article>