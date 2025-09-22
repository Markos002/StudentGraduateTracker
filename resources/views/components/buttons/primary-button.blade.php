<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center px-4 py-2 bg-[#D06139] border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-[#e02a1d] focus:bg-[#e02a1d]  active:bg-[#e02a1d]  focus:outline-none focus:ring-2 focus:ring-[#e02a1d] focus:ring-offset-2 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>
