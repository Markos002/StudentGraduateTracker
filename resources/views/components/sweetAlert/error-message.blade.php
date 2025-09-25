@props(['title' => '', 'message' => '', 'type' => 'info'])
@if(session('error'))
    <script>
        Swal.fire({
            html: `
                <div class="bg-white text-black rounded-lg p-7 w-full text-left">
                    @if($type === 'error')
                        <h2 class="text-lg font-bold mb-3 text-red-600">Student ID Not Found or Ineligible Status</h2>
                        <p class="mt-2 text-sm">We couldn't find your Student ID in our system or your records indicate you are not currently a 4th-year graduate student.</p>
                        <li class="py-4 text-sm"> Please double-check your student ID and graduation status. If you believe this is an error, kindly contact support for further assistance. </li>
                        <x-buttons.primary-button class="place-content-center mt-4 w-full py-3 text-white rounded-lg " type="button" onclick="Swal.close()">
                        Back
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