@props(['name'])

<x-form.field>
    <x-form.label name="{{ $name }}"></x-form.label>

    <input class="w-full p-2 border border-gray-200 rounded"
           id="{{ $name }}"
           name="{{ $name }}"
           value="{{ old($name) }}"
           required
           {{ $attributes }}
           >

    <x-form.error name="{{ $name }}"></x-form.error>
</x-form.field>