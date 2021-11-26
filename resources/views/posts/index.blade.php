<x-layout>

    @include('posts._header')

    <main class="mx-auto max-w-6xl mt-10 space-y-6">

        @if($posts->count())

            <x-posts-grid :posts="$posts"/>

            {{ $posts->links() }}

        @else
            <p class="text-center">No posts yet!!!</p>
        @endif
    </main>
</x-layout>
