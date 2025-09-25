<x-user-layout>
<body class="bg-gray-100">
    <div class="max-w-4xl mx-auto bg-white shadow-xl">
        <!-- Header Section -->
        <div class="relative bg-gradient-to-r from-orange-500 to-red-500 text-white px-8 py-12 overflow-hidden">
            <!-- Background decorations -->
            <div class="absolute -top-8 -right-8 w-32 h-32 bg-white bg-opacity-10 rounded-full"></div>
            <div class="absolute top-4 right-8 w-16 h-10 bg-green-400 rounded"></div>
            <div class="absolute bottom-8 right-8 w-12 h-8 bg-green-400 rounded"></div>
            
            <!-- TBA Brand -->
            <div class="absolute top-6 left-8 text-2xl font-bold tracking-widest">
                {{ $brand ?? 'TBA' }}
            </div>
            
            <!-- Menu Icon -->
            <div class="absolute top-6 right-8 cursor-pointer">
                <div class="w-6 h-0.5 bg-white mb-1"></div>
                <div class="w-6 h-0.5 bg-white mb-1"></div>
                <div class="w-6 h-0.5 bg-white"></div>
            </div>
            
            <!-- Name and Title -->
            <div class="mt-12">
                <h1 class="text-4xl font-light mb-2">{{ $name ?? 'Therenz Jaromohom' }}</h1>
                <p class="text-lg opacity-90 mb-1">{{ $position ?? 'Marketing Specialist/Film' }}</p>
                <p class="text-base opacity-80">{{ $email ?? 'therenzjaromohom@email.com' }}</p>
            </div>
        </div>

        <!-- Main Content -->
        <div class="px-8 py-8">
            <!-- Personal Summary -->
            <section class="mb-8">
                <h2 class="text-xl font-semibold text-gray-800 mb-4 border-b-2 border-blue-500 pb-2">Personal Summary</h2>
                <div class="text-gray-700 leading-relaxed">
                    <p class="mb-4">
                        {{ $summary ?? 'An marketing seeking an opportunity that offers the creative and challenging functionality especially mean and meet clients demands.' }}
                    </p>
                    <p class="mb-4">
                        Helping film layout digital marketing lead, web, and video. Utilizing the post on a layout brand. Providing clients more business
                        furthermore digital marketing video film projects within an organization involved in growing company sales.
                    </p>
                    <p>
                        Connect and networks and responsibility while keeping up with brand design post lead to make to make the new challenges
                        furthermore bringing company marketing to leadership and post grown office.
                    </p>
                </div>
            </section>

            <!-- Career History -->
            <section class="mb-8">
                <div class="flex items-center justify-between mb-4">
                    <h2 class="text-xl font-semibold text-gray-800 border-b-2 border-blue-500 pb-2">Career History</h2>
                    <span class="bg-blue-500 text-white px-3 py-1 rounded text-sm">840 x 180</span>
                </div>
                
                @if(isset($careers) && count($careers) > 0)
                    @foreach($careers as $career)
                    <div class="mb-6 p-4 border-l-4 border-orange-400 bg-orange-50">
                        <div class="flex justify-between items-start mb-2">
                            <h3 class="font-semibold text-gray-800">{{ $career['title'] }}</h3>
                            <span class="text-gray-600 text-sm cursor-pointer">✏️</span>
                        </div>
                        <p class="text-sm text-gray-600 mb-2">{{ $career['duration'] ?? 'Duration' }}</p>
                        <p class="text-gray-700 text-sm leading-relaxed">
                            {{ $career['description'] }}
                        </p>
                    </div>
                    @endforeach
                @else
                    <div class="mb-6 p-4 border-l-4 border-orange-400 bg-orange-50">
                        <div class="flex justify-between items-start mb-2">
                            <h3 class="font-semibold text-gray-800">Assistant Video Editor</h3>
                            <span class="text-gray-600 text-sm cursor-pointer">✏️</span>
                        </div>
                        <p class="text-sm text-gray-600 mb-2">Jan 2024 - Feb 2024</p>
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
            <section class="mb-8">
                <h2 class="text-xl font-semibold text-gray-800 mb-4 border-b-2 border-blue-500 pb-2">Education</h2>
                
                @if(isset($education) && count($education) > 0)
                    @foreach($education as $edu)
                    <div class="mb-4 p-4 bg-gray-50 rounded">
                        <h3 class="font-semibold text-gray-800">{{ $edu['degree'] }}</h3>
                        <p class="text-sm text-gray-600">{{ $edu['school'] }} • {{ $edu['location'] }}</p>
                        <p class="text-sm text-gray-500">{{ $edu['duration'] }}</p>
                    </div>
                    @endforeach
                @else
                    <div class="mb-4 p-4 bg-gray-50 rounded">
                        <h3 class="font-semibold text-gray-800">Bachelor of Science in Information Technology</h3>
                        <p class="text-sm text-gray-600">Holy Angel University • Angeles City</p>
                        <p class="text-sm text-gray-500">2018 - 2022</p>
                    </div>
                @endif

                <!-- Add Education Button -->
                <button class="text-orange-500 text-sm font-medium hover:text-orange-600">
                    + Add Education
                </button>
            </section>

            <!-- Certifications -->
            <section class="mb-8">
                <h2 class="text-xl font-semibold text-gray-800 mb-4 border-b-2 border-blue-500 pb-2">Certifications</h2>
                
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
                    <div class="mb-4 p-4 border-l-4 border-orange-400 bg-orange-50">
                        <div class="flex justify-between items-start mb-2">
                            <h3 class="font-semibold text-gray-800">Dean's Lister</h3>
                            <span class="text-gray-600 text-sm cursor-pointer">✏️</span>
                        </div>
                        <p class="text-sm text-gray-600">A.Y 2019 - 2020 • 1st Semester</p>
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