@props(['label' => '', 'value' => ''])

<div class="flex flex-col gap-1 border border-gray-500 rounded-lg p-2">
    <div class="text-xs text-gray-400 font-bold">{{ $label }}</div>
    <div class="text-sm text-gray-800">{{ $slot }}</div>
</div>