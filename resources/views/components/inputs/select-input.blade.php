@props([
    'id'=>'',
    'name'=>'',
    'label'=>'',
    'options'=>[],
    'selected'=>null,
])

<div class="relative w-full text-black bg-white rounded-md py-2 space-y-3">
    @if($label)
        <label for="{{ $id }}" class="block text-sm font-medium text-gray-700">
            {{ $label }}
        </label>
    @endif

    <select id="{{ $id }}" name="{{ $name }}"
        {{ $attributes->merge(['class' => 'mt-1 block w-full rounded-md border-black shadow-sm py-3 
        focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm']) }}>
        
        <option value="" disabled {{ !$selected ? 'selected' : '' }}> Select {{ $label }} </option>

        @foreach (array_slice($options, 1) as $option)
            <option value="{{ $option }}" {{ $selected == $option ? 'selected' : '' }}>
                {{ $option }}
            </option>
        @endforeach
    </select>
</div>
