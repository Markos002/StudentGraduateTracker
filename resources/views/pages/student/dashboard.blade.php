<x-user-layout>
<body class="bg-gray-100">
    <div class="max-w-6xl mx-auto bg-white shadow-xl rounded-lg">
        <!-- Header Section -->
        <div class="relative bg-[#D06139] rounded-lg text-white px-5 py-12 overflow-hidden justify-evenly">
            <!-- Background decorations -->
            <div class="absolute -top-8 -right-8 w-40 h-40 bg-[#FFBAA1]  rounded-full"></div>
            <div class="absolute top-10 right-60 w-10 h-10 bg-[#FF8800] rounded"></div>
            <div class="absolute -bottom-14 right-24 w-40 h-40 bg-[#8FE5A6] rounded"></div>
            
            <!-- Name and Title -->
            <div class="place-content-center py-5 px-[0.5rem] lg:px-[5rem]">
                <h1 class="text-4xl font-light mb-2">{{ Auth::user()->first_name . " " . Auth::user()->last_name }}</h1>
                <div class="flex place-items-center py-1">
                    <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" width="77" height="77" viewBox="0 0 24 24">
                        <path fill="#fff" d="M12 12c-1.1 0-2-.9-2-2s.9-2 2-2s2 .9 2 2s-.9 2-2 2m6-1.8C18 6.57 15.35 4 12 4s-6 2.57-6 6.2c0 2.34 1.95 5.44 6 9.14c4.05-3.7 6-6.8 6-9.14M12 2c4.2 0 8 3.22 8 8.2c0 3.32-2.67 7.25-8 11.8c-5.33-4.55-8-8.48-8-11.8C4 5.22 7.8 2 12 2" />
                    </svg>
                <p class="text-md opacity-90 px-2">{{ $position ?? 'Mandaue City' }}</p>
                </div>
                <div class="flex place-items-center">
                    <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                    <path fill="#fff" d="M4 20q-.825 0-1.412-.587T2 18V6q0-.825.588-1.412T4 4h16q.825 0 1.413.588T22 6v12q0 .825-.587 1.413T20 20zm8-7L4 8v10h16V8zm0-2l8-5H4zM4 8V6v12z" />
                    </svg>
                <p class="text-md opacity-90 px-2">{{ $email ?? 'therenzjaromohom@email.com' }}</p>
                </div>
            </div>
        </div>

        <!-- Main Content -->
        <div class="px-14 py-8">
            <!-- Personal Summary -->
            <section class="mb-8 mx-10">
                <h2 class="text-3xl font-semibold text-gray-800 mb-4 pb-2">Personal Summary</h2>
                <div class="text-gray-700 max-w-6xl p-6  border border-gray-700 rounded-lg">
                    <p class="mb-4">
                        {{ $summary ?? 'An marketing seeking an opportunity that offers the creative andAn marketing seeking an opportunity that offers the creative andAn marketing seeking an opportunity that offers the creative andAn marketing seeking an opportunity that offers the creative and challenging functionality especially mean and meet clients demands.' }}
                    </p>
                </div>
            </section>

            <!-- Career History -->
            <section class="mb-8 mx-10">
                <div class="flex items-center justify-between mb-4">
                    <h2 class="text-3xl font-semibold text-gray-800 mb-4 pb-2">Career History</h2>
                </div>
                
                @if(isset($careers) && count($careers) > 0)
                    @foreach($careers as $career)
                    <div class="text-gray-700 max-w-6xl p-5 border border-gray-700 rounded-lg">
                        <div class="flex justify-between items-start mb-2">
                            <h3 class="text-xl font-semibold text-gray-800">{{ $career['title'] }}</h3>
                            <span class="text-gray-600 text-sm cursor-pointer">✏️</span>
                        </div>
                        <p class="text-sm text-gray-600 mb-2">{{ $carreer['position'] ?? 'Position' }}|{{$career['duration'] ?? 'Duration' }}</p>
                        <p class="text-gray-700 text-sm leading-relaxed">
                            {{ $career['description'] }}
                        </p>
                    </div>
                    @endforeach
                @else
                    <div class="text-gray-700 max-w-6xl p-6 border border-gray-700 rounded-lg">
                        <div class="flex justify-between items-start mb-2">
                            <h3 class="text-xl font-semibold text-gray-800">Assistant Video Editor</h3>
                            <span class="text-gray-600 text-sm cursor-pointer">✏️</span>
                        </div>
                        <p class="text-sm text-gray-600 mb-2">Photo OP | Jan 2024 - Feb 2024</p>
                        <p class="text-gray-700 text-sm leading-relaxed">
                            Work together in the film industry and engaged client from getting orders of funny advertisement. Responsible for setting up workflows
                            to maintain post-processing schedules, organizing and social marketing artwork solution post-processing.
                        </p>
                    </div>
                @endif

                <!-- Add Career Button -->
                <button class="text-orange-500 text-sm font-medium hover:text-orange-600">
                    + Add Career
                </button>
            </section>

            <!-- Education -->
            <section class="mb-8 mx-10">
                <div class="flex items-center justify-between mb-4">
                    <h2 class="text-3xl font-semibold text-gray-800 mb-4 pb-2">Education</h2>
                </div>
                
                @if(isset($education) && count($education) > 0)
                    @foreach($education as $edu)
                    <div class="mb-4 p-4  rounded border border-gray-700">
                        <h3 class="font-semibold text-gray-800 text-xl">{{ $edu['degree'] }}</h3>
                        <p class="text-sm text-gray-600 py-2">{{ $edu['school'] }} • {{ $edu['location'] }}</p>
                        <p class="text-sm text-gray-500 py-2">{{ $edu['duration'] }}</p>
                    </div>
                    @endforeach
                @else
                    <div class="mb-4 p-6  rounded border border-gray-700">
                        <h3 class="font-semibold text-gray-800 text-xl">Bachelor of Science in Information Technology</h3>
                        <p class="text-sm text-gray-600 py-2">Holy Angel University • Angeles City</p>
                        <p class="text-sm text-gray-500 py-2">2018 - 2022</p>
                    </div>
                @endif

                <!-- Add Education Button -->
                <button class="text-orange-500 text-sm font-medium hover:text-orange-600">
                    + Add Education
                </button>
            </section>

            <!-- Certifications -->
            <section class="mb-8 mx-10">
                <div class="flex items-center justify-between mb-4">
                    <h2 class="text-3xl font-semibold text-gray-800 mb-4 pb-2">Certifications</h2>
                </div>                
                @if(isset($certifications) && count($certifications) > 0)
                    @foreach($certifications as $cert)
                    <div class="mb-4 p-4 border-l-4 border-orange-400 bg-orange-50">
                        <div class="flex justify-between items-start mb-2">
                            <h3 class="font-semibold text-gray-800">{{ $cert['name'] }}</h3>
                            <span class="text-gray-600 text-sm cursor-pointer">✏️</span>
                        </div>
                        <p class="text-sm text-gray-600">{{ $cert['issuer'] ?? '' }} • {{ $cert['date'] ?? 'Date Issued' }}</p>
                    </div>
                    @endforeach
                @else
                    <div class="mb-4 p-6 border border-gray-700 rounded-lg">
                        <div class="flex justify-between items-start mb-2">
                            <h3 class="font-semibold text-gray-800">Dean's Lister</h3>
                            <span class="text-gray-600 text-sm cursor-pointer">✏️</span>
                        </div>
                        <p class="text-sm text-gray-600">A.Y 2019 - 2020 | 1st Semester</p>
                    </div>
                @endif

                <!-- Add Certification Button -->
                <button class="text-orange-500 text-sm font-medium hover:text-orange-600">
                    + Add Certification
                </button>
            </section>
        </div>

    </div>
</x-auth-user>