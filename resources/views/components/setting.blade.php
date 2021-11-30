@props(['heading'])

<section class="max-w-4xl py-8 mx-auto">

    <h1 class="pb-2 mb-4 mb-8 text-lg font-bold border-b">
        {{ $heading }}
    </h1>

    <div class="flex">
        <aside class="w-48">
            <h2 class="mb-4 font-semibold">Links</h2>
            <ul>
                <li>
                    <a href="/admin/posts/create" class="{{ request()->is('admin/posts/create') ?'text-blue-500' : '' }}">New Post</a>
                </li>
                <li>
                    <a href="/admin/posts/dashboard" class="{{ request()->is('admin/posts/dashboard') ?'text-blue-500' : '' }}">Dashboard</a>
                </li>
            </ul>
        </aside>

        <main class="flex-1">
            <x-panel>

                {{ $slot }}

            </x-panel>
        </main>
    </div>
</section>
