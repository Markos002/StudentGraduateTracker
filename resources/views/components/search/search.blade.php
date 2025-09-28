@props([
    'placeholder' => '',
    'id' => '',
    'type' => 'text',
])

<div class="relative w-full">
    <input 
        {{ $attributes->merge(['class' => 'border-none rounded p-1.5 w-full pl-10 focus:outline-none focus:ring-0 focus:ring-offset-0']) }}
        type="{{ $type }}" 
        id="{{ $id }}" 
        placeholder="{{ $placeholder }}"
    >
    <svg 
        class="absolute left-3 top-1/2 -translate-y-1/2 text-gray-500 pointer-events-none"
        width="19" 
        height="19" 
        viewBox="0 0 19 19" 
        fill="none" 
        xmlns="http://www.w3.org/2000/svg"
    >
        <g opacity="0.5">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M10.9706 14.377C14.2452 12.9857 15.7714 9.20344 14.3793 5.92897C12.9872 2.6545 9.20401 1.12783 5.92933 2.51905C2.65465 3.91028 1.12852 7.69257 2.52062 10.967C3.91271 14.2415 7.69588 15.7682 10.9706 14.377Z" stroke="black" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
            <path fill-rule="evenodd" clip-rule="evenodd" d="M13.0037 13.0027L18 18.0001L13.0037 13.0027Z" fill="white"/>
            <path d="M13.0037 13.0027L18 18.0001" stroke="black" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
        </g>
    </svg>
</div>
