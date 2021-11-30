<header class="max-w-4xl mx-auto mt-20 text-center">

    <div class="max-w-xl mx-auto">
        <h1 class="text-4xl">Latest <span class="text-blue-500">Laravel From Scratch</span> News</h1>


    </div>

    <div class="flex items-start justify-center mt-4 space-x-4">
        <!-- Category -->
        <span class="relative inline-flex items-start inline-block w-32">
            <x-category-dropdown />
        </span>



        <!-- Search -->
        <span class="relative inline-flex items-center inline-block px-3 py-2 bg-gray-100 rounded-xl">
            <form method="GET" action="#">
                @if(request('category'))
                    <input type="hidden" name="category" value="{{ request('category') }}">    {{-- Voor search als al category is geselecteerd  --}}
                @endif
                <input type="text" name="search" placeholder="Find something"
                    class="text-sm font-semibold placeholder-black bg-transparent " value="{{ request('search')  }}">
            </form>
        </span>
    </div>

</header>
