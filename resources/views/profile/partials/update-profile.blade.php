<div class="px-4 sm:px-6 md:px-12 lg:px-24 space-y-6">
    <p class="text-2xl sm:text-3xl text-black font-black pb-6 sm:pb-10">Settings</p>

    <!-- Email -->
    <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between text-gray-700 w-full p-4 sm:p-6 border border-gray-700 rounded-lg">
        <div class="flex flex-col text-black text-base sm:text-lg">
            <p class="mb-2 sm:mb-4 font-black">Email</p>
            <p class="text-gray-400 text-sm break-all">{{ Auth::user()->email }}</p>
        </div>
        <div class="mt-3 sm:mt-0">
            <button onclick="openModal('editEmail')" class="p-2 rounded-lg hover:bg-gray-200">
                <svg width="20" height="20" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0 13.6571V16.5278C0 16.7922 0.20775 17 0.472158 17H3.34288C3.46564 17 3.5884 16.9528 3.67339 16.8584L13.9853 6.55586L10.4441 3.01468L0.141648 13.3172C0.0472159 13.4116 0 13.5249 0 13.6571ZM16.7238 3.81735C16.8114 3.72998 16.8808 3.62621 16.9282 3.51198C16.9756 3.39774 17 3.27528 17 3.1516C17 3.02793 16.9756 2.90547 16.9282 2.79123C16.8808 2.67699 16.8114 2.57322 16.7238 2.48586L14.5141 0.27616C14.4268 0.188618 14.323 0.119166 14.2088 0.0717788C14.0945 0.0243917 13.9721 0 13.8484 0C13.7247 0 13.6023 0.0243917 13.488 0.0717788C13.3738 0.119166 13.27 0.188618 13.1827 0.27616L11.4546 2.00426L14.9957 5.54544L16.7238 3.81735Z" fill="black"/>
                </svg>
            </button>
        </div>
    </div>

    <!-- Password -->
    <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between text-gray-700 w-full p-4 sm:p-6 border border-gray-700 rounded-lg">
        <div class="flex justify-between items-center w-full text-black">
            <p class="font-black text-base sm:text-lg">Password</p>
            <button onclick="openModal('editPassword')" class="p-2 rounded-lg hover:bg-gray-200">
                <svg width="20" height="20" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0 13.6571V16.5278C0 16.7922 0.20775 17 0.472158 17H3.34288C3.46564 17 3.5884 16.9528 3.67339 16.8584L13.9853 6.55586L10.4441 3.01468L0.141648 13.3172C0.0472159 13.4116 0 13.5249 0 13.6571ZM16.7238 3.81735C16.8114 3.72998 16.8808 3.62621 16.9282 3.51198C16.9756 3.39774 17 3.27528 17 3.1516C17 3.02793 16.9756 2.90547 16.9282 2.79123C16.8808 2.67699 16.8114 2.57322 16.7238 2.48586L14.5141 0.27616C14.4268 0.188618 14.323 0.119166 14.2088 0.0717788C14.0945 0.0243917 13.9721 0 13.8484 0C13.7247 0 13.6023 0.0243917 13.488 0.0717788C13.3738 0.119166 13.27 0.188618 13.1827 0.27616L11.4546 2.00426L14.9957 5.54544L16.7238 3.81735Z" fill="black"/>
                </svg>
            </button>
        </div>
    </div>
</div>
