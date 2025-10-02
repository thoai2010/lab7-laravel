@props(['label', 'name', 'type' => 'text', 'value' => ''])

<div class="mb-3">
    <label class="block mb-1">{{ $label }}</label>
    <input type="{{ $type }}" name="{{ $name }}" value="{{ old($name, $value) }}"
           class="border rounded w-full p-2">
    @error($name)
        <div class="text-red-600 text-sm">{{ $message }}</div>
    @enderror
</div>
