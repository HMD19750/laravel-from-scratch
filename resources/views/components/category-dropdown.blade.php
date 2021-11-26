<x-dropdown>

    <x-slot name="trigger">
        <button @click="show=!show" class="font-semibold text-left flex pl-3  w-full">
            {{ isset($currentCategory) ? ucwords($currentCategory->name) : 'Categories' }}
            <x-down-arrow class="absolute pointer-events-none" style="right:12px;"></x-down-arrow>
        </button>
    </x-slot>

    <x-dropdown-item
        href="/?{{ http_build_query(request()->except('category','page')) }}"
        :active="request()->routeIs('home')"
        >All
    </x-dropdown-item>

    @foreach($categories as $category)

        <x-dropdown-item
            href="/?category={{$category->slug}}&{{ http_build_query(request()->except('category','page')) }}"
            :active='request()->is("categories/{$category->slug}")'>
            {{ ucwords($category->name) }}
        </x-dropdown-item>
    @endforeach
</x-dropdown>
