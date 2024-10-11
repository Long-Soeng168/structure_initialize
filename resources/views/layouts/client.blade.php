<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>
        Cora Soft Solution
    </title>
    @yield('meta_data')
    <link rel="icon" type="image/png" href="{{ asset('assets/images/'.$websiteInfo->logo) }}">

    <script src="{{ asset('assets/js/tailwind34.js') }}"></script>
    <script src="{{ asset('assets/js/swiper11.js') }}"></script>
    <script defer src="{{ asset('assets/js/flowbite23.js') }} "></script>
    <script defer src="{{ asset('assets/js/glightbox.js') }}"></script>
    <script defer src="{{ asset('assets/js/glightbox.config.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('assets/css/no-tailwind.css') }}" />

    {{-- Start PWA --}}
   <meta name="apple-mobile-web-app-capable" content="yes">
   <meta name="apple-mobile-web-app-status-bar-style" content="black">
   <meta name="apple-mobile-web-app-title" content="{{ $websiteInfo->name }}">
   <link rel="apple-touch-icon" href="{{ asset('assets/images/website_infos/logo.png') }}">
   <link rel="apple-touch-startup-image" href="{{ asset('assets/images/website_infos/logo.png') }}">
   <link rel="icon" href="{{ asset('assets/images/website_infos/logo.png') }}">

   <link rel="manifest" href="{{ asset('/manifest.json') }}">

    <!-- Start Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Moul&family=Poppins:ital&family=Rubik+Doodle+Shadow&display=swap,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Siemreap&display=swap"
        rel="stylesheet" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    <style>
        @font-face {
            font-family: "Costum1";
            src: url('assets/fonts/Raleway-Black.ttf') format("truetype");
            font-weight: normal;
            font-style: normal;
        }

        @font-face {
            font-family: "Costum2";
            src: url("assets/fonts/Raleway-BlackItalic.ttf") format("truetype");
            font-weight: normal;
            font-style: normal;
        }

        @font-face {
            font-family: "Costum3";
            src: url("assets/fonts/Raleway-Bold.ttf") format("truetype");
            font-weight: normal;
            font-style: normal;
        }

        @font-face {
            font-family: "Costum4";
            src: url("assets/fonts/Raleway-Medium.ttf") format("truetype");
            font-weight: normal;
            font-style: normal;
        }

        @font-face {
            font-family: "Costum5";
            src: url("assets/fonts/Raleway-ExtraBold.ttf") format("truetype");
            font-weight: normal;
            font-style: normal;
        }

        @font-face {
            font-family: "Costum6";
            src: url("assets/fonts/Raleway-ExtraBoldItalic.ttf") format("truetype");
            font-weight: normal;
            font-style: normal;
        }

        @font-face {
            font-family: "Costum7";
            src: url("assets/fonts/Raleway-ExtraLight.ttf") format("truetype");
            font-weight: normal;
            font-style: normal;
        }

        @font-face {
            font-family: "Costum8";
            src: url("assets/fonts/Raleway-SemiBold.ttf") format("truetype");
            font-weight: normal;
            font-style: normal;
        }

        @font-face {
            font-family: "Costum9";
            src: url("assets/fonts/Raleway-Italic.ttf") format("truetype");
            font-weight: normal;
            font-style: normal;
        }

        @font-face {
            font-family: "Costum10";
            src: url("assets/fonts/FunlandParkOpenJLRegular.ttf") format("truetype");
            font-weight: normal;
            font-style: normal;
        }

        .light-color-gradient {
            position: relative;
            background-color: #f5f6f7;
            background-image: linear-gradient(54deg,
                    rgba(255, 131, 122, 0.25),
                    rgba(255, 131, 122, 0) 28%),
                linear-gradient(241deg,
                    rgba(239, 152, 207, 0.25),
                    rgba(239, 152, 207, 0) 36%);
        }

        .gradient-bg {
            background: linear-gradient(to right, #06b6d4, #3b82f6);
        }

        .shadow-custom {
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1),
                0 2px 4px rgba(0, 0, 0, 0.06);
        }

        .layer {
            transition: transform 0.5s ease-out;
        }

        .layer:hover {
            transform: scale(1.05);
        }

        .image-container:hover .layer {
            transition: transform 0.1s ease-out;
            /* Manually defining the transition */
        }

        .layer {
            pointer-events: none;
            /* Ensuring the layer does not block cursor events */
        }

        .primary2 {
            background-color: #3a3e67;
        }

        html,
        body {
            position: relative;
            height: 100%;
        }

        body {
            background: #ffffff;
            font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
            font-size: 14px;
            color: #000;
            margin: 0;
            padding: 0;
        }

        swiper-container {
            width: 100%;
            height: 100%;
        }

        swiper-slide {
            text-align: center;
            font-size: 18px;
            background: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        swiper-slide img {
            display: block;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .image-container {
            position: relative;
            overflow: hidden;
        }

        .layer {
            transition: transform 0.3s ease;
        }
    </style>

    <script>
        tailwind.config = {
            darkMode: "class", // Enables dark mode based on class
            theme: {
                extend: {
                    colors: {
                        clifford: "#da373d",
                        primary1: "#43428d",
                        primary2: "#3a3e67",
                        primary3: "#565c6a",
                        text_color1: "#787e8c",
                        text_color2: "#565c6a",
                        warning: "#fab105",
                        warningHover: "#ffb915",
                    },
                },
                fontFamily: {
                    koluen: ["Koulen"],
                    costum1: ["Costum1", "sans-serif"],
                    costum2: ["Costum2", "sans-serif"],
                    costum3: ["Costum3", "sans-serif"],
                    costum4: ["Costum4", "sans-serif"],
                    costum5: ["Costum5", "sans-serif"],
                    costum6: ["Costum6", "sans-serif"],
                    costum7: ["Costum7", "sans-serif"],
                    costum8: ["Costum8", "sans-serif"],
                    costum9: ["Costum9", "sans-serif"],
                    rubik: ["Rubik Doodle Shadow"],
                    Costum10: ["FunlandParkOpen", "Rubik Doodle Shadow"],
                    poppin: ["Poppins"]
                },
            },
        };
    </script>
</head>

<body class="text-black">
    <!-- Start Navbar -->
    <section>
        <nav class="fixed top-0 z-40 w-full bg-white shadow start-0">
            <div class="flex items-center justify-between max-w-screen-xl px-4 mx-auto">
                <!-- Logo -->
                <div class="flex items-center">
                    <a href="{{ url('/') }}">
                        <img src="{{ asset('assets/images/website_infos/'.$websiteInfo->image) }}" class="object-contain w-20 aspect-square md:w-24 lg:w-28"
                            alt="Logo">
                    </a>
                </div>
                <div class="flex items-center space-x-5 md:space-x-10">
                    <!-- Menu for larger screens -->
                    <ul class="items-center hidden gap-8 text-xl lg:flex">
                        <li><a href="{{ url('/') }}"
                                class="{{ request()->is('/') ? 'font-costum4 leading-normal font-bold bg-gradient-to-r from-[#2d37a4] to-teal-500 text-transparent bg-clip-text' : 'text-black' }}">Home</a>
                        </li>
                        <li><a href="{{ url('/about_us') }}"
                                class="{{ request()->is('about_us') ? 'font-costum4 leading-normal font-bold bg-gradient-to-r from-[#2d37a4] to-teal-500 text-transparent bg-clip-text' : 'text-black' }}">About
                                Us</a>
                        </li>
                        <li><a href="{{ url('/service') }}"
                                class="{{ request()->is('service') ? 'font-costum4 leading-normal font-bold bg-gradient-to-r from-[#2d37a4] to-teal-500 text-transparent bg-clip-text' : 'text-black' }}">Services</a>
                        </li>
                        <li><a href="{{ url('/product') }}"
                                class="{{ request()->is('product') ? 'font-costum4 leading-normal font-bold bg-gradient-to-r from-[#2d37a4] to-teal-500 text-transparent bg-clip-text' : 'text-black' }}">Products</a>
                        </li>
                        <li><a href="{{ url('/contact') }}"
                                class="{{ request()->is('contact') ? 'font-costum4 leading-normal font-bold bg-gradient-to-r from-[#2d37a4] to-teal-500 text-transparent bg-clip-text' : 'text-black' }}">Contact</a>
                        </li>
                    </ul>
                    <!-- Chat Button - visible on all screen sizes -->
                    <div>
                        <a href="#"
                            class="p-2 md:p-4 bg-gradient-to-r from-teal-400 to-[#2d37a4]  border-transparent hover:bg-transparent hover:from-blue-900 hover:to-teal-400  text-xl 2xl:text-[18px] text-white hover:bg-[#3a3e67] rounded-md">
                            Chat with Us
                        </a>
                    </div>
                    <!-- Mobile Menu Toggle -->
                    <div class="lg:hidden">
                        <button id="mobile-menu-button" aria-controls="mobile-menu" aria-expanded="false"
                            class="focus:outline-none">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M4 6h16M4 12h16m-7 6h7" />
                            </svg>
                        </button>
                    </div>
                </div>
                <!-- Mobile Menu -->
                <div id="mobile-menu"
                    class="absolute left-0 z-30 hidden w-full transition-transform transform bg-white shadow-lg lg:hidden top-full">

                    <ul class="flex flex-col items-center bg-white text-lg 2xl:text-[18px] font-Poppins">
                        <li class="w-full py-2 text-center border-b hover:bg-slate-200">
                            <a
                                href="{{ url('/') }}"class="{{ request()->is('/') ? 'font-costum4 leading-normal font-bold bg-gradient-to-r from-[#2d37a4] to-teal-500 text-transparent bg-clip-text' : 'text-black' }}">Home</a>
                        </li>
                        <li class="w-full py-2 text-center border-b hover:bg-slate-200">
                            <a href="{{ url('/about_us') }}"
                                class="{{ request()->is('about_us') ? 'font-costum4 leading-normal font-bold bg-gradient-to-r from-[#2d37a4] to-teal-500  text-transparent bg-clip-text' : 'text-black' }}">
                                About Us
                            </a>
                        </li>
                        <li class="w-full py-2 text-center border-b hover:bg-slate-200">
                            <a href="{{ url('/service') }}"
                                class="{{ request()->is('service') ? 'font-costum4 leading-normal font-bold bg-gradient-to-r from-[#2d37a4] to-teal-500 text-transparent bg-clip-text' : 'text-black' }}">
                                Services
                            </a>
                        </li>

                        <li class="w-full py-2 text-center border-b hover:bg-slate-200"><a href="{{ url('/product') }}"
                                class="{{ request()->is('product') ? 'font-costum4 leading-normal font-bold bg-gradient-to-r from-[#2d37a4] to-teal-500 text-transparent bg-clip-text' : 'text-black' }}">Products</a>
                        </li>
                        <li class="w-full py-2 text-center border-b hover:bg-slate-200"><a href="{{ url('/contact') }}"
                                class="{{ request()->is('contact') ? 'font-costum4 leading-normal font-bold bg-gradient-to-r from-[#2d37a4] to-teal-500 text-transparent bg-clip-text' : 'text-black' }}">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <script>
            mobileMenuButton.addEventListener('click', () => {
                const isExpanded = mobileMenuButton.getAttribute('aria-expanded') === 'true';
                mobileMenu.classList.toggle('hidden');
                mobileMenu.classList.toggle('block');
                mobileMenuButton.setAttribute('aria-expanded', !isExpanded);
            });
        </script>
    </section>

    <div class="min-h-[75vh]">
        @yield('content')
    </div>

    <!-- Footer -->
    <footer class="bg-[#2b334a] text-gray-400 pt-5">
        <div class="container flex flex-col justify-between max-w-screen-xl gap-8 px-4 mx-auto md:flex-row">
            <!-- Information Section -->
            <div>
                <h2 class="text-white text-[18px] mb-4">
                    {{ $footer->name }}
                </h2>
                <div class="no-tailwind whitespace-nowrap">
                    {!! $footer->description !!}
                </div>
            </div>


            <!-- Menu Section -->
            {{-- <div>
                <h2 class="mb-4 font-bold text-white">Menu</h2>
                <ul class="space-y-2">
                    <li><a href="{{ url('/') }}" class="hover:text-white">Home</a></li>
                    <li><a href="{{ url('/about_us') }}" class="hover:text-white"> About Us</a></li>
                    <li><a href="{{ url('/service') }}" class="hover:text-white">Services</a></li>
                    <li><a href="{{ url('/product') }}" class="hover:text-white">Products</a></li>
                    <li><a href="{{ url('/contact') }}" class="hover:text-white">Contact</a></li>
                </ul>
            </div> --}}
            {{-- Social Media --}}
            <div>
                <h2 class="text-white text-[18px] text-center mb-4">Social Media</h2>
                <div class="flex gap-4 mt-6 md:mt-0">
                    <!-- Facebook icons -->
                    @forelse ($links as $item)
                    <a href="{{ $item->link }}" class="bg-[#252443] p-2 rounded-md hover:bg-blue-600">
                        <img class="object-contain w-10 aspect-square" src="{{ asset('assets/images/links/'.$item->image) }}" alt="">
                    </a>
                    @empty

                    @endforelse
                </div>

            </div>
        </div>

        <!-- Footer Bottom -->
        <div class="max-w-screen-xl px-4 pb-2 mx-auto mt-2 md:text-right">
            {!! $footer->copyright !!}
        </div>
    </footer>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();

        // Mobile Menu Toggle Script
        const mobileMenuButton = document.getElementById('mobile-menu-button');
        const mobileMenu = document.getElementById('mobile-menu');
        mobileMenuButton.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script>
</body>

</html>
