<nav x-data="{ open: false }" class="bg-[#F3F3F3] border-r border-gray-200 w-64 min-h-screen flex flex-col">
    <div class="hidden md:flex lg:flex flex-col">
        <!-- Logo Section -->
        <div class="p-6 border-b border-gray-200">
            <!-- Logo -->
            <div class="shrink-0 flex place-content-center">
                <a href="{{ route('admin.dashboard') }}">
                    <x-application-logo class="block h-9 w-auto fill-current text-gray-800" />
                </a>
            </div>
        </div>

        <!-- Main Navigation -->
        <div class="py-6">
            <nav class="space-y-2 px-4">
                <!-- Dashboard -->
                <a href="{{ route('admin.dashboard') }}" 
                class="flex items-center px-4 py-3 text-sm font-medium rounded-lg transition-colors duration-200 {{ request()->routeIs('admin.dashboard') ? 'bg-white text-black' : 'text-gray-700 hover:bg-gray-100' }}">
                    <svg class="w-5 h-5 mr-5" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M12.2222 6.66667C11.9074 6.66667 11.6437 6.56 11.4311 6.34667C11.2185 6.13333 11.1118 5.86963 11.1111 5.55555V1.11111C11.1111 0.796296 11.2178 0.532593 11.4311 0.32C11.6444 0.107408 11.9081 0.000740741 12.2222 0H18.8889C19.2037 0 19.4678 0.106667 19.6811 0.32C19.8944 0.533333 20.0007 0.797037 20 1.11111V5.55555C20 5.87037 19.8933 6.13444 19.68 6.34778C19.4667 6.56111 19.203 6.66741 18.8889 6.66667H12.2222ZM1.11111 11.1111C0.796296 11.1111 0.532593 11.0044 0.32 10.7911C0.107408 10.5778 0.000740741 10.3141 0 10V1.11111C0 0.796296 0.106667 0.532593 0.32 0.32C0.533333 0.107408 0.797037 0.000740741 1.11111 0H7.77778C8.09259 0 8.35667 0.106667 8.57 0.32C8.78333 0.533333 8.88963 0.797037 8.88889 1.11111V10C8.88889 10.3148 8.78222 10.5789 8.56889 10.7922C8.35555 11.0056 8.09185 11.1118 7.77778 11.1111H1.11111ZM12.2222 20C11.9074 20 11.6437 19.8933 11.4311 19.68C11.2185 19.4667 11.1118 19.203 11.1111 18.8889V10C11.1111 9.68518 11.2178 9.42148 11.4311 9.20889C11.6444 8.99629 11.9081 8.88963 12.2222 8.88889H18.8889C19.2037 8.88889 19.4678 8.99555 19.6811 9.20889C19.8944 9.42222 20.0007 9.68592 20 10V18.8889C20 19.2037 19.8933 19.4678 19.68 19.6811C19.4667 19.8944 19.203 20.0007 18.8889 20H12.2222ZM1.11111 20C0.796296 20 0.532593 19.8933 0.32 19.68C0.107408 19.4667 0.000740741 19.203 0 18.8889V14.4444C0 14.1296 0.106667 13.8659 0.32 13.6533C0.533333 13.4407 0.797037 13.3341 1.11111 13.3333H7.77778C8.09259 13.3333 8.35667 13.44 8.57 13.6533C8.78333 13.8667 8.88963 14.1304 8.88889 14.4444V18.8889C8.88889 19.2037 8.78222 19.4678 8.56889 19.6811C8.35555 19.8944 8.09185 20.0007 7.77778 20H1.11111Z" fill="black"/>
                    </svg>
                    {{ __('Dashboard') }}
                </a>

                <!-- Insights -->
                <a href="{{ route('admin.insight') }}" 
                class="flex items-center px-4 py-3 text-sm font-medium rounded-lg transition-colors duration-200 {{ request()->routeIs('admin.insight') ? 'bg-white text-black' : 'text-gray-700 hover:bg-gray-100' }}">
                    <svg class="w-5 h-5 mr-5" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M4.54545 10.9091H0.909091C0.363636 10.9091 0 11.2727 0 11.8182V19.0909C0 19.6364 0.363636 20 0.909091 20H4.54545C5.09091 20 5.45455 19.6364 5.45455 19.0909V11.8182C5.45455 11.2727 5.09091 10.9091 4.54545 10.9091ZM19.0909 7.27273H15.4545C14.9091 7.27273 14.5455 7.63636 14.5455 8.18182V19.0909C14.5455 19.6364 14.9091 20 15.4545 20H19.0909C19.6364 20 20 19.6364 20 19.0909V8.18182C20 7.63636 19.6364 7.27273 19.0909 7.27273ZM11.8182 0H8.18182C7.63636 0 7.27273 0.363636 7.27273 0.909091V19.0909C7.27273 19.6364 7.63636 20 8.18182 20H11.8182C12.3636 20 12.7273 19.6364 12.7273 19.0909V0.909091C12.7273 0.363636 12.3636 0 11.8182 0Z" fill="black"/></svg>
                    {{ __('Insights') }}
                </a>

                <!-- Students -->
                <a href="{{ route('admin.student') }}" 
                class="flex items-center px-4 py-3 text-sm font-medium rounded-lg transition-colors duration-200 {{ request()->routeIs('admin.student') ? 'bg-white text-black' : 'text-gray-700 hover:bg-gray-100' }}">
                    <svg class="w-5 h-5 mr-5" width="30" height="20" viewBox="0 0 30 20" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M20.4545 8.57143C22.7182 8.57143 24.5318 6.65714 24.5318 4.28571C24.5318 1.91429 22.7182 0 20.4545 0C18.1909 0 16.3636 1.91429 16.3636 4.28571C16.3636 6.65714 18.1909 8.57143 20.4545 8.57143ZM9.54545 8.57143C11.8091 8.57143 13.6227 6.65714 13.6227 4.28571C13.6227 1.91429 11.8091 0 9.54545 0C7.28182 0 5.45455 1.91429 5.45455 4.28571C5.45455 6.65714 7.28182 8.57143 9.54545 8.57143ZM9.54545 11.4286C6.36818 11.4286 0 13.1 0 16.4286V20H19.0909V16.4286C19.0909 13.1 12.7227 11.4286 9.54545 11.4286ZM20.4545 11.4286C20.0591 11.4286 19.6091 11.4571 19.1318 11.5C20.7136 12.7 21.8182 14.3143 21.8182 16.4286V20H30V16.4286C30 13.1 23.6318 11.4286 20.4545 11.4286Z" fill="black"/></svg>
                    {{ __('Students') }}
                </a>

                <!-- Employment -->
                <a href="{{ route('admin.alumnus') }}" 
                class="flex items-center px-4 py-3 text-sm font-medium rounded-lg transition-colors duration-200 {{ request()->routeIs('dashboard') ? 'bg-white text-black' : 'text-gray-700 hover:bg-gray-100' }}">
                <svg class="w-5 h-5 mr-5" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M2 20C1.45 20 0.979333 19.794 0.588 19.3821C0.196667 18.9702 0.000666667 18.4744 0 17.8947V6.31579C0 5.73684 0.196 5.2414 0.588 4.82947C0.98 4.41754 1.45067 4.21123 2 4.21053H6V2.10526C6 1.52632 6.196 1.03088 6.588 0.618947C6.98 0.207018 7.45067 0.000701754 8 0H12C12.55 0 13.021 0.206316 13.413 0.618947C13.805 1.03158 14.0007 1.52702 14 2.10526V4.21053H18C18.55 4.21053 19.021 4.41684 19.413 4.82947C19.805 5.2421 20.0007 5.73754 20 6.31579V17.8947C20 18.4737 19.8043 18.9695 19.413 19.3821C19.0217 19.7947 18.5507 20.0007 18 20H2ZM8 4.21053H12V2.10526H8V4.21053Z" fill="black"/>
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
                <svg class="w-5 h-5 mr-3" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M8.76576 20C8.29307 20 7.8862 19.85 7.54517 19.55C7.20413 19.25 6.99825 18.8833 6.92752 18.45L6.69118 16.8C6.46359 16.7167 6.2493 16.6167 6.04832 16.5C5.84734 16.3833 5.65021 16.2583 5.45693 16.125L3.82878 16.775C3.39111 16.9583 2.95343 16.975 2.51576 16.825C2.07808 16.675 1.73669 16.4083 1.4916 16.025L0.257353 13.975C0.0122547 13.5917 -0.0577731 13.1833 0.047269 12.75C0.152311 12.3167 0.388655 11.9583 0.756302 11.675L2.14811 10.675C2.1306 10.5583 2.12185 10.4457 2.12185 10.337V9.662C2.12185 9.554 2.1306 9.44167 2.14811 9.325L0.756302 8.325C0.388655 8.04167 0.152311 7.68333 0.047269 7.25C-0.0577731 6.81667 0.0122547 6.40833 0.257353 6.025L1.4916 3.975C1.73669 3.59167 2.07808 3.325 2.51576 3.175C2.95343 3.025 3.39111 3.04167 3.82878 3.225L5.45693 3.875C5.64951 3.74167 5.85084 3.61667 6.06092 3.5C6.27101 3.38333 6.48109 3.28333 6.69118 3.2L6.92752 1.55C6.99755 1.11667 7.20343 0.75 7.54517 0.45C7.8869 0.15 8.29377 0 8.76576 0H11.2342C11.7069 0 12.1141 0.15 12.4559 0.45C12.7976 0.75 13.0032 1.11667 13.0725 1.55L13.3088 3.2C13.5364 3.28333 13.751 3.38333 13.9527 3.5C14.1544 3.61667 14.3512 3.74167 14.5431 3.875L16.1712 3.225C16.6089 3.04167 17.0466 3.025 17.4842 3.175C17.9219 3.325 18.2633 3.59167 18.5084 3.975L19.7426 6.025C19.9877 6.40833 20.0578 6.81667 19.9527 7.25C19.8477 7.68333 19.6113 8.04167 19.2437 8.325L17.8519 9.325C17.8694 9.44167 17.8782 9.55433 17.8782 9.663V10.337C17.8782 10.4457 17.8606 10.5583 17.8256 10.675L19.2174 11.675C19.5851 11.9583 19.8214 12.3167 19.9265 12.75C20.0315 13.1833 19.9615 13.5917 19.7164 13.975L18.4559 16.025C18.2108 16.4083 17.8694 16.675 17.4317 16.825C16.994 16.975 16.5564 16.9583 16.1187 16.775L14.5431 16.125C14.3505 16.2583 14.1492 16.3833 13.9391 16.5C13.729 16.6167 13.5189 16.7167 13.3088 16.8L13.0725 18.45C13.0025 18.8833 12.7969 19.25 12.4559 19.55C12.1148 19.85 11.7076 20 11.2342 20H8.76576ZM10.0525 13.5C11.0679 13.5 11.9345 13.1583 12.6523 12.475C13.3701 11.7917 13.729 10.9667 13.729 10C13.729 9.03333 13.3701 8.20833 12.6523 7.525C11.9345 6.84167 11.0679 6.5 10.0525 6.5C9.01961 6.5 8.14846 6.84167 7.43908 7.525C6.72969 8.20833 6.37535 9.03333 6.37605 10C6.37675 10.9667 6.73144 11.7917 7.44013 12.475C8.14881 13.1583 9.01961 13.5 10.0525 13.5Z" fill="black"/>
                </svg>

                {{ __('Settings') }}
            </a>

            <!-- Logout -->
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="flex items-center w-full px-4 py-3 text-sm font-medium rounded-lg transition-colors duration-200 text-gray-700 hover:bg-gray-100">
                    <svg class="w-5 h-5 mr-3" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M2.27273 20C1.64773 20 1.11288 19.7826 0.668182 19.3478C0.223485 18.913 0.000757576 18.3896 0 17.7778V2.22222C0 1.61111 0.222727 1.08815 0.668182 0.653333C1.11364 0.218518 1.64848 0.00074074 2.27273 0H9.09091C9.41288 0 9.68295 0.106667 9.90114 0.32C10.1193 0.533333 10.228 0.797036 10.2273 1.11111C10.2265 1.42518 10.1174 1.68926 9.9 1.90333C9.68258 2.11741 9.41288 2.2237 9.09091 2.22222H2.27273V17.7778H9.09091C9.41288 17.7778 9.68295 17.8844 9.90114 18.0978C10.1193 18.3111 10.228 18.5748 10.2273 18.8889C10.2265 19.2029 10.1174 19.467 9.9 19.6811C9.68258 19.8952 9.41288 20.0015 9.09091 20H2.27273ZM16.108 11.1111H7.95455C7.63258 11.1111 7.36288 11.0044 7.14545 10.7911C6.92803 10.5778 6.81894 10.3141 6.81818 9.99999C6.81742 9.68592 6.92652 9.42222 7.14545 9.20888C7.36439 8.99555 7.63409 8.88888 7.95455 8.88888H16.108L13.9773 6.80555C13.7689 6.60185 13.6648 6.35185 13.6648 6.05555C13.6648 5.75925 13.7689 5.5 13.9773 5.27777C14.1856 5.05555 14.4508 4.93963 14.7727 4.93C15.0947 4.92037 15.3693 5.02703 15.5966 5.25L19.6591 9.22222C19.8864 9.44444 20 9.7037 20 9.99999C20 10.2963 19.8864 10.5555 19.6591 10.7778L15.5966 14.75C15.3693 14.9722 15.0996 15.0789 14.7875 15.07C14.4754 15.0611 14.2053 14.9452 13.9773 14.7222C13.7689 14.5 13.6697 14.2363 13.6795 13.9311C13.6894 13.6259 13.7981 13.3711 14.0057 13.1667L16.108 11.1111Z" fill="black"/></svg>
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