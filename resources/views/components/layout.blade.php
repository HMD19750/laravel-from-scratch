<!DOCTYPE html>
<title>Blog from scratch</title>

<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">
<script defer src="https://unpkg.com/alpinejs@3.5.1/dist/cdn.min.js"></script>

<style>
    html {
        scroll-behavior: smooth;
    }
</style>

<body style="font-family: Open Sans,sans-serif">
    <section class="px-6 py-8 ">
        <nav class="flex items-center justify-between">
            <div>
                <a href="/">
                    <img src="/images/logo.svg" alt="Laracasts logo" width="165" height="16">
                </a>
            </div>

            <div class="flex items-center mt-8 md:mt-0">
                @guest
                <a href="/register" class="text-xs font-bold uppercase">Register</a>
                <a href="/login" class="ml-6 text-xs font-bold uppercase">Log in</a>
                @else

                <x-dropdown>
                    <x-slot name="trigger">
                        <button class="pl-3 text-xs font-bold uppercase">Welcome {{ auth()->user()->name }}</button>
                    </x-slot>
                    @if(auth()->user()->can('admin'))
                    <x-dropdown-item href="/admin/posts" :active="request()->is('admin/posts')">Dashboard</x-dropdown-item>
                    <x-dropdown-item href="/admin/posts/create" :active="request()->is('admin/posts/create')">New post</x-dropdown-item>
                    @endif
                    <x-dropdown-item href="#" x-data="{}" @click.prevent="document.querySelector('#logout-form').submit()">Logout</x-dropdown-item>

                    <form id="logout-form" method="POST" action="/logout" class="hidden">
                        @csrf
                    </form>

                </x-dropdown>



                @endguest

                <a href="#newsletter"
                    class="px-3 py-3 ml-3 text-xs font-semibold text-white uppercase bg-blue-500 rounded-full">Subscribe
                    for updates</a>
            </div>
        </nav>

        {{ $slot }}


        <footer id="newsletter"
            class="px-10 py-16 text-center bg-gray-100 border border-black mt-15 border-opacity-5 rounded-xl">
            <img src="/images/lary-newsletter-icon.png" alt="Larry" class="mx-auto" style="width:145px;">
            <h5 class="text-3xl">Stay in touch with the latest posts</h5>
            <p class="text-sm">Promise to keep the mailbox clean. No bugs.</p>

            <div class="mt-10 ">
                <div class="relative inline-block px-5 py-3 mx-auto bg-gray-200 rounded-full">
                    <div class="flex">
                    <img src="/images/mailbox-icon.svg" alt="mailbox">

                    <form method="POST" action="/newsletter" class="flex text-sm">
                        @csrf

                        <div>
                            <input type="email" name="email" id="email" placeholder="Your email address"
                                class="pl-4 pt-2 bg-transparent">

                            @error('email')
                                <span class="text-xs text-red-500">{{ $message }}</span>
                            @enderror
                        </div>

                        <button type="submit"
                            class="px-3 py-3 ml-3 text-xs font-semibold text-white uppercase bg-blue-500 rounded-full">Subscribe</button>
                    </form>
                </div>
                </div>
            </div>
        </footer>
    </section>

    {{-- Flash message die met Alpine is geanimeerd --}}
    <x-flash />
</body>
