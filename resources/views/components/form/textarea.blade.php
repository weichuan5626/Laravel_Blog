@props(['name'])

<x-form.field>
    <x-form.label name="{{ $name }}"></x-form.label>

    <textarea class="w-full p-2 border border-gray-400"
           id="{{ $name }}"
           name="{{ $name }}"
           required>{{ old($name) }}</textarea>

    <x-form.error name="{{ $name }}"></x-form.error>
</x-form.field>