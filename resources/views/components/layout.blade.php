<!DOCTYPE html>
<title>Blog from scratch</title>

<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">
<script defer src="https://unpkg.com/alpinejs@3.5.1/dist/cdn.min.js"></script>

<body style="font-family: Open Sans,sans-serif">
    <section class="px-6 py-8 ">
        <nav class="flex justify-between items-center">
            <div>
                <a href="/">
                    <img src="/images/logo.svg" alt="Laracasts logo" width="165" height="16">
                </a>
            </div>

            <div>
                <a href="/" class="text-xs  font-bold uppercase">Home Page</a>

                <a href="#"
                    class="px-3 py-3 uppercase bg-blue-500 ml-3 text-xs font-semibold text-white rounded-full">Subscribe
                    for updates</a>
            </div>
        </nav>

        {{ $slot }}


        <footer class="py-16 px-10 mt-15 text-center bg-gray-100 border border-black border-opacity-5 rounded-xl">
            <img src="/images/lary-newsletter-icon.png" alt="Larry" class="mx-auto" style="width:145px;">
            <h5 class="text-3xl">Stay in touch with the latest posts</h5>
            <p class="text-sm">Promise to keep the mailbox clean. No bugs.</p>

            <div class="mt-10">
                <div class="relative inline-block mx-auto  py-3 px-5 rounded-full bg-gray-200">
                    <img src="/images/mailbox-icon.svg" alt="mailbox">

                    <form method="POST" action="#" class="flex text-sm">
                        <input type="text" placeholder="Your email address" class="pl-4 bg-transparent">
                        <button type="submit"
                            class="px-3 py-3 uppercase bg-blue-500 ml-3 text-xs font-semibold text-white rounded-full">Subscribe</button>
                    </form>
                </div>
            </div>
        </footer>
    </section>

    {{-- Flash message die met Alpine is geanimeerd --}}
    <x-flash />
</body>
