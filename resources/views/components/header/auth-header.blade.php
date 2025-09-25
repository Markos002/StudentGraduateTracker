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


    {{-- MOBILE NAV --}}
    <div class="relative flex flex-col lg:hidden items-center justify-center gap-2 font-bold">
        {{-- Menu Button --}}
        <button id="menu-btn" class="p-2 rounded-md border border-blue-500">
            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24">
                <path fill="none" stroke="#f70202" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M3 6h18M3 12h18M3 18h18" />
            </svg>
        </button>

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
