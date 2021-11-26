@props(['post'])

<article
{{ $attributes->merge(['class'=>'transition-colors duration-300 hover:bg-gray-100 border border-black border-opacity-0 hover:border-opacity-5 rounded-xl']) }}
>
    <div class="py-6 px-5 ">
        <div class=" mr-8">
            <img src="/images/illustration-3.png" alt="Illustration1" class="rounded-xl">
        </div>

        <div class="flex-1 flex flex-col justify-between mt-8">
            <header>
                <div class="space-x-4">
                    <x-category-button :category="$post->category" />
                </div>
                <div class="mt-4">
                    <h1 class="text-3xl"><a href="/posts/{{ $post->slug }}">
                        {{ $post->title }}
                    </a></h1>
                    <span class="mt-2 block text-gray-400 text-xs">
                    Published
                    <time class="">{{$post->created_at->diffForHumans()}}</time>
                </span>
                </div>
            </header>
            <div class="text-sm mt-4 space-y-4">
                {!! $post->excerpt !!}

            </div>

            <footer class="flex justify-between items-center mt-8">
                <div class="flex items-center text-sm">
                    <img src="/images/lary-avatar.svg" alt="larry-avatar">
                    <div class="ml-3">
                        <h5 class="font-bold">
                            <a href="/?author={{ $post->author->username }}">
                            {{ $post->author->name }}
                        </a></h5>

                    </div>
                </div>
                <div>
                    <a href="/posts/{{ $post->slug }}" class="py-2 px-8 text-xs font-semibold bg-gray-200 rounded-full">Read more</a>
                </div>
            </footer>
        </div>

    </div>
</article>
