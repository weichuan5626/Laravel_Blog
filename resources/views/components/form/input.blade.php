@props(['name', 'type' => 'text'])

<x-form.field>
    <x-form.label name="{{ $name }}"></x-form.label>

    <input class="w-full p-2 border border-gray-400"
           type="{{ $type }}"
           id="{{ $name }}"
           name="{{ $name }}"
           value="{{ old($name) }}"
           required>

    <x-form.error name="{{ $name }}"></x-form.error>
</x-form.field>