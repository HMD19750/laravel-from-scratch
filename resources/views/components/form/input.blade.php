
@props(['name'])

<x-form.field>

    <x-form.label name="{{ $name }}" />

    <input
        class="w-full p-2 border border-gray-200 rounded"
        name="{{ $name }}"
        id="{{ $name }}"
        value="{{ old($name) }}"
        required
        {{ $attributes }}
    >

    <x-form.error name="{{ $name }}" />

</x-form.field>
