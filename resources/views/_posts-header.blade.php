<header class="mt-20 text-center max-w-4xl mx-auto">

    <div class="max-w-xl mx-auto">
        <h1 class="text-4xl">Latest <span class="text-blue-500">Laravel From Scratch</span> News</h1>
        <h2 class="inline-flex mt-3">
            By Hubert van Dongen
            <img src="./images/lary-head.svg"></img>
        </h2>
        <p class="text-sm mt-14">
            This is the blog of Laracasts.com. Most likely we are not going to maintain this blog. So be aware. I
            have warned you!!
        </p>
    </div>

    <div class="flex justify-center mt-8 space-x-4">
        <!-- Category -->
        <span class="relative inline-block  inline-flex items-center">
            <select class="bg-gray-100 rounded-xl py-2 pl-3 pr-2 text-sm font-semibold">
                <option value="category" disable selected>Category</option>
                <option value="personal">Personal</option>
                <option value="business">Business</option>
            </select>

        </span>
        <!-- Other filters -->
        <span class="relative inline-block  inline-flex items-center">
            <select class="bg-gray-100 rounded-xl py-2 pl-3 pr-2 text-sm font-semibold">
                <option value="category" disable selected>Other filters</option>
                <option value="foo">Foo</option>
                <option value=bar">Bar</option>
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
