<g class="gsap-animate-cv-part entry">
    <circle cx="{{ $cx }}" cy="{{ $cy }}" r="6" fill="white" />
    <text text-anchor="{{ $anchor }}" fill="white">
        <tspan x="{{ $x }}" y="{{ $y }}" class="text-[2rem] md:text-[1.5rem] lg:text-[1.2rem]">
            {{ $from }} - {{ $to }}</tspan>
        <tspan x="{{ $x }}" dy="1.2em" class="text-[2rem] md:text-[1.5rem] lg:text-[1.2rem]">
            {{ $company }}</tspan>
        <tspan x="{{ $x }}" dy="1.2em" class="text-[2rem] md:text-[1.5rem] lg:text-[1.2rem]">
            {{ $position }} </tspan>
    </text>
</g>
