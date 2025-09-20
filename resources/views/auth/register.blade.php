<x-guest-layout>
    <style>
        .slide-container {
            overflow: hidden;
        }
        .slide-wrapper {
            display: flex;
            transition: transform 0.3s ease-in-out;
            width: 200%;
        }
        .slide {
            width: 50%;
            flex-shrink: 0;
        }
        .slide-wrapper.step-2 {
            transform: translateX(-50%);
        }
    </style>

    <div class="slide-container">
        <div class="slide-wrapper" id="slideWrapper">
            <!-- Step 1: Student ID -->
            <div class="slide">
                <form id="step1Form">
                    <div>
                        <x-input-label for="student_id" :value="__('Student ID')" />
                        <x-text-input 
                            id="student_id" 
                            class="block mt-1 w-full" 
                            type="text" 
                            name="student_id" 
                            :value="old('student_id')" 
                            required 
                            autofocus 
                            autocomplete="student_id" 
                            pattern="^\d{7}$" 
                            title="Student ID must be exactly 7 digits"
                            maxlength="7"
                        />
                        <div id="student_id_error" class="mt-2 text-sm text-red-600 hidden">
                            Student ID must be exactly 8 digits
                        </div>
                    </div>
                    
                    <div class="flex items-center justify-end mt-4">
                        <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                            {{ __('Already registered?') }}
                        </a>

                        <x-primary-button type="button" onclick="nextStep()" class="ms-4">
                            {{ __('Next') }}
                        </x-primary-button>
                    </div>
                </form>
            </div>

            <!-- Step 2: TOR Number -->
            <div class="slide">
                <form id="step2Form" method="POST" action="{{ route('register') }}">
                    @csrf
                    
                    <div>
                        <x-input-label for="tor_number" :value="__('TOR Number')" />
                        <x-text-input 
                            id="tor_number" 
                            class="block mt-1 w-full" 
                            type="text" 
                            name="tor_number" 
                            :value="old('tor_number')" 
                            required 
                            autocomplete="tor_number"
                        />
                        <x-input-error :messages="$errors->get('tor_number')" class="mt-2" />
                    </div>
                    
                    <div class="flex items-center justify-between mt-4">
                        <button type="button" onclick="prevStep()" class="inline-flex items-center px-4 py-2 bg-gray-300 border border-transparent rounded-md font-semibold text-xs text-gray-700 uppercase tracking-widest hover:bg-gray-400 focus:bg-gray-400 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">
                            {{ __('Back') }}
                        </button>

                        <x-primary-button class="ms-4">
                            {{ __('Register') }}
                        </x-primary-button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Progress Indicator -->
    <div class="flex justify-center mt-6">
        <div class="flex space-x-2">
            <div id="step1Indicator" class="w-3 h-3 bg-indigo-600 rounded-full"></div>
            <div id="step2Indicator" class="w-3 h-3 bg-gray-300 rounded-full"></div>
        </div>
    </div>

    @if($errors->any())
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                // Auto-advance to step 2 if there are server validation errors
                nextStep();
            });
        </script>
    @endif

    <script>
        let currentStep = 1;
        const slideWrapper = document.getElementById('slideWrapper');
        const step1Indicator = document.getElementById('step1Indicator');
        const step2Indicator = document.getElementById('step2Indicator');

        function nextStep() {
            // Validate student ID
            const studentId = document.getElementById('student_id').value;
            const studentIdError = document.getElementById('student_id_error');
            
            if (!/^\d{7}$/.test(studentId)) {
                studentIdError.classList.remove('hidden');
                return;
            } else {
                studentIdError.classList.add('hidden');
            }

            // Move to step 2
            currentStep = 2;
            slideWrapper.classList.add('step-2');
            step1Indicator.classList.remove('bg-indigo-600');
            step1Indicator.classList.add('bg-gray-300');
            step2Indicator.classList.remove('bg-gray-300');
            step2Indicator.classList.add('bg-indigo-600');

            // Focus on TOR number input
            setTimeout(() => {
                document.getElementById('tor_number').focus();
            }, 300);
        }

        function prevStep() {
            currentStep = 1;
            slideWrapper.classList.remove('step-2');
            step2Indicator.classList.remove('bg-indigo-600');
            step2Indicator.classList.add('bg-gray-300');
            step1Indicator.classList.remove('bg-gray-300');
            step1Indicator.classList.add('bg-indigo-600');

            // Focus on student ID input
            setTimeout(() => {
                document.getElementById('student_id').focus();
            }, 300);
        }

        // Handle form submission
        document.getElementById('step2Form').addEventListener('submit', function(e) {
            // Add student ID to the form data
            const studentId = document.getElementById('student_id').value;
            const hiddenInput = document.createElement('input');
            hiddenInput.type = 'hidden';
            hiddenInput.name = 'student_id';
            hiddenInput.value = studentId;
            this.appendChild(hiddenInput);
        });

        // Handle Enter key on student ID input
        document.getElementById('student_id').addEventListener('keypress', function(e) {
            if (e.key === 'Enter') {
                e.preventDefault();
                nextStep();
            }
        });
    </script>
</x-guest-layout>