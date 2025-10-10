<x-admin-layout>
    <div class="p-7 space-y-6">
        <div class="flex items-center gap-3">
            <svg class="w-7 h-7" width="30" height="25" viewBox="0 0 30 25" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M27.2222 0H2.77778C2.04107 0 1.33453 0.286296 0.813592 0.795905C0.292658 1.30552 0 1.99669 0 2.71739V22.2826C0 23.0033 0.292658 23.6945 0.813592 24.2041C1.33453 24.7137 2.04107 25 2.77778 25H27.2222C27.9589 25 28.6655 24.7137 29.1864 24.2041C29.7073 23.6945 30 23.0033 30 22.2826V2.71739C30 1.99669 29.7073 1.30552 29.1864 0.795905C28.6655 0.286296 27.9589 0 27.2222 0ZM3.33333 9.23913H7.22222V11.9565H3.33333V9.23913ZM7.22222 3.26087V5.97826H3.33333V3.26087H7.22222ZM3.33333 15.2174H7.22222V21.7391H3.33333V15.2174ZM26.6667 21.7391H10.5556V3.26087H26.6667V21.7391Z" fill="black"/></svg>
            <p class="text-gray-500">Admin <span class="text-black">/ Settings</span></p>
        </div>
        <h1 class="py-6 text-2xl font-bold text-gray-800">Settings</h1>
        <div class="max-w-2xl px-6">
            <div class="px-5 py-3 flex border rounded-lg border-black w-full justify-between ">
                <p class="font-bold">Password</p>
                <div onclick="openModal('editPassword')" class="cursor-pointer w-full h-auto max-w-8 flex justify-center items-center">
                    <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0 13.6571V16.5278C0 16.7922 0.20775 17 0.472158 17H3.34288C3.46564 17 3.5884 16.9528 3.67339 16.8584L13.9853 6.55586L10.4441 3.01468L0.141648 13.3172C0.0472159 13.4116 0 13.5249 0 13.6571ZM16.7238 3.81735C16.8114 3.72998 16.8808 3.62621 16.9282 3.51198C16.9756 3.39774 17 3.27528 17 3.1516C17 3.02793 16.9756 2.90547 16.9282 2.79123C16.8808 2.67699 16.8114 2.57322 16.7238 2.48586L14.5141 0.27616C14.4268 0.188618 14.323 0.119166 14.2088 0.0717788C14.0945 0.0243917 13.9721 0 13.8484 0C13.7247 0 13.6023 0.0243917 13.488 0.0717788C13.3738 0.119166 13.27 0.188618 13.1827 0.27616L11.4546 2.00426L14.9957 5.54544L16.7238 3.81735Z" fill="black"/></svg>
                </div>
            </div>
        </div>
    </div>
    <x-modals.user.editPassword :buttonclass="'bg-black'"/>
</x-admin-layout>
