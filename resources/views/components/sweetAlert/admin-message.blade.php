<script>
@props([
    'title' => 'Notification',
    'message' => '',
    'type' => 'info'
])
Swal.fire({
    toast: true,
    position: 'top-end',
    html: `
        <div class="bg-white text-black rounded-lg p-4 w-72 shadow-md text-left">
            <div class="flex items-start gap-2">
                @if($type === 'success')
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-green-500 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                    </svg>
                @elseif($type === 'error')
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-red-500 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                @endif
                <div>
                    <h2 class="text-base font-semibold mb-1 {{ $type === 'success' ? 'text-green-600' : 'text-red-600' }}">
                        {{ $title }}
                    </h2>
                    <p class="text-sm text-gray-700 leading-snug">
                        {{ $message }}
                    </p>
                </div>
            </div>
        </div>
    `,
    showConfirmButton: false,
    timer: 2000,
    timerProgressBar: false,
    background: 'transparent',
    customClass: {
        popup: 'shadow-none bg-transparent p-0'
    }
});
</script>
