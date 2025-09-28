@props(['align' => 'right', 'width' => '48', 'contentClasses' => 'py-1 bg-white'])

@php
$alignmentClasses = match ($align) {
    'left' => 'ltr:origin-top-left rtl:origin-top-right start-0',
    'top' => 'origin-top',
    default => 'ltr:origin-top-right rtl:origin-top-left end-0',
};

$width = match ($width) {
    '48' => 'w-48',
    default => $width,
};
@endphp

<div class="relative flex cursor-pointer rounded-md border border-black " x-data="{ open: false }" @click.outside="open = false" @close.stop="open = false">
    <div class="flex gap-5 cursor-pointer py-2 px-5" @click="open = ! open">
        {{ $trigger }}
        <div class="place-content-center">
            <svg width="10" height="6" viewBox="0 0 10 6" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M8.85892 0.268115L5 4.29356L1.14108 0.268115C0.836791 -0.0819238 0.532503 -0.0892166 0.228216 0.246237C-0.076072 0.581691 -0.076072 0.909853 0.228216 1.23072L4.54357 5.78123C4.65422 5.92708 4.80636 6 5 6C5.19364 6 5.34578 5.92708 5.45643 5.78123L9.77178 1.23072C10.0761 0.909853 10.0761 0.581691 9.77178 0.246237C9.4675 -0.0892166 9.16321 -0.0819238 8.85892 0.268115Z" fill="black" fill-opacity="0.4"/></svg>
        </div>
    </div>
    

    <div x-show="open"
            x-transition:enter="transition ease-out duration-200"
            x-transition:enter-start="opacity-0 scale-95"
            x-transition:enter-end="opacity-100 scale-100"
            x-transition:leave="transition ease-in duration-75"
            x-transition:leave-start="opacity-100 scale-100"
            x-transition:leave-end="opacity-0 scale-95"
            class="absolute z-50 mt-2 {{ $width }} rounded-md shadow-lg {{ $alignmentClasses }}"
            style="display: none;"
            @click="open = false">
        <div class="rounded-md ring-1 mt-9 ring-black ring-opacity-5 {{ $contentClasses }}">
            {{ $content }}
        </div>
    </div>
</div>
