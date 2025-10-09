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
            <div class=" py-5 px-[0.5rem] lg:px-[5rem]">
                <div class="flex gap-7">
                    <h1 class="text-4xl font-light mb-2">{{$personalDetail['first_name'] ." ".  $personalDetail['last_name']}}</h1>
                    <div class="place-content-center">
                        <button onclick="openModal('userProfile')">
                                <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0 13.6571V16.5278C0 16.7922 0.20775 17 0.472158 17H3.34288C3.46564 17 3.5884 16.9528 3.67339 16.8584L13.9853 6.55586L10.4441 3.01468L0.141648 13.3172C0.0472159 13.4116 0 13.5249 0 13.6571ZM16.7238 3.81735C16.8114 3.72998 16.8808 3.62621 16.9282 3.51198C16.9756 3.39774 17 3.27528 17 3.1516C17 3.02793 16.9756 2.90547 16.9282 2.79123C16.8808 2.67699 16.8114 2.57322 16.7238 2.48586L14.5141 0.27616C14.4268 0.188618 14.323 0.119166 14.2088 0.0717788C14.0945 0.0243917 13.9721 0 13.8484 0C13.7247 0 13.6023 0.0243917 13.488 0.0717788C13.3738 0.119166 13.27 0.188618 13.1827 0.27616L11.4546 2.00426L14.9957 5.54544L16.7238 3.81735Z" fill="white"/></svg>
                        </button>
                    </div>
                </div>
                <div class="flex place-items-center py-1">
                    <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" width="77" height="77" viewBox="0 0 24 24">
                        <path fill="#fff" d="M12 12c-1.1 0-2-.9-2-2s.9-2 2-2s2 .9 2 2s-.9 2-2 2m6-1.8C18 6.57 15.35 4 12 4s-6 2.57-6 6.2c0 2.34 1.95 5.44 6 9.14c4.05-3.7 6-6.8 6-9.14M12 2c4.2 0 8 3.22 8 8.2c0 3.32-2.67 7.25-8 11.8c-5.33-4.55-8-8.48-8-11.8C4 5.22 7.8 2 12 2" />
                    </svg>
                <p class="text-md opacity-90 px-2">{{ $personalDetail['address'] ?? ' ' }}</p>
                </div>
                <div class="flex place-items-center">
                    <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                    <path fill="#fff" d="M4 20q-.825 0-1.412-.587T2 18V6q0-.825.588-1.412T4 4h16q.825 0 1.413.588T22 6v12q0 .825-.587 1.413T20 20zm8-7L4 8v10h16V8zm0-2l8-5H4zM4 8V6v12z" />
                    </svg>
                <p class="text-md opacity-90 px-2">{{$personalDetail['email'] ?? ' '  }}</p>
                </div>
            </div>
        </div>

        <!-- Main Content -->
        <div class="px-1 lg:px-14 py-8">
            <!-- Personal Summary -->
            <section class="mb-8 mx-10">
                <h2 class="text-3xl font-semibold text-gray-800 mb-4 pb-2">Personal Summary</h2>
                <div class="flex text-gray-700 max-w-6xl p-6  border border-gray-700 rounded-lg justify-between">
                      <p class="mb-4">
                        {{ $personalSummary->first()->personal_summary ?? 'No personal summary yet.' }}
                       </p>               
                    <div>
                        <button onclick="openModal('editPersonalSummary')">
                            <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M0 13.6571V16.5278C0 16.7922 0.20775 17 0.472158 17H3.34288C3.46564 17 3.5884 16.9528 3.67339 16.8584L13.9853 6.55586L10.4441 3.01468L0.141648 13.3172C0.0472159 13.4116 0 13.5249 0 13.6571ZM16.7238 3.81735C16.8114 3.72998 16.8808 3.62621 16.9282 3.51198C16.9756 3.39774 17 3.27528 17 3.1516C17 3.02793 16.9756 2.90547 16.9282 2.79123C16.8808 2.67699 16.8114 2.57322 16.7238 2.48586L14.5141 0.27616C14.4268 0.188618 14.323 0.119166 14.2088 0.0717788C14.0945 0.0243917 13.9721 0 13.8484 0C13.7247 0 13.6023 0.0243917 13.488 0.0717788C13.3738 0.119166 13.27 0.188618 13.1827 0.27616L11.4546 2.00426L14.9957 5.54544L16.7238 3.81735Z" fill="black"/>
                        </svg>
                        </button>
                    </div>
                </div>
            </section>

            <!-- Career History -->
            <section class="mb-8 mx-10">
                <div class="flex items-center justify-between mb-4">
                    <h2 class="text-3xl font-semibold text-gray-800 mb-4 pb-2">Career History</h2>
                </div>
                @if(isset($careerHistory) && count($careerHistory) > 0)
                    @foreach($careerHistory as $career)
                    <div class="text-gray-700 max-w-6xl p-6 border border-gray-700 rounded-lg my-2">
                        <div class="flex justify-between items-start mb-2">
                            <h3 class="text-xl font-semibold text-gray-800">{{ $career['position'] ?? 'asdas '}}</h3>
                            <div>
                                <button onclick="openRoleEditModal({{ $career->job_id}})">
                                    <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M0 13.6571V16.5278C0 16.7922 0.20775 17 0.472158 17H3.34288C3.46564 17 3.5884 16.9528 3.67339 16.8584L13.9853 6.55586L10.4441 3.01468L0.141648 13.3172C0.0472159 13.4116 0 13.5249 0 13.6571ZM16.7238 3.81735C16.8114 3.72998 16.8808 3.62621 16.9282 3.51198C16.9756 3.39774 17 3.27528 17 3.1516C17 3.02793 16.9756 2.90547 16.9282 2.79123C16.8808 2.67699 16.8114 2.57322 16.7238 2.48586L14.5141 0.27616C14.4268 0.188618 14.323 0.119166 14.2088 0.0717788C14.0945 0.0243917 13.9721 0 13.8484 0C13.7247 0 13.6023 0.0243917 13.488 0.0717788C13.3738 0.119166 13.27 0.188618 13.1827 0.27616L11.4546 2.00426L14.9957 5.54544L16.7238 3.81735Z" fill="black"/>
                                    </svg>
                                </button>
                            </div>
                        </div>
                        <p class="text-sm text-gray-600 mb-2">
                            {{ $career['position'] ?? ' ' }} |
                            {{ \Carbon\Carbon::parse($career['start_date'] ?? ' ')->format('F, Y') }}
                            -
                            {{ isset($career['end_date']) ? \Carbon\Carbon::parse($career['end_date'] ?? ' ')->format('F, Y') : 'Present' }}
                        </p>
                        <p class="text-gray-700 text-sm leading-relaxed">
                            {{ $career['description'] ?? ' '}}
                        </p>
                    </div>
                    @endforeach
                @else
                    <div class="text-gray-700 max-w-6xl p-6 border border-gray-700 rounded-lg">
                        <div class="flex justify-between items-start mb-2">
                            <h3 class="text-xl font-semibold text-gray-800"></h3>
                        </div>
                        <p class="text-sm text-gray-600 mb-2"></p>
                        <p class="text-gray-700 text-sm leading-relaxed">
                           
                        </p>
                    </div>
                @endif

                <!-- Add Career Button -->
                <button onclick="openModal('addRole')" class="text-orange-500 text-sm font-medium hover:text-orange-600">
                    + Add Career
                </button>
            </section>

            <!-- Education  -->
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
                        <div class="flex justify-between items-start mb-2">
                            <h3 class="font-semibold text-gray-800 text-xl">
                                @if(Auth::user()->course === 'BSIT')
                                    Bachelor of Science in Information Technology
                                @elseif (Auth::user()->course === 'BSMX')
                                    Bachelor of Science in Mechatronics  
                                @elseif (Auth::user()->course === 'BIT-ELEC')
                                    Bachelor in Industrial Technology - Major in Electronics      
                                @elseif (Auth::user()->course === 'BIT-CT')
                                    Bachelor in Industrial Technology - Major in Computer Technology     
                                @elseif (Auth::user()->course === 'BIT-DT')
                                    Bachelor in Industrial Technology - Major in Drafting   
                                @elseif (Auth::user()->course === 'BIT-ELEX')
                                    Bachelor in Industrial Technology - Major in Electrical          
                                @endif  
                            </h3>
                            <div>
                                <button>
                                    <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M0 13.6571V16.5278C0 16.7922 0.20775 17 0.472158 17H3.34288C3.46564 17 3.5884 16.9528 3.67339 16.8584L13.9853 6.55586L10.4441 3.01468L0.141648 13.3172C0.0472159 13.4116 0 13.5249 0 13.6571ZM16.7238 3.81735C16.8114 3.72998 16.8808 3.62621 16.9282 3.51198C16.9756 3.39774 17 3.27528 17 3.1516C17 3.02793 16.9756 2.90547 16.9282 2.79123C16.8808 2.67699 16.8114 2.57322 16.7238 2.48586L14.5141 0.27616C14.4268 0.188618 14.323 0.119166 14.2088 0.0717788C14.0945 0.0243917 13.9721 0 13.8484 0C13.7247 0 13.6023 0.0243917 13.488 0.0717788C13.3738 0.119166 13.27 0.188618 13.1827 0.27616L11.4546 2.00426L14.9957 5.54544L16.7238 3.81735Z" fill="black"/>
                                    </svg>
                                </button>
                            </div>
                        </div>
                        <p class="text-sm text-gray-600 py-2">Cebu Technological University - Danao Campus</p>
                        <p class="text-sm text-gray-500 py-2">{{ Auth::user()->year_graduate }}</p>
                    </div>
                @endif


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
                        @if($cert['cert_name'] && $cert['year'] && $cert['term'])
                            <div class="mb-4 p-6 border border-gray-700 rounded-lg">
                                <div class="flex justify-between items-start mb-2">
                                    <h3 class="font-semibold text-gray-800 text-lg">{{ $cert['cert_name'] }}</h3>
                                        <div>
                                            <button onclick="openEditCert({{ $cert->achievement_id }})">
                                                <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M0 13.6571V16.5278C0 16.7922 0.20775 17 0.472158 17H3.34288C3.46564 17 3.5884 16.9528 3.67339 16.8584L13.9853 6.55586L10.4441 3.01468L0.141648 13.3172C0.0472159 13.4116 0 13.5249 0 13.6571ZM16.7238 3.81735C16.8114 3.72998 16.8808 3.62621 16.9282 3.51198C16.9756 3.39774 17 3.27528 17 3.1516C17 3.02793 16.9756 2.90547 16.9282 2.79123C16.8808 2.67699 16.8114 2.57322 16.7238 2.48586L14.5141 0.27616C14.4268 0.188618 14.323 0.119166 14.2088 0.0717788C14.0945 0.0243917 13.9721 0 13.8484 0C13.7247 0 13.6023 0.0243917 13.488 0.0717788C13.3738 0.119166 13.27 0.188618 13.1827 0.27616L11.4546 2.00426L14.9957 5.54544L16.7238 3.81735Z" fill="black"/>
                                                </svg>
                                            </button>
                                        </div>
                                </div>
                                <p class="text-sm text-gray-600">{{$cert['year'] }} | {{ $cert['term'] }}</p>
                            </div>
                        @else
                        <div class="mb-4 p-6 border border-gray-700 rounded-lg">
                            <div class="flex justify-between items-start mb-2">
                                <h3 class="font-semibold text-gray-800"></h3>
                            </div>
                            <p class="text-sm text-gray-600"></p>
                        </div>
                        @endif
                    @endforeach
                @endif

                <!-- Add Certification Button -->
                <button onclick="openModal('addCert')" class="text-orange-500 text-sm font-medium hover:text-orange-600">
                    + Add Certification
                </button>
            </section>
        </div>
        <x-modals.user.addEditProfile :value=$personalDetail />
        <x-modals.user.editPersonalSummary :value=$personalSummary/>
        <x-modals.user.addRole/>
        <x-modals.user.editRole :value=$careerHistory/>
        <x-modals.user.addCertification/>
        <x-modals.user.editCertification :value=$certifications/>
    </div>
    <div id="careerData" data-careers='@json($careerHistory)'></div>
    <div id="certData" data-careers='@json($certifications)'></div>


</x-user-layout>
