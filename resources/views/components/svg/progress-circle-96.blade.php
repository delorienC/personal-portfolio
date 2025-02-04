<svg class="w-full h-full transform hidden" viewBox="0 0 36 36" xmlns="http://www.w3.org/2000/svg">
    <!-- Background Circle -->
    <circle class="text-white" stroke-width="3" stroke="currentColor" fill="transparent" r="16" cx="18"
        cy="18" />
    <!-- Progress Circle -->
    <circle class="text-black-500" stroke-width="3" stroke-dasharray="{{ $progress }}, 100" stroke-linecap="round"
        stroke="currentColor" fill="transparent" r="16" cx="18" cy="18" transform="rotate(-90 18 18)" />
    <!-- Percentage display -->
    <image href="{{ asset('images/icons8-' . $iconlogo . '-96.png') }}" x="10" y="10" height="15" width="15" />
</svg>
