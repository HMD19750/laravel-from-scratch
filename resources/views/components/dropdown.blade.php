@props(['trigger'])

<div x-data="{ show : false}" @click.away="show=false" class="relative py-2 pr-2 text-sm font-semibold bg-gray-100 rounded-xl ">

    {{-- Trigger --}}
<div @click="show = !show">
    {{ $trigger }}
</div>
    {{-- Links --}}
    <div x-show="show" class="absolute w-full my-4 overflow-auto bg-gray-100 rounded-xl max-h-52" style="display:none">
        {{ $slot }}
    </div>

</div>
