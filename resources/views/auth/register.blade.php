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
            padding: 1rem;
        }
        .slide-wrapper.step-2 {
            transform: translateX(-50%);
        }
    </style>

    <div class="slide-container">
        <div class="slide-wrapper" id="slideWrapper">
            <!-- Step 1: Student ID -->
            <div class="slide " >
                <form id="step1Form" >
                @if(session('error'))
                    <x-sweetAlert.error-message 
                        title="Error" 
                        :message="session('error')" 
                        type="error" />
                @endif

                @if(session('success'))
                    <x-sweetAlert.success-message 
                        title="Success" 
                        :message="session('success')" 
                        type="success" />
                @endif
                    <div class="flex justify-between place-content-center items-center">
                        <h2 class="text-md font-bold">Enter Student ID</h2>
                    </div>
                    <p class="mt-2 text-sm ">Please input your Student ID number to confirm your status as a 4th year graduate. Ensures that the ID entered matches your official school records.</p>
                    <div class="mt-4 flex justify-end mb-4">
                        <x-inputs.standard-input id="student_id" 
                        type="text" 
                        label="Student ID" 
                        pattern="^\d{7}$" 
                        title="Student ID must be exactly 7 digits"
                        class="w-full border border-gray-500"
                        maxlength="7"
                        required 
                        autofocus 
                        autocomplete="student_id"  />
                    </div>
                    <div id="student_id_error" class="mt-2 text-sm text-red-600 hidden">
                        Student ID must be exactly 7 digits
                    </div>

                    <x-buttons.primary-button type="button" onclick="nextStep()" class=" my-2 py-3 w-full place-content-center">
                        {{ __('Next') }}
                    </x-buttons.primary-button>
                    <a class="py-4 underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none " href="/">
                        {{ __('Already registered?') }}
                    </a>
                </form>
            </div>

            <!-- Step 2: TOR Number -->
            <div class="slide">
                <form id="step2Form" method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="flex justify-between place-content-center items-center">
                        <h2 class="text-md font-bold">TOR Number Verification</h2>
                    </div>
                    <div class="space-y-5 text-black text-sm my-5">
                        <p class="mt-2  ">Please input your TOR Number to confirm your status as a 4th year graduate. Ensures that the TOR Number entered matches your official school records.</p>
                        <p>NOTE: <i>Request it first in registrar Office</i></p>
                    </div>
                    <div>
                        <x-inputs.standard-input 
                        id="tor_number" 
                        name="tor_number"
                        type="text" 
                        :value="old('tor_number')" 
                        label="TOR Number" 
                        class="w-full border border-gray-500"
                        maxlength="7"
                        required 
                        autofocus 
                        autocomplete="tor_number"  />
                        <x-input-error :messages="$errors->get('tor_number')" class="mt-2" />
                    </div>
                    
                    <div class="flex items-center justify-between mt-4 py-2">
                        <button type="button" onclick="prevStep()" class="inline-flex items-center px-4 py-3 bg-gray-300 border border-transparent rounded-md font-semibold text-xs text-gray-700 uppercase tracking-widest hover:bg-gray-400 focus:bg-gray-400 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">
                            {{ __('Back') }}
                        </button>

                        <x-buttons.primary-button class="ms-4 py-3">
                            {{ __('Register') }}
                        </x-buttons.primary-button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Progress Indicator 
    <div class="flex justify-center mt-6">
        <div class="flex space-x-2">
            <div id="step1Indicator" class="w-3 h-3 bg-indigo-600 rounded-full"></div>
            <div id="step2Indicator" class="w-3 h-3 bg-gray-300 rounded-full"></div>
        </div>
    </div>
    -->
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

            // Focus on TOR number input
            setTimeout(() => {
                document.getElementById('tor_number').focus();
            }, 300);
        }

        function prevStep() {
            currentStep = 1;
            slideWrapper.classList.remove('step-2');

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