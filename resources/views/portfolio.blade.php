<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Portfolio from John Doe</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Styles / Scripts -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/js/portfolio.js'])
        {{-- @else
        <link rel="stylesheet" href="{{ asset('build/assets/fallback.css') }}"> --}}
    @endif
</head>
{{-- TODO -- Delete all the blade files and extension you don't need --}}

<body class="bg-white" id="home">
    <!-- Header -->
    <header class="sticky top-0 z-50 shadow-md bg-white">
        <!-- Navigation Browser Menu -->
        <nav class="mt-2 py-2">
            <!-- Tablet and Desktop menu, show/hide based on menu state. -->
            <div id="tablet-menu" class="hidden flex-1 items-center justify-center sm:flex">
                <div class="">
                    <div class="flex space-x-4 bg-black rounded-full p-3">
                        <a href="#home"
                            class="rounded-full px-3 py-2 text-xl font-medium text-gray-300 hover:bg-white hover:text-black tablet-scroll-link"
                            aria-current="page">Home</a>
                        <a href="#experience"
                            class="rounded-full px-3 py-2 text-xl font-medium text-gray-300 hover:bg-white hover:text-black tablet-scroll-link">
                            Experience</a>
                        <a href="#cv"
                            class="rounded-full px-3 py-2 text-xl font-medium text-gray-300 hover:bg-white hover:text-black tablet-scroll-link">
                            CV</a>
                        <a href="#contact"
                            class="rounded-full px-3 py-2 text-xl font-medium text-gray-300 hover:bg-white hover:text-black tablet-scroll-link">
                            Contact</a>
                    </div>
                </div>
            </div>
            <!-- Mobile menu. -->
            <div id="mobile-menu" class="flex items-center justify-center w-full">
                <div x-data="{ open: false }" x-init="open = false" class="lg:hidden md:hidden sm:hidden w-full">
                    <button @click="open = !open" class="p-2 w-full">☰</button>
                    <ul x-show="open" class="w-full bg-gray-900 text-white p-0 text-center space-y-2" x-transition>
                        <li>
                            <a href="#home" class="block hover:text-gray-400 mobile-scroll-link py-2"
                                @click="open = false">
                                Home
                            </a>
                        </li>
                        <li>
                            <a href="#experience" class="block hover:text-gray-400 mobile-scroll-link py-2"
                                @click="open = false">
                                Experience
                            </a>
                        </li>
                        <li>
                            <a href="#cv" class="block hover:text-gray-400 mobile-scroll-link py-2"
                                @click="open = false">
                                CV
                            </a>
                        </li>
                        <li>
                            <a href="#contact" class="block hover:text-gray-400 mobile-scroll-link py-2"
                                @click="open = false">
                                Contact
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <!-- Main -->
    <main class="flex flex-col items-center justify-center max-w-[1500px] w-full mx-auto">
        <!-- Title Block-->
        <section class="md:block max-w-[100%] mx-auto text-center">
            <h1 class="text-black-primary">
                John Doe <br> Full-Stack Developer
            </h1>
        </section>
        <!-- About me Block-->
        <section class="gsap-animate-about md:block max-w-[100%] mx-auto text-center">
            <div class="grid grid-cols-1 md:grid-cols-2 justify-center p-4 gap-4">
                <div class="rounded-3xl justify-center items-center overflow-hidden grid">
                    <img class="w-full h-full object-cover" src="{{ asset('images/JohnDoeInOffice.jpg') }}"
                        alt="John Doe">
                </div>
                <div class="rounded-3xl p-5 lg:py-10 justify-center items-center text-justify bg-gray-900 text-white">
                    <h2 class="text-center">About Me</h2>
                    <p class="text-sm xl:text-2xl lg:text-xl md:text-sm">
                        Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt
                        ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo
                        dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor
                        sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor
                        invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et
                        justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem
                        ipsum dolor sit amet.
                    </p>
                </div>
            </div>
        </section>
        <!-- Collection Block -->
        <section class="gsap-animate-collection md:block max-w-[100%] mx-auto text-center">
            <div class="grid grid-cols-1 md:grid-cols-2 justify-center p-4 gap-4">
                <div class="rounded-3xl p-5 lg:py-10 justify-center items-center text-justify bg-amber-600 text-white">
                    <h2 class="text-center">Template collection</h2>
                    <p class="text-sm xl:text-2xl lg:text-xl md:text-sm">
                        Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt
                        ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo
                        dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor
                        sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor
                        invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et
                        justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem
                        ipsum dolor sit amet.
                    </p>
                </div>
                <div class="rounded-3xl justify-center items-center overflow-hidden">
                    <img class="w-full h-full object-cover" src="{{ asset('images/templates.webp') }}" alt="John Doe">
                </div>
            </div>
        </section>
        <!-- Experience Block -->
        <section class="bg-black w-full rounded-3xl" id="experience">
            <section class="md:block w-full mx-auto text-center text-amber-600 p-2">
                <h1 class="text-center">Experience</h1>
            </section>
            <!-- Experience Block -->
            <section class="w-full mx-auto text-center text-amber-600 p-2">
                <div class="p-2 gap-4 grid grid-cols-2 sm:grid-cols-3 justify-center items-center">
                    @foreach ($experiences as $experience)
                        <div class="gsap-animate-experiences">
                            <div class="w-full items-center justify-center">
                                <div class="bg-white rounded-3xl p-0">
                                    {{-- <x-svg.progressbar-48 progress="{{ $experience['procent'] }}"
                                        iconlogo="{{ $experience['experience'] }}" /> --}}
                                    <svg class="w-full" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 50">
                                        <!-- Icon links -->
                                        <image
                                            href="{{ asset('images/icons8-' . $experience['experience'] . '-48.png') }}"
                                            x="5" y="5" height="40" width="40" />

                                        <!-- Background of the progress bar -->
                                        <rect x="50" y="20" width="140" height="10" fill="lightgray"
                                            rx="5" />

                                        <!-- Progress indicator -->
                                        <rect x="50" y="20" width="{{ $experience['procent'] * 1.4 }}" height="10"
                                            fill="blue" rx="5" />
                                    </svg>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </section>
        </section>
        <!-- Curriculum Vitae Block -->
        <section id="cv"
            class="md:block w-full mx-auto text-center bg-gray-900 text-white py-10 rounded-3xl m-10"
            data-taos-offset="300">
            <div class="md:block w-full mx-auto text-center">
                <div class="gsap-animate-cv">
                    <h1 class="text-black-primary">
                        Curriculum Vitae
                    </h1>
                </div>
            </div>
            <div class="gsap-animate-cv">
                <div class="bg-amber-600 py-10 px-4 md:px-10 mx-auto max-w-[90%] rounded-3xl">
                    <svg viewBox="0 0 600 1100" class="w-full rounded-3xl">
                        <!-- Vertical line -->
                        <line x1="300" y1="0" x2="300" y2="1100" stroke="white"
                            stroke-width="4" />
                        @php
                            $cy = 50;
                            $y = 50;
                            $x = 320;
                            $anchor = 'start';
                        @endphp
                        @foreach ($cvlist as $cv)
                            <g class="gsap-animate-cv-part entry">
                                <circle cx="300" cy="{{ $cy }}" r="6" fill="white" />
                                <text text-anchor="{{ $anchor }}" fill="white">
                                    <tspan x="{{ $x }}" y="{{ $y }}"
                                        class="text-[2rem] md:text-[1.5rem] lg:text-[1.2rem]">
                                        {{ $cv['from'] }} - {{ $cv['to'] }}</tspan>
                                    <tspan x="{{ $x }}" dy="1.2em"
                                        class="text-[2rem] md:text-[1.5rem] lg:text-[1.2rem]">
                                        {{ $cv['company'] }}</tspan>
                                    <tspan x="{{ $x }}" dy="1.2em"
                                        class="text-[2rem] md:text-[1.5rem] lg:text-[1.2rem]">
                                        {{ $cv['position'] }} </tspan>
                                </text>
                            </g>
                            @php
                                if ($anchor == 'start') {
                                    $anchor = 'end';
                                    $x = 280;
                                } else {
                                    $anchor = 'start';
                                    $x = 320;
                                }
                                $cy += 100;
                                $y += 100;
                            @endphp
                        @endforeach
                    </svg>
                </div>
            </div>
        </section>
        <!-- Contact Block -->
        <section id="contact" class="md:block w-full mx-auto text-center bg-amber-600 text-white rounded-3xl">
            <div class="md:block w-full mx-auto text-center p-2">
                <h1>Contact</h1>
                <!-- Networt Links -->
                <div class="gsap-animate-contact">
                    <div class="md:block w-full mx-auto text-center p-4">
                        @foreach ($contact2networks as $network)
                            <a href="{{ $network['link'] }}" target="_blank" class="inline-block">
                                <img class="hidden lg:block"
                                    src="{{ asset('images/icons8-' . $network['title'] . '-96.png') }}"
                                    alt="{{ $network['title'] }}" class="hover:opacity-80">
                                <img class="block lg:hidden"src="{{ asset('images/icons8-' . $network['title'] . '-48.png') }}"
                                    alt="{{ $network['title'] }}" class="hover:opacity-80">
                            </a>
                        @endforeach
                    </div>
                </div>
                <!-- Contact Formular -->
                <form action="#"
                    class="flex justify-center items-center transition duration-500 transform -translate-y-100">
                    <div class="grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6 w-[80%] text-center p-6">
                        @foreach ($contactfields as $contactfield)
                            <div class="sm:col-span-3">
                                <label for="{{ $contactfield['name'] }}"
                                    class="block">*{{ $contactfield['title'] }}</label>
                                <div class="mt-2">
                                    <input type="text" name="{{ $contactfield['name'] }}"
                                        id="{{ $contactfield['name'] }}" autocomplete="{{ $contactfield['name'] }}"
                                        class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6"
                                        {{ $contactfield['required'] }}>
                                </div>
                            </div>
                        @endforeach
                        <div class="sm:col-span-3">
                            <p class="block">*You have to fill all Fields</p>
                            <div>
                                <button name="submit" type="submit"
                                    class="flex w-full justify-center rounded-md bg-black px-3 py-1.5 text-sm/6 font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Send</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </section>
    </main>
    <!-- Footer -->
    <footer>
        <section class="md:block w-full mx-auto text-center p-6">
            <p>&copy; {{ date('Y') }} - John Doe</p>
        </section>
    </footer>
</body>

</html>
