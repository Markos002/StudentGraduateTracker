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
            <!-- Step 1: Student Information -->
            <div class="slide">
                <form id="step1Form">
                    <div>

                         <!-- Student ID -->
                    <div>
                        <x-input-label for="student_id" :value="__('Student ID')" />
                        <x-text-input id="student_id" class="block mt-1 w-full" type="text" name="student_id" :value="old('student_id', $studentData['studentId'])" readonly />
                        <x-input-error :messages="$errors->get('student_id')" class="mt-2" />
                        <div id="student_id_error" class="mt-2 text-red-600 text-sm hidden">Student ID must be exactly 7 digits.</div>
                    </div>

                    <!-- Last Name -->
                    <div>
                        <x-input-label for="lastName" :value="__('Last Name')" />
                        <x-text-input id="lastName" class="block mt-1 w-full" type="text" name="last_name"  :value="old('last_name', $studentData['lastName'])"  required autofocus autocomplete="name" />
                        <x-input-error :messages="$errors->get('last_name')" class="mt-2" />
                    </div>

                    <!-- First Name -->
                    <div class="mt-4">
                        <x-input-label for="firstName" :value="__('First Name')" />
                        <x-text-input id="firstName" class="block mt-1 w-full" type="text" name="first_name" :value="old('first_name', $studentData['firstName'])" required autocomplete="name" />
                        <x-input-error :messages="$errors->get('first_name')" class="mt-2" />
                    </div>

                    <!-- Address -->
                    <div class="mt-4">
                        <x-input-label for="address" :value="__('Address')" />
                        <x-text-input id="address" class="block mt-1 w-full" type="text" name="address" :value="old('address')" required autocomplete="address" />
                        <x-input-error :messages="$errors->get('address')" class="mt-2" />
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

            <!-- Step 2: Account Information -->
            <div class="slide">
                <form id="step2Form" method="POST" action="{{ route('register-confirm-data') }}">
                    @csrf
                    
                     <!-- Email -->
                    <div class="mt-4">
                        <x-input-label for="email" :value="__('Email')" />
                        <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="email" />
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>

                    <!-- Phone -->
                    <div class="mt-4">
                        <x-input-label for="phone" :value="__('Phone')" />
                        <x-text-input id="phone" class="block mt-1 w-full" type="text" name="phone" :value="old('phone')" pattern="[0-9]{11}" minlength="11" maxlength="11" inputmode="numeric" placeholder="09XXXXXXXXX" />
                        <x-input-error :messages="$errors->get('phone')" class="mt-2" />
                    </div>

                   <!-- Password -->
                    <div>
                        <x-input-label for="password" :value="__('Password')" />
                        <x-text-input id="password"
                                    class="block mt-1 w-full"
                                    type="password"
                                    name="password"
                                    required
                                    minlength="8"
                                    pattern="^(?=.*[0-9])(?=.*[\W_]).+$"
                                    placeholder="At least 8 characters, 1 number & 1 symbol" />
                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>

                    <!-- Confirm Password -->
                    <div>
                        <x-input-label for="password_confirmation" :value="__('Confirm Password')" />
                        <x-text-input id="password_confirmation"
                                    class="block mt-1 w-full"
                                    type="password"
                                    name="password_confirmation"
                                    required
                                    minlength="8"
                                    pattern="^(?=.*[0-9])(?=.*[\W_]).+$"
                                    placeholder="Re-type password" />
                        <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
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

            // Copy Step 1 data to Step 2 form as hidden inputs
            const step2Form = document.getElementById('step2Form');
            const step1Fields = ['student_id', 'lastName', 'firstName', 'address'];
            
            // Remove existing hidden inputs to avoid duplicates
            step2Form.querySelectorAll('input[type="hidden"]').forEach(input => {
                if (step1Fields.includes(input.name)) {
                    input.remove();
                }
            });
            
            // Add Step 1 data as hidden inputs
            step1Fields.forEach(fieldId => {
                const field = document.getElementById(fieldId);
                if (field && field.value) {
                    const hiddenInput = document.createElement('input');
                    hiddenInput.type = 'hidden';
                    hiddenInput.name = fieldId === 'lastName' ? 'last_name' : 
                                      fieldId === 'firstName' ? 'first_name' : 
                                      fieldId;
                    hiddenInput.value = field.value;
                    step2Form.appendChild(hiddenInput);
                }
            });

            // Move to step 2
            currentStep = 2;
            slideWrapper.classList.add('step-2');
            step1Indicator.classList.remove('bg-indigo-600');
            step1Indicator.classList.add('bg-gray-300');
            step2Indicator.classList.remove('bg-gray-300');
            step2Indicator.classList.add('bg-indigo-600');

            // Focus on email input
            setTimeout(() => {
                document.getElementById('email').focus();
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

        // Handle form submission (this is now handled in nextStep function)
        document.getElementById('step2Form').addEventListener('submit', function(e) {
            // Additional validation can be added here if needed
            console.log('Form submitted with all data');
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