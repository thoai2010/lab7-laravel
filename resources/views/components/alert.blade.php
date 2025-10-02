@props(['type' => 'info'])

<div class="p-3 rounded mb-3
    @class([
        'bg-green-100 text-green-800' => $type === 'success',
        'bg-red-100 text-red-800' => $type === 'error',
        'bg-yellow-100 text-yellow-800' => $type === 'warning',
        'bg-blue-100 text-blue-800' => $type === 'info',
    ])">
    {{ $slot }}
</div>
