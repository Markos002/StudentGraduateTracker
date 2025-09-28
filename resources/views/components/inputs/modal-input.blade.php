@props([
    'type' => "text",
    'id' => "",
    'label' => "",
    'name' => "",
    'placeholder' => ''
])

<div {{ $attributes->merge(['class' => 'relative w-full text-black bg-white rounded-md py-2 space-y-3']) }}>
    <label for="{{$label }}">{{$label }}</label>
    <input
        type="{{ $type }}"
        id="{{ $id }}"
        name="{{ $name ?: $id }}"   
        placeholder="{{ $placeholder }}" 
        class="border border-black peer mt-0.5 py-3 w-full rounded shadow-sm sm:text-sm focus:outline-none focus:ring-0 focus:border-black
        "
    />
</div>