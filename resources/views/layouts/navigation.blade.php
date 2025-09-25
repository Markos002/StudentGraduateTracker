<nav x-data="{ open: false }" class="bg-[#F3F3F3] border-r border-gray-200 w-64 min-h-screen flex flex-col">
    <!-- Logo Section -->
    <div class="p-6 border-b border-gray-200">
        <!-- Logo -->
        <div class="shrink-0 flex place-content-center">
            <a href="{{ route('dashboard') }}">
                <x-application-logo class="block h-9 w-auto fill-current text-gray-800" />
            </a>
        </div>
    </div>

    <!-- Main Navigation -->
    <div class="py-6">
        <nav class="space-y-2 px-4">
            <!-- Dashboard -->
            <a href="{{ route('dashboard') }}" 
               class="flex items-center px-4 py-3 text-sm font-medium rounded-lg transition-colors duration-200 {{ request()->routeIs('dashboard') ? 'bg-white text-black' : 'text-gray-700 hover:bg-gray-100' }}">
               <svg class="w-5 h-5 mr-5" xmlns="http://www.w3.org/2000/svg" width="77" height="77" viewBox="0 0 24 24">
                    <g fill="none" fill-rule="evenodd">
                        <path d="m12.593 23.258l-.011.002l-.071.035l-.02.004l-.014-.004l-.071-.035q-.016-.005-.024.005l-.004.01l-.017.428l.005.02l.01.013l.104.074l.015.004l.012-.004l.104-.074l.012-.016l.004-.017l-.017-.427q-.004-.016-.017-.018m.265-.113l-.013.002l-.185.093l-.01.01l-.003.011l.018.43l.005.012l.008.007l.201.093q.019.005.029-.008l.004-.014l-.034-.614q-.005-.018-.02-.022m-.715.002a.02.02 0 0 0-.027.006l-.006.014l-.034.614q.001.018.017.024l.015-.002l.201-.093l.01-.008l.004-.011l.017-.43l-.003-.012l-.01-.01z" />
                        <path fill="#000" d="M9 13a2 2 0 0 1 2 2v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4a2 2 0 0 1 2-2zm10 0a2 2 0 0 1 2 2v4a2 2 0 0 1-2 2h-4a2 2 0 0 1-2-2v-4a2 2 0 0 1 2-2zM9 3a2 2 0 0 1 2 2v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2zm10 0a2 2 0 0 1 2 2v4a2 2 0 0 1-2 2h-4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2z" />
                    </g>
                </svg>
                {{ __('Dashboard') }}
            </a>

            <!-- Insights -->
            <a href="{{ route('dashboard') }}" 
               class="flex items-center px-4 py-3 text-sm font-medium rounded-lg transition-colors duration-200 {{ request()->routeIs('dashboard') ? 'bg-white text-black' : 'text-gray-700 hover:bg-gray-100' }}">
                <svg class="w-5 h-5 mr-5" xmlns="http://www.w3.org/2000/svg" width="77" height="77" viewBox="0 0 24 24">
                    <path fill="#000" d="M6 13H2c-.6 0-1 .4-1 1v8c0 .6.4 1 1 1h4c.6 0 1-.4 1-1v-8c0-.6-.4-1-1-1m16-4h-4c-.6 0-1 .4-1 1v12c0 .6.4 1 1 1h4c.6 0 1-.4 1-1V10c0-.6-.4-1-1-1m-8-8h-4c-.6 0-1 .4-1 1v20c0 .6.4 1 1 1h4c.6 0 1-.4 1-1V2c0-.6-.4-1-1-1" />
                </svg>
                {{ __('Insights') }}
            </a>

            <!-- Students -->
            <a href="{{ route('dashboard') }}" 
               class="flex items-center px-4 py-3 text-sm font-medium rounded-lg transition-colors duration-200 {{ request()->routeIs('dashboard') ? 'bg-white text-black' : 'text-gray-700 hover:bg-gray-100' }}">
                <svg class="w-5 h-5 mr-5" xmlns="http://www.w3.org/2000/svg" width="77" height="77" viewBox="0 0 20 20">
                    <path fill="#000" d="M7 8a3 3 0 1 0 0-6a3 3 0 0 0 0 6m7.5 1a2.5 2.5 0 1 0 0-5a2.5 2.5 0 0 0 0 5M1.615 16.428a1.22 1.22 0 0 1-.569-1.175a6.002 6.002 0 0 1 11.908 0c.058.467-.172.92-.57 1.174A9.95 9.95 0 0 1 7 18a9.95 9.95 0 0 1-5.385-1.572M14.5 16h-.106c.07-.297.088-.611.048-.933a7.47 7.47 0 0 0-1.588-3.755a4.5 4.5 0 0 1 5.874 2.636a.82.82 0 0 1-.36.98A7.47 7.47 0 0 1 14.5 16" />
                </svg>
                {{ __('Students') }}
            </a>

            <!-- Employment -->
            <a href="{{ route('dashboard') }}" 
               class="flex items-center px-4 py-3 text-sm font-medium rounded-lg transition-colors duration-200 {{ request()->routeIs('dashboard') ? 'bg-white text-black' : 'text-gray-700 hover:bg-gray-100' }}">
                <svg class="w-5 h-5 mr-5" xmlns="http://www.w3.org/2000/svg" width="77" height="77" viewBox="0 0 14 14">
                    <path fill="#000" fill-rule="evenodd" d="M5 .02a1.75 1.75 0 0 0-1.75 1.75V3H1.5A1.5 1.5 0 0 0 0 4.5v8A1.5 1.5 0 0 0 1.5 14h11a1.5 1.5 0 0 0 1.5-1.5v-8A1.5 1.5 0 0 0 12.5 3h-1.75V1.77A1.75 1.75 0 0 0 9 .02zM9.25 3V1.77A.25.25 0 0 0 9 1.52H5a.25.25 0 0 0-.25.25V3z" clip-rule="evenodd" />
                </svg>
                {{ __('Employment') }}
            </a>
        </nav>
    </div>

    <!-- Divider -->
    <div class="border-t border-gray-200"></div>

    <!-- Bottom Navigation -->
    <div class="p-4 space-y-2 flex-1">
        <!-- Settings -->
        <a href="{{ route('dashboard') }}" 
           class="flex items-center px-4 py-3 text-sm font-medium rounded-lg transition-colors duration-200 {{ request()->routeIs('dashboard') ? 'bg-white text-black' : 'text-gray-700 hover:bg-gray-100' }}">
            <svg class="w-5 h-5 mr-5" xmlns="http://www.w3.org/2000/svg" width="77" height="77" viewBox="0 0 24 24">
                <path fill="#000" fill-rule="evenodd" d="M14.208 4.83q.68.21 1.3.54l1.833-1.1a1 1 0 0 1 1.221.15l1.018 1.018a1 1 0 0 1 .15 1.221l-1.1 1.833q.33.62.54 1.3l2.073.519a1 1 0 0 1 .757.97v1.438a1 1 0 0 1-.757.97l-2.073.519q-.21.68-.54 1.3l1.1 1.833a1 1 0 0 1-.15 1.221l-1.018 1.018a1 1 0 0 1-1.221.15l-1.833-1.1q-.62.33-1.3.54l-.519 2.073a1 1 0 0 1-.97.757h-1.438a1 1 0 0 1-.97-.757l-.519-2.073a7.5 7.5 0 0 1-1.3-.54l-1.833 1.1a1 1 0 0 1-1.221-.15L4.42 18.562a1 1 0 0 1-.15-1.221l1.1-1.833a7.5 7.5 0 0 1-.54-1.3l-2.073-.519A1 1 0 0 1 2 12.72v-1.438a1 1 0 0 1 .757-.97l2.073-.519q.21-.68.54-1.3L4.27 6.66a1 1 0 0 1 .15-1.221L5.438 4.42a1 1 0 0 1 1.221-.15l1.833 1.1q.62-.33 1.3-.54l.519-2.073A1 1 0 0 1 11.28 2h1.438a1 1 0 0 1 .97.757zM12 16a4 4 0 1 0 0-8a4 4 0 0 0 0 8" />
            </svg>
            {{ __('Settings') }}
        </a>

        <!-- Logout -->
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="flex items-center w-full px-4 py-3 text-sm font-medium rounded-lg transition-colors duration-200 text-gray-700 hover:bg-gray-100">
                <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path>
                </svg>
                {{ __('Logout') }}
            </button>
        </form>
    </div>

    <!-- User Info -->
    <div class="p-4 border-t border-gray-200">
        <div class="flex items-center">
            <div class="w-8 h-8 bg-gray-300 rounded-full flex items-center justify-center">
                <svg class="w-5 h-5 text-gray-600" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path>
                </svg>
            </div>
            <div class="ml-3">
                <p class="text-sm font-medium text-gray-700">{{Auth::user()->last_name . ", " .Auth::user()->first_name}}</p>
            </div>
        </div>
    </div>

    <!-- Mobile Menu Toggle (Hidden on Desktop) -->
    <div class="sm:hidden">
        <button @click="open = ! open" class="fixed top-4 right-4 z-50 inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
            <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>
    </div>

    <!-- Mobile Responsive Menu -->
    <div :class="{'translate-x-0': open, '-translate-x-full': ! open}" class="sm:hidden fixed inset-y-0 left-0 z-40 w-64 bg-white border-r border-gray-200 transform transition-transform duration-300 ease-in-out">
        <!-- Mobile menu content (same as desktop but with mobile-specific styling) -->
        <div class="p-6 border-b border-gray-200">
            <span class="text-xl font-bold text-gray-800">TBA</span>
        </div>
        
        <div class="py-6">
            <nav class="space-y-2 px-4">
                <a href="{{ route('dashboard') }}" class="flex items-center px-4 py-3 text-sm font-medium rounded-lg text-gray-700 hover:bg-gray-100">
                    <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"></path>
                    </svg>
                    {{ __('Dashboard') }}
                </a>
                <!-- Add other mobile nav items similarly -->
            </nav>
        </div>
    </div>

    <!-- Mobile Backdrop -->
    <div x-show="open" @click="open = false" class="sm:hidden fixed inset-0 z-30 bg-black bg-opacity-25" x-transition:enter="transition-opacity ease-linear duration-300" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="transition-opacity ease-linear duration-300" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0"></div>
</nav>