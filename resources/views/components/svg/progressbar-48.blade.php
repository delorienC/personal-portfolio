<svg class="w-full" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 50">
    <!-- Icon links -->
    <image href="{{ asset('images/icons8-' . $iconlogo . '-48.png') }}" x="5" y="5" height="40" width="40" />

    <!-- Background of the progress bar -->
    <rect x="50" y="20" width="140" height="10" fill="lightgray" rx="5" />

    <!-- Progress indicator -->
    <rect x="50" y="20" width="{{ $progress * 1.4 }}" height="10" fill="blue" rx="5" />
</svg>
