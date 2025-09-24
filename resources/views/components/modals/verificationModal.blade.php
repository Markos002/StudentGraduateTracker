@props(['id' => ''])

<div id="{{ $id }}" class="modal-overlay hidden bg-gray-800 fixed inset-0 bg-opacity-50  items-center justify-center  z-50">
    <div class="bg-white text-black rounded-lg p-7 w-full max-w-2xl mx-4">
        <div class="flex justify-between place-content-center items-center">
            <h2 class="text-md font-bold">Enter Student ID</h2>
            <button type="button" onclick="closeModal('{{ $id }}')" class="text-black text-3xl hover:text-gray-800 ">&times;</button>
        </div>
        <p class="mt-2 text-sm ">Please input your Student ID number to confirm your status as a 4th year graduate. Ensures that the ID entered matches your official school records.</p>

        <div class="mt-4 flex justify-end">
            <x-inputs.standard-input id="student_id" 
            type="text" 
            label="Student ID" 
            pattern="^\d{8}$" 
            title="Student ID must be exactly 7 digits"
            class="w-full border border-gray-500"
            maxlength="8" />
        </div>
        <div id="student_id_error" class="mt-2 text-sm text-red-600 hidden">
            Student ID must be exactly 8 digits
        </div>
        <div class="">
            <x-buttons.primary-button id="submit" class="mt-4 py-3 w-full place-content-center" type="submit" onclick="nextStep({{ $id }}, 'successMessage')">Submit</x-buttons.primary-button>
        </div>
    </div>
</div>

<x-modals.verificationMessages id="errorMessage" errorType="error"/>
<x-modals.verificationMessages id="successMessage" errorType="success"/>

<script>
    function nextModal(currentId, nextId) {
        closeModal(currentId);
            openModal(nextId);
    }
    function nextStep(currentId, nextId) {
            // Validate student ID
            const studentId = document.getElementById('student_id').value;
            const studentIdError = document.getElementById('student_id_error');
            
            if (!/^\d{8}$/.test(studentId)) {
                studentIdError.classList.remove('hidden');
                return;
            } else {
                studentIdError.classList.add('hidden');
                closeModal(currentId);
            }
            openModal(nextId);
    }
</script>