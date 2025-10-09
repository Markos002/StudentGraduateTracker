<x-admin-layout>
    <div class="p-7 space-y-6">
        {{-- Breadcrumb --}}
        <div class="flex items-center gap-3 pb-6">
            <svg class="w-7 h-7" viewBox="0 0 30 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M27.2222 0H2.77778C2.04107 0 1.33453 0.286296 0.813592 0.795905C0.292658 1.30552 0 1.99669 0 2.71739V22.2826C0 23.0033 0.292658 23.6945 0.813592 24.2041C1.33453 24.7137 2.04107 25 2.77778 25H27.2222C27.9589 25 28.6655 24.7137 29.1864 24.2041C29.7073 23.6945 30 23.0033 30 22.2826V2.71739C30 1.99669 29.7073 1.30552 29.1864 0.795905C28.6655 0.286296 27.9589 0 27.2222 0ZM3.33333 9.23913H7.22222V11.9565H3.33333V9.23913ZM7.22222 3.26087V5.97826H3.33333V3.26087H7.22222ZM3.33333 15.2174H7.22222V21.7391H3.33333V15.2174ZM26.6667 21.7391H10.5556V3.26087H26.6667V21.7391Z" fill="black"/>
            </svg>
            <p class="text-gray-500">Admin <span class="text-black">/ Employment</span></p>
        </div>

        {{-- Main Card --}}
        <div class="p-6 bg-white rounded-lg shadow-sm">
            {{-- Header --}}
            <div class="flex flex-col lg:flex-row lg:items-center lg:justify-between mb-6 gap-6">
                <h1 class="text-2xl font-bold">Alumnus</h1>
                
                {{-- Top Bar --}}
                <div class="flex flex-wrap items-center justify-between gap-4">
                    {{-- Search --}}
                    <div class="flex-1 sm:w-auto">
                        <x-search.search 
                            id="searchInput"
                            placeholder="Search"
                            class="bg-[#EEEEEE] w-full py-1.5"
                        />
                    </div>

                    {{-- Actions --}}
                    <div class="flex flex-wrap items-center gap-3">
                        {{-- Filters --}}
                        <form id="studentFilterForm" method="GET" action="{{ route('admin.alumnus') }}" class="flex items-center gap-3 w-full sm:w-auto py-1.5">
                            <input type="hidden" name="year" id="yearInput" value="{{ $selectedYear }}">
                            <input type="hidden" name="course" id="courseInput" value="{{ $selectedCourse }}">

                            {{-- Year Filter --}}
                            <x-dropdown>
                                <x-slot:trigger>
                                    <button type="button" class="rounded w-full sm:w-auto">
                                        {{ $selectedYear }} 
                                    </button>
                                </x-slot:trigger>
                                <x-slot:content>
                                    @foreach ($availableYears as $yearsAvailable)
                                        <x-dropdown-link href="#" onclick="setYear('{{ $yearsAvailable }}')">
                                            {{ $yearsAvailable }}
                                        </x-dropdown-link>
                                    @endforeach
                                </x-slot:content>
                            </x-dropdown>

                            {{-- Course Filter --}}
                            <x-dropdown>
                                <x-slot:trigger>
                                    <button type="button" class="rounded w-full sm:w-auto">
                                        {{ $selectedCourse }}
                                    </button>
                                </x-slot:trigger>
                                <x-slot:content>
                                    @foreach ($courses as $availableCourse)
                                        <x-dropdown-link href="#" onclick="setCourse('{{ $availableCourse }}')">
                                            {{ $availableCourse }}
                                        </x-dropdown-link>
                                    @endforeach
                                </x-slot:content>
                            </x-dropdown>
                        </form>
                    </div>
                </div>
            </div>
            {{-- Alerts --}}
            @if(session('success'))
                <div class="bg-green-100 text-green-800 p-3 rounded mb-4">
                    {{ session('success') }}
                </div>
            @endif
            @if(session('error'))
                <div class="bg-red-100 text-red-800 p-3 rounded mb-4">
                    {{ session('error') }}
                </div>
            @endif

            {{-- Table --}}
            <div class="overflow-x-auto">
                <x-table.table
                    :headers="['Full Name', 'Occupation', 'Course', 'Occupation Status', 'Course Alignment']"
                    :rows="$alumnusList->map(fn($alumnuslist) => [
                        'fullname' => $alumnuslist->full_name,
                        'occupation' =>  $alumnuslist->job->occupation ?? '',
                        'course' =>  $alumnuslist->course,
                        'occupationstatus' =>  $alumnuslist->job->occupation_status ?? 'Unemployed',
                        'coursealignment' =>  $alumnuslist->job->course_alignment ?? '',
                    ])"
                    :paginator="$alumnusList"
                    :showPagination="true"
                />
            </div>
            <x-modals.admin.addStudent :selectedCourse="$selectedCourse" :courses="$courses"/>
        </div>
    </div>
</x-admin-layout>
