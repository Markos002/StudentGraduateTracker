@props(['icon' => ''])

<button {{ $attributes->merge([
    'type' => 'button',
    'class' => 'justify-center inline-flex items-center px-4 py-1.5 bg-black border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-[#e02a1d] focus:bg-[#e02a1d] active:bg-[#e02a1d] focus:outline-none focus:ring-2 focus:ring-[#e02a1d] focus:ring-offset-2 transition ease-in-out duration-150'
]) }}>
    <div class="flex gap-2 items-center">
        @isset($icon)
        {{ $icon }}
        @endisset
        {{ $slot }}
    </div>
</button>

