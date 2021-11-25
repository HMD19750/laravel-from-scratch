@props(['category'])

<a href="/?category={{$category->slug}}"
    class="py-1 px-3 border rounded-full font-semibold border-blue-300 text-blue-300 text-xs uppercase">
    {{ $category->name }}
</a>
