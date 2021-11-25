<header class="mt-20 text-center max-w-4xl mx-auto">

    <div class="max-w-xl mx-auto">
        <h1 class="text-4xl">Latest <span class="text-blue-500">Laravel From Scratch</span> News</h1>


    </div>

    <div class="flex justify-center mt-4 space-x-4 items-start">
        <!-- Category -->
        <span class="relative inline-block  inline-flex items-start ">

            <x-dropdown>

                <x-slot name="trigger">
                    <button @click="show=!show" class="font-semibold text-left flex pl-3  w-full">
                        {{ isset($currentCategory) ? ucwords($currentCategory->name) : 'Categories' }}
                        <x-down-arrow class="absolute pointer-events-none" style="right:12px;"></x-down-arrow>
                    </button>
                </x-slot>

                <x-dropdown-item href="/" :active="request()->routeIs('home')">All</x-dropdown-item>

                @foreach($categories as $category)
                <x-dropdown-item href="/categories/{{$category->slug}}"
                    :active='request()->is("categories/{$category->slug}")'>
                    {{ ucwords($category->name) }}
                </x-dropdown-item>
                @endforeach
            </x-dropdown>


        </span>
        <!-- Other filters -->
        <span class="relative inline-block  inline-flex items-center">
            <select class="bg-gray-100 rounded-xl py-2 pl-3 pr-2 text-sm font-semibold">
                <option value="category" disable selected>Other filters</option>
                <option value="foo">Foo</option>
                <option value="bar">Bar</option>
            </select>

        </span>
        <!-- Search -->
        <span class="relative inline-block rounded-xl inline-flex items-center px-3 py-2 bg-gray-100">
            <form method="GET" action="#">
                <input type="text" name="search" placeholder="Find something"
                    class="font-semibold text-sm bg-transparent placeholder-black ">
            </form>
        </span>
    </div>

</header>
