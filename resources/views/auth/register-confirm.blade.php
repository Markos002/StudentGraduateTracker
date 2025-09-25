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
            @if(session('success'))
                <x-sweetAlert.success-message 
                    title="Success" 
                    :message="session('success')" 
                    type="success" />
            @endif

            <!-- Step 1: Student Information -->
            <div class="slide">
                <form id="step1Form">   
                    <div class="space-y-3">
                        <p class="text-2xl font-bold">Welcome</p>
                        <p class="text-sm font-bold text-gray-600">Please Register here!</p>

                        <!-- Student ID -->
                        <div class="border py-1.5 border-black rounded-md"> 
                            <x-inputs.auth-input disabled readonly id="student_id" label="Student ID" 
                                :value="old('student_id', $studentData['studentId'])" />
                            <x-input-error :messages="$errors->get('student_id')" class="mt-2" />
                        </div>
                        <div id="student_id_error" class="mt-2 text-red-600 text-sm hidden">
                            Student ID must be exactly 7 digits.
                        </div>

                        <!-- Last Name -->
                        <div class="border py-1.5 border-black rounded-md">
                            <x-inputs.auth-input id="lastName" label="Last Name" 
                                :value="old('last_name', $studentData['lastName'])" required />
                        </div>
                        <x-input-error :messages="$errors->get('last_name')" class="mt-2" />

                        <!-- First Name -->
                        <div class="border py-1.5 border-black rounded-md">
                            <x-inputs.auth-input id="firstName" label="First Name" 
                                :value="old('first_name', $studentData['firstName'])" required />
                        </div>
                        <x-input-error :messages="$errors->get('first_name')" class="mt-2" />

                        <!-- Address -->
                        <div class="border py-1.5 border-black rounded-md">
                            <x-inputs.auth-input id="address" label="Address" 
                                :value="old('address', $studentData['Address'] ?? '')" required/>
                        </div>
                        <x-input-error :messages="$errors->get('address')" class="mt-2" />
                    </div>  
                    
                    <div class="flex items-center justify-end mt-4">
                        <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" 
                           href="{{ route('login') }}">
                            {{ __('Already registered?') }}
                        </a>

                        <x-buttons.primary-button type="button" onclick="nextStep()" class="ms-4">
                            {{ __('Next') }}
                        </x-buttons.primary-button>
                    </div>
                </form>
            </div>

            <!-- Step 2: Account Information -->
            <div class="slide">
                <form class="space-y-3" id="step2Form" method="POST" action="{{ route('register-confirm-data') }}">
                    @csrf

                    <!-- Email -->
                    <div class="border py-1.5 border-black rounded-md">
                        <x-inputs.auth-input id="email" label="Email" type="email" name="email"
                            :value="old('email')" required />
                    </div>
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />

                    <!-- Phone -->
                    <div class="border py-1.5 border-black rounded-md">
                        <x-inputs.auth-input id="phone" label="Phone" type="text" name="phone"
                            :value="old('phone')" minlength="11" maxlength="11"
                            inputmode="numeric" placeholder="09XXXXXXXXX" />
                    </div>
                    <x-input-error :messages="$errors->get('phone')" class="mt-2" />
                    <ul id="phoneRequirements" class="text-sm mt-2 flex justify-between text-gray-600">
                        <li id="digitCheck" class="flex items-center">❌ Must be 11 digits</li>
                        <li id="startCheck" class="flex items-center">❌ Must start with 09</li>
                        <li id="numericCheck" class="flex items-center">❌ Numbers only</li>
                    </ul>

                    <!-- Password -->
                    <div class="border py-1.5 border-black rounded-md">
                        <x-inputs.auth-input id="password" label="Password" type="password" name="password"
                            required minlength="8" 
                            pattern="^(?=.*[0-9])(?=.*[\W_]).+$"
                            placeholder="At least 8 characters, 1 number & 1 symbol"
                            isPassword="true" />
                    </div>
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    <ul id="passwordRequirements" class="flex text-sm mt-2 justify-between text-gray-600">
                        <li id="lengthCheck">❌ At least 8 characters</li>
                        <li id="numberCheck">❌ At least 1 number</li>
                        <li id="symbolCheck">❌ At least 1 symbol</li>
                    </ul>

                    <!-- Confirm Password -->
                    <div class="border py-1.5 border-black rounded-md">
                        <x-inputs.auth-input id="password_confirmation" label="Confirm Password" 
                            type="password" name="password_confirmation" required minlength="8"
                            pattern="^(?=.*[0-9])(?=.*[\W_]).+$"
                            placeholder="Re-type password"
                            isPassword="true" />
                    </div>
                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />

                    <div class="flex items-center justify-between mt-4">
                        <button type="button" onclick="prevStep()"
                            class="px-4 py-2 bg-gray-300 rounded-md font-semibold text-xs text-gray-700 uppercase hover:bg-gray-400">
                            {{ __('Back') }}
                        </button>

                        <x-buttons.primary-button class="ms-4">
                            {{ __('Register') }}
                        </x-buttons.primary-button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    @if($errors->any())
        <script>
            document.addEventListener('DOMContentLoaded', nextStep);
        </script>
    @endif

    <script>
        let currentStep = 1;
        const slideWrapper = document.getElementById('slideWrapper');

        // ================= STEP HANDLING =================
        function nextStep() {
            const studentId = document.getElementById('student_id').value;
            const studentIdError = document.getElementById('student_id_error');

            if (!/^\d{7}$/.test(studentId)) {
                studentIdError.classList.remove('hidden');
                return;
            } else {
                studentIdError.classList.add('hidden');
            }

            // Step 1 values into hidden inputs
            const step2Form = document.getElementById('step2Form');
            ['student_id','lastName','firstName','address'].forEach(id => {
                const field = document.getElementById(id);
                if (field && field.value) {
                    let hidden = document.createElement('input');
                    hidden.type = 'hidden';
                    hidden.name = id === 'lastName' ? 'last_name' : id === 'firstName' ? 'first_name' : id;
                    hidden.value = field.value;
                    step2Form.appendChild(hidden);
                }
            });

            slideWrapper.classList.add('step-2');
            currentStep = 2;
            setTimeout(() => document.getElementById('email').focus(), 300);
        }

        function prevStep() {
            slideWrapper.classList.remove('step-2');
            currentStep = 1;
            setTimeout(() => document.getElementById('student_id').focus(), 300);
        }

        // ================= REQUIREMENT HELPERS =================
        function setRequirement(el, isValid, text) {
            el.textContent = (isValid ? "✅ " : "❌ ") + text;
            el.classList.toggle("text-green-600", isValid);
            el.classList.toggle("text-gray-600", !isValid);
        }

        // ================= PASSWORD CHECKER =================
        const passwordInput = document.getElementById('password');
        passwordInput.addEventListener('input', () => {
            const val = passwordInput.value;
            setRequirement(lengthCheck, val.length >= 8, "At least 8 characters");
            setRequirement(numberCheck, /\d/.test(val), "At least 1 number");
            setRequirement(symbolCheck, /[\W_]/.test(val), "At least 1 symbol");
        });

        // ================= PHONE CHECKER =================
        const phoneInput = document.getElementById('phone');
        phoneInput.addEventListener('input', () => {
            phoneInput.value = phoneInput.value.replace(/\D/g, '');
            const val = phoneInput.value;
            setRequirement(digitCheck, val.length === 11, "Must be 11 digits");
            setRequirement(startCheck, val.startsWith("09"), "Must start with 09");
            setRequirement(numericCheck, /^\d+$/.test(val), "Numbers only");
        });
    </script>
</x-guest-layout>
