@props(['title' => '', 'message' => '', 'type' => 'info'])
@if(session('success'))
    <script>
        Swal.fire({
            html: `
                <div class="bg-white text-black rounded-lg p-7 w-full text-left">
                @if($type === 'success')
                    <div class="text-sm">
                        <h2 class="text-lg font-bold mb-3 text-green-600">Verified Successfully</h2>

                        <p>You have been confirmed as a 4th-year graduate student.</p>
                        <p>You are now eligible to proceed with your Registration</p>
                    </div>
                    <x-buttons.primary-button class="place-content-center mt-4 w-full py-3 text-white rounded-lg " type="button" onclick="Swal.close()"
                    Proceed to Registration
                    </x-buttons.primary-button>
                @endif
                </div>
                `,
            showConfirmButton: false, // use custom buttons instead
            customClass: {
                popup: 'p-0 bg-transparent shadow-none', // removes default SweetAlert box
            }
        });
    </script>
@endif