@props([
    'type' => 'text',
    'id' => '',
    'name' => '',
    'label' => '',
    'isPassword' => false,
])

<div {{ $attributes->merge(['class' => 'relative w-full text-black bg-white']) }}>
    <input
        type="{{ $type }}"
        id="{{ $id }}"
        name="{{ $name ?: $id }}"   
        placeholder=" " 
        class="peer mt-0.5 w-full rounded shadow-sm sm:text-sm border-none focus:outline-none focus:ring-0 focus:border-transparent
        "
    />

    <label for="{{ $id }}"
        class="absolute left-3 top-2.5 text-gray-500 text-sm transition-all duration-200 
            peer-placeholder-shown:top-2.5 peer-placeholder-shown:text-gray-400 peer-placeholder-shown:text-sm
            peer-focus:-top-2 peer-focus:text-xs peer-focus:text-orange-600
            peer-[:not(:placeholder-shown)]:-top-2 peer-[:not(:placeholder-shown)]:text-xs
            cursor-text">
        {{ $label }}
    </label>

    @if ($isPassword)
        <button type="button"
            onclick="togglePassword('{{ $id }}')"
            class="absolute inset-y-0 right-3 flex items-center text-gray-500 hover:text-gray-700 focus:outline-none">
            {{-- Open --}}
            <svg id="eye-open-{{ $id }}" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
            <path fill="#f70202" d="M21.87 11.5c-.64-1.11-4.16-6.68-10.14-6.5c-5.53.14-8.73 5-9.6 6.5a1 1 0 0 0 0 1c.63 1.09 4 6.5 9.89 6.5h.25c5.53-.14 8.74-5 9.6-6.5a1 1 0 0 0 0-1M12.22 17c-4.31.1-7.12-3.59-8-5c1-1.61 3.61-4.9 7.61-5c4.29-.11 7.11 3.59 8 5c-1.03 1.61-3.61 4.9-7.61 5" />
            <path fill="#f70202" d="M12 8.5a3.5 3.5 0 1 0 3.5 3.5A3.5 3.5 0 0 0 12 8.5m0 5a1.5 1.5 0 1 1 1.5-1.5a1.5 1.5 0 0 1-1.5 1.5" />
            </svg>

            {{--Close --}}
            <svg id="eye-closed-{{ $id }}" class="hidden" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                <path fill="none" stroke="#f70202" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M13.875 18.825A10 10 0 0 1 12 19c-4.478 0-8.268-2.943-9.543-7A10 10 0 0 1 4.02 8.971m5.858.908a3 3 0 1 1 4.243 4.243M9.878 9.878l4.242 4.242M9.88 9.88L6.59 6.59m7.532 7.532l3.29 3.29M3 3l3.59 3.59m0 0A9.95 9.95 0 0 1 12 5c4.478 0 8.268 2.943 9.543 7a10.03 10.03 0 0 1-4.132 5.411m0 0L21 21" />
            </svg>
        </button>
    @endif
</div>

@once
    <script>
        function togglePassword(id) {
            const input = document.getElementById(id);
            const eyeOpen = document.getElementById(`eye-open-${id}`);
            const eyeClosed = document.getElementById(`eye-closed-${id}`);

            if (input.type === "password") {
                input.type = "text";
                eyeOpen.classList.add("hidden");
                eyeClosed.classList.remove("hidden");
            } else {
                input.type = "password";
                eyeClosed.classList.add("hidden");
                eyeOpen.classList.remove("hidden");
            }
        }
    </script>
@endonce
