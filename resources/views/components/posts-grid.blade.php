@props(['posts'])

<x-post-featured-card :post="$posts[0]" />

<div class="grid grid-cols-6 ">
    @foreach($posts->skip(1) as $post)
        <x-post-card
            :post="$posts[1]"
            class="{{ $loop->iteration<3 ?'col-span-3' : 'col-span-2' }}"
        />
    @endforeach
</div>
