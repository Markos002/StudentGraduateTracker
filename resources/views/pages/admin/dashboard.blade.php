<x-admin-layout>
    <div class="p-7 space-y-6">
        <div class="flex items-center gap-3">
            <svg class="w-7 h-7" width="30" height="25" viewBox="0 0 30 25" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M27.2222 0H2.77778C2.04107 0 1.33453 0.286296 0.813592 0.795905C0.292658 1.30552 0 1.99669 0 2.71739V22.2826C0 23.0033 0.292658 23.6945 0.813592 24.2041C1.33453 24.7137 2.04107 25 2.77778 25H27.2222C27.9589 25 28.6655 24.7137 29.1864 24.2041C29.7073 23.6945 30 23.0033 30 22.2826V2.71739C30 1.99669 29.7073 1.30552 29.1864 0.795905C28.6655 0.286296 27.9589 0 27.2222 0ZM3.33333 9.23913H7.22222V11.9565H3.33333V9.23913ZM7.22222 3.26087V5.97826H3.33333V3.26087H7.22222ZM3.33333 15.2174H7.22222V21.7391H3.33333V15.2174ZM26.6667 21.7391H10.5556V3.26087H26.6667V21.7391Z" fill="black"/></svg>
            <p class="text-gray-500">Admin <span class="text-black">/ Dashboard</span></p>
        </div>
        <h1 class="text-2xl font-bold text-gray-800">Admin Dashboard</h1>

        <!-- Stats Section -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mt-6 text-black">
            <!-- Total Students -->
            <div class="flex justify-between bg-white rounded-lg shadow px-6 py-8">
                <div class="space-y-5">
                    <h2 class="text-lg font-semibold ">Registered Students</h2>
                    <p class="text-3xl font-bold ">{{ $totalStudents ?? '0'}}</p>
                </div>
                <div class="h-full place-content-center">
                    <div class="w-14 h-14 flex items-center justify-center rounded-lg bg-[#8FE5A6]">
                        <svg class="w-full h-full max-w-8 max-h-8" width="30" height="20" viewBox="0 0 30 20" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M20.4545 8.57143C22.7182 8.57143 24.5318 6.65714 24.5318 4.28571C24.5318 1.91429 22.7182 0 20.4545 0C18.1909 0 16.3636 1.91429 16.3636 4.28571C16.3636 6.65714 18.1909 8.57143 20.4545 8.57143ZM9.54545 8.57143C11.8091 8.57143 13.6227 6.65714 13.6227 4.28571C13.6227 1.91429 11.8091 0 9.54545 0C7.28182 0 5.45455 1.91429 5.45455 4.28571C5.45455 6.65714 7.28182 8.57143 9.54545 8.57143ZM9.54545 11.4286C6.36818 11.4286 0 13.1 0 16.4286V20H19.0909V16.4286C19.0909 13.1 12.7227 11.4286 9.54545 11.4286ZM20.4545 11.4286C20.0591 11.4286 19.6091 11.4571 19.1318 11.5C20.7136 12.7 21.8182 14.3143 21.8182 16.4286V20H30V16.4286C30 13.1 23.6318 11.4286 20.4545 11.4286Z" fill="#110804"/></svg>
                    </div>
                </div>
            </div>

            <!-- Total Graduates -->
            <div class="flex justify-between bg-white rounded-lg shadow px-6 py-8">
                <div class="space-y-5">
                    <h2 class="text-lg font-semibold ">Total Graduates</h2>
                    <p class="text-3xl font-bold ">{{ $totalGraduates ?? '0' }}</p>
                </div>
                <div class="h-full place-content-center">
                    <div class="w-14 h-14 flex items-center justify-center rounded-lg bg-[#8FE5A6]">
                        <svg class="w-full h-full max-w-7 max-h-7"  width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M2.7813 11.3483V14.5694C2.7813 15.4062 3.16394 16.1857 3.77616 16.5869L8.55913 19.7163C9.13309 20.0946 9.82183 20.0946 10.3958 19.7163L15.1788 16.5869C15.791 16.1857 16.1736 15.4062 16.1736 14.5694V11.3483L10.3958 15.1311C9.82183 15.5094 9.13309 15.5094 8.55913 15.1311L2.7813 11.3483ZM8.55913 0.275111L0.495038 5.54807C-0.165013 5.98367 -0.165013 7.12996 0.495038 7.56555L8.55913 12.8385C9.13309 13.2168 9.82183 13.2168 10.3958 12.8385L18.0868 7.80628V14.5809C18.0868 15.2113 18.5173 15.7272 19.0434 15.7272C19.5695 15.7272 20 15.2113 20 14.5809V7.23313C20 6.809 19.8087 6.43072 19.5026 6.22439L10.3958 0.275111C10.1132 0.0944832 9.79777 0 9.47746 0C9.15715 0 8.84176 0.0944832 8.55913 0.275111Z" fill="#110804"/></svg>
                    </div>
                </div>
            </div>

            <!-- Employment Stats  Employed-->
            <div class="flex justify-between bg-white rounded-lg shadow px-6 py-8">
                <div class="space-y-5">
                    <h2 class="text-lg font-semibold ">Employed</h2>
                    <p class="text-3xl font-bold ">{{ $employmentStats['Employed'] ?? '0'}}</p>
                </div>
                <div class="h-full place-content-center">
                    <div class="w-14 h-14 flex items-center justify-center rounded-lg bg-[#8FE5A6]">
                        <svg class="w-full h-full max-w-6 max-h-6" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M2 20C1.45 20 0.979333 19.794 0.588 19.3821C0.196667 18.9702 0.000666667 18.4744 0 17.8947V6.31579C0 5.73684 0.196 5.2414 0.588 4.82947C0.98 4.41754 1.45067 4.21123 2 4.21053H6V2.10526C6 1.52632 6.196 1.03088 6.588 0.618947C6.98 0.207018 7.45067 0.000701754 8 0H12C12.55 0 13.021 0.206316 13.413 0.618947C13.805 1.03158 14.0007 1.52702 14 2.10526V4.21053H18C18.55 4.21053 19.021 4.41684 19.413 4.82947C19.805 5.2421 20.0007 5.73754 20 6.31579V17.8947C20 18.4737 19.8043 18.9695 19.413 19.3821C19.0217 19.7947 18.5507 20.0007 18 20H2ZM8 4.21053H12V2.10526H8V4.21053Z" fill="#110804"/></svg>
                    </div>
                </div>
            </div>
            <!-- Employment Stats UnEmployed -->
            <div class="flex justify-between bg-white rounded-lg shadow px-6 py-8">
                <div class="space-y-5">
                    <h2 class="text-lg font-semibold ">Unemployed</h2>
                    <p class="text-3xl font-bold ">{{ $employmentStats['Unemployed'] ?? '0' }}</p>
                </div>
                <div class="h-full place-content-center">
                    <div class="w-14 h-14 flex items-center justify-center rounded-lg bg-[#8FE5A6]">
                        <svg class="w-full h-full max-w-7 max-h-7" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M20 18.8006L18.6102 17.4108L4.96906 3.76963L1.19943 0L0 1.19943L2.5702 3.76963H1.96097C0.904331 3.76963 0.0666349 4.61685 0.0666349 5.67349L0.0571156 16.1447C0.0571156 17.2013 0.904331 18.0485 1.96097 18.0485H16.8491L18.8006 20L20 18.8006ZM19.0481 5.67349C19.0957 4.61685 18.2485 3.76963 17.1918 3.81723H13.3841V1.86578C13.3841 0.809139 12.5369 -0.0380771 11.4802 0.00951927H7.67254C6.6159 -0.0380771 5.76868 0.809139 5.76868 1.86578V2.1704L19.0481 15.4974V5.67349ZM11.4802 3.81723H7.62494V1.86578H11.4802V3.81723Z" fill="#110804"/></svg>
                    </div>
                </div>
            </div>
        </div>

        <div class="">
            <x-analytics.bargraph-dashboard/>
        </div>
    </div>
</x-admin-layout>
