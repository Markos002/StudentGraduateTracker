@props([
    'headerImage' => null,
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

    {{-- MOBILE NAV TOGGLE --}}
    <div class="md:hidden relative flex flex-col lg:hidden items-center justify-center gap-2 font-bold h-8">
        <button id="menu-btn" class="p-2 rounded-md">
            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24">
                <path fill="none" stroke="#f70202" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M3 6h18M3 12h18M3 18h18" />
            </svg>
        </button>
    </div>
</div>

{{-- MOBILE NAV PANEL --}}
<div id="mobile-nav" 
     class="hidden fixed inset-0 bg-white bg-opacity-90 text-white flex flex-col items-center justify-start pt-20 transform -translate-y-full transition-transform duration-500 ease-in-out z-50">
    
    {{-- Close button --}}
    <button id="close-btn" class="absolute top-5 right-5 p-2">
            <svg class="w-full h-full max-h-8 max-w-8" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M10.5 12.7357L2.6749 20.5608C2.38213 20.8536 2.00951 21 1.55703 21C1.10456 21 0.731938 20.8536 0.439163 20.5608C0.146387 20.2681 0 19.8954 0 19.443C0 18.9905 0.146387 18.6179 0.439163 18.3251L8.26426 10.5L0.439163 2.6749C0.146387 2.38213 0 2.00951 0 1.55703C0 1.10456 0.146387 0.731938 0.439163 0.439163C0.731938 0.146387 1.10456 0 1.55703 0C2.00951 0 2.38213 0.146387 2.6749 0.439163L10.5 8.26426L18.3251 0.439163C18.6179 0.146387 18.9905 0 19.443 0C19.8954 0 20.2681 0.146387 20.5608 0.439163C20.8536 0.731938 21 1.10456 21 1.55703C21 2.00951 20.8536 2.38213 20.5608 2.6749L12.7357 10.5L20.5608 18.3251C20.8536 18.6179 21 18.9905 21 19.443C21 19.8954 20.8536 20.2681 20.5608 20.5608C20.2681 20.8536 19.8954 21 19.443 21C18.9905 21 18.6179 20.8536 18.3251 20.5608L10.5 12.7357Z" fill="black" fill-opacity="0.55"/></svg>
    </button>

    {{-- Links --}}
    <a href="{{ route('student.dashboard') }}" class="py-3 text-lg text-black hover:text-red-600">Dashboard</a>
    <a href="{{ route('student.dashboard') }}" class="py-3 text-lg text-black hover:text-red-600">Settings</a>


    {{-- Logout --}}
    <form method="POST" action="{{ route('logout') }}" class="mt-6">
        @csrf
        <button type="submit" class="px-6 py-2 bg-red-500 hover:bg-red-700 rounded-lg">
            Logout
        </button>
    </form>
</div>

<script>
    document.addEventListener("DOMContentLoaded", () => {
        const menuBtn = document.getElementById("menu-btn");
        const closeBtn = document.getElementById("close-btn");
        const mobileNav = document.getElementById("mobile-nav");

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
