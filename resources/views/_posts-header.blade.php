<header class="mt-20 text-center max-w-4xl mx-auto">

    <div class="max-w-xl mx-auto">
        <h1 class="text-4xl">Latest <span class="text-blue-500">Laravel From Scratch</span> News</h1>
        <h2 class="inline-flex mt-3">
            By Hubert van Dongen
            <img src="./images/lary-head.svg"></img>
        </h2>
        <p class="text-sm mt-14">
            This is the blog of Laracasts.com. Most likely we are not going to maintain this blog. So be aware. I have
            warned you!!
        </p>
    </div>

    <div class="flex justify-center mt-8 space-x-4 items-start">
        <!-- Category -->
        <span class="relative inline-block  inline-flex items-start ">

            <div
                x-data="{ show : false}"
                @click.away="show=false"
                class="bg-gray-100 rounded-xl py-2  pr-2 text-sm font-semibold w-32"
                >
                <button
                    @click="show=!show"
                    class="font-semibold text-left flex pl-3  w-full"
                    >
                    {{ isset($currentCategory) ? ucwords($currentCategory->name) : 'Categories' }}
                    <svg class="transform -rotate-90 absolute pointer-events-none " style="right:12px;" width="22" height="22" viewBox="0 0 22 22">
                        <g fill="none" fill-rule="evenodd">
                            <path fill="#222" d="M13.854 7.224l-3.847 3.856 3.847 3.856-1.184 1.184-5.04-5.04 5.04-5.04z"></path>
                        </g>
                    </svg>
                </button>
                <div x-show="show" class="absolute my-4 bg-gray-100 w-full rounded-xl" style="display:none">

                    <a
                        href="/"
                        class="block text-left px-3 text-sm font-semibold leading-6 hover:bg-blue-500 focus:bg-blue-500 hover:text-white focus:text-white"
                    >
                    All
                    </a>

                    @foreach($categories as $category)
                    <a
                        href="/categories/{{$category->slug}}"
                        class="block text-left px-3 text-sm font-semibold
                                leading-6 hover:bg-blue-500 focus:bg-blue-500 
                                hover:text-white focus:text-white
                                {{ isset($currentCategory)&&$currentCategory->is($category) ? 'bg-blue-500 text-white' :'' }}
                                "
                        >
                        {{ ucwords($category->name) }}
                    </a>
                    @endforeach
                </div>
            </div>


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
