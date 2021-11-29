@auth
    <x-panel>
        <form method="POST" action="/posts/{{ $post->slug }}/comments">
            @csrf

            <header class="flex align-tems-center">
                <img src="https://i.pravatar.cc/60?u={{ auth()->id() }}" alt="" width="60" height="60" class="rounded-full">
                <h2 class="ml-3 ">Want to participate?</h2>
            </header>

            <div class="mt-6">
                <textarea name="body" class="w-full text-sm focus:outline-none focus:ring" rows="5"
                    placeholder="Quick, think of something to say!" required></textarea>

                @error('body')
                <span class="text-red-500 text-xs mt-1"> {{ $message }}</span>
                @enderror

            </div>

            <div class="flex justify-end mt-6 pt-6 border-t border-grey-200">
                <x-form.button>Post</x-form.button>
            </div>
        </form>
    </x-panel>
@else
    <p class="font-semibold text-blue-500">
        <a href="/register" class="text-blue-600 hover:underline">Register</a> or <a href="/login"
            class="text-blue-600 hover:underline">login</a> to leave a comment.
    </p>
@endauth
