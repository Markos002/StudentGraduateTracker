@props(['id' => '',
        'errorType' => ''])

<div id="{{ $id }}" class="modal-overlay hidden bg-gray-800 fixed inset-0 bg-opacity-50  items-center justify-center  z-50">
    <div class="bg-white text-black rounded-lg p-7 w-full max-w-2xl mx-4">
        <div class="flex justify-between place-content-center items-center">
            @if ($errorType === 'error')
                <h2>Student ID Not Found or Ineligible Status</h2>
            @elseif ($errorType === 'success')
                <h2 class="text-md font-bold ">TOR Number Verification</h2>
            @endif
            <button type="button" onclick="closeModal('{{ $id }}')" class="text-black text-3xl hover:text-gray-800 ">&times;</button>
        </div>
            @if($errorType === 'error')
                <p class="mt-2 text-sm ">We coudn't find your Student ID in our system or your records which indicates that you're not currently a 4th-year graduate student.</p>
                <x-buttons.primary-button class="mt-4 py-3 w-full place-content-center" type="submit" onclick="closeModal('{{ $id }}')">Back to Home</x-buttons.primary-button>
            @elseif($errorType === 'success')
                <div class="text-black mt-2 text-sm space-y-5 mb-5 ml-3">
                    <p>You are a confirmed 4th-year graduate student. Please provide your TOR Number carefully.</p>
                    <p>NOTE: <i>Request it first in registrar Office</i></p>
                </div>
                <x-inputs.standard-input id="tor_number" type="text" label="TOR NUMBER" class="w-full border border-gray-500" />
                <x-buttons.primary-button class="mt-4 py-3 w-full place-content-center" type="submit" onclick="closeModal('{{ $id }}')">Submit</x-buttons.primary-button>
            @endif

    </div>
</div>