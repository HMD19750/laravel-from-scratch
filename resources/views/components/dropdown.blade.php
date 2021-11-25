@props(['trigger'])

<div x-data="{ show : false}" @click.away="show=false"
    class="bg-gray-100 rounded-xl py-2  pr-2 text-sm font-semibold w-32">

    {{-- Trigger --}}

    {{ $trigger }}

    {{-- Links --}}
    <div x-show="show" class="absolute my-4 bg-gray-100 w-full rounded-xl" style="display:none">
        {{ $slot }}
    </div>
</div>
