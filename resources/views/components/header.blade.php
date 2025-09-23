@props([
    'headerImage' => null,
    'navigations' => [],
    'contacts'
])

<div class="flex justify-between gap-4 w-full">
    {{-- Row 1: Header Image --}}
    <div class="flex items-center justify-center h-8">
        @if ($headerImage)
            <img src="{{ asset('images/' . $headerImage) }}" 
                alt="Header Image" 
                class="w-full h-full object-cover rounded">
        @else
            <div class="w-full h-full bg-gray-200 flex items-center justify-center rounded">
                <span class="text-gray-500">Header not found;</span>
            </div>
        @endif
    </div>

    {{-- Row 2: Navigation Links --}}
    <div class="hidden lg:flex items-center justify-center gap-10 font-bold">
        @foreach ($navigations as $nav)
            <a href="#{{ $nav['ids'] }}" class="text-black">
                {{ $nav['label'] }}
            </a>
        @endforeach
    </div>

    {{-- Row 3: Contact Links --}}
    <div class="hidden lg:flex items-center justify-center border border-black rounded-xl px-5">
        @foreach ($contacts as $contact)
            <a href="#{{ $contact['ids'] }}" class="text-black">
                {{ $contact['label'] }}
            </a>
        @endforeach
    </div>

    {{-- MOBILE NAV --}}
    <div class="relative flex flex-col lg:hidden items-center justify-center gap-2 font-bold">
        {{-- Menu Button --}}
        <button id="menu-btn" class="p-2 rounded-md border border-blue-500">
            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24">
                <path fill="none" stroke="#f70202" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M3 6h18M3 12h18M3 18h18" />
            </svg>
        </button>

        {{-- Dropdown Nav Links --}}
        <div id="mobile-nav" 
            class="hidden fixed inset-0 bg-white flex flex-col items-center justify-center gap-8 font-bold shadow-lg z-40 
                    transform -translate-y-full transition-transform duration-500 ease-in-out">
            <button id="close-btn" class="absolute top-5 right-5 text-5xl font-bold text-red-600">&times;</button>

            @foreach ($navigations as $nav)
                <a id="click" href="#{{ $nav['ids'] }}" class="text-black text-xl">
                    {{ $nav['label'] }}
                </a>
            @endforeach
            @foreach ($contacts as $contact)
                <a id="#{{ $contact['ids'] }}" class="text-black text-xl border border-black rounded-xl px-5 py-2">
                    {{ $contact['label'] }}
                </a>
            @endforeach
        </div>


    </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", () => {
        const menuBtn = document.getElementById("menu-btn");
        const closeBtn = document.getElementById("close-btn");
        const mobileNav = document.getElementById("mobile-nav");
        const id = document.getElementById("click");

        if (id) {
            id.addEventListener("click", () => {
                mobileNav.classList.remove("translate-y-0");
                mobileNav.classList.add("-translate-y-full");

                setTimeout(() => {
                    mobileNav.classList.add("hidden");
                }, 500); 
            });
        }

        menuBtn.addEventListener("click", () => {
            mobileNav.classList.remove("hidden");
            setTimeout(() => {
                mobileNav.classList.remove("-translate-y-full");
                mobileNav.classList.add("translate-y-0");
            }, 10);
        });

        closeBtn.addEventListener("click", () => {
            mobileNav.classList.remove("translate-y-0");
            mobileNav.classList.add("-translate-y-full");

            setTimeout(() => {
                mobileNav.classList.add("hidden");
            }, 500); 
        });

        
    });
</script>
