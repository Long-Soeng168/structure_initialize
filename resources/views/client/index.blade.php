@extends('layouts.client')

@section('meta_data')
<meta name="description" content="Leading IT solutions provider offering custom software development, cloud services, cybersecurity, digital transformation, and managed IT support. Empower your business with cutting-edge technology solutions tailored to meet your unique needs. Contact us for IT consulting and robust, scalable digital solutions.">

<meta name="keywords" content="Cora Solutions, IT Solution Cambodia, Best Tech Cambodia, Cambodia Tech Company, Cambo Tech, Technology Cambodia, Cambodia Website Creation, Website Cambodia,IT Solutions, IT Consulting, Custom Software Development, Cloud Services, Cybersecurity, Digital Transformation, Managed IT Services, IT Support, Cloud Migration, Web Development, Mobile App Development, Network Security, Data Backup, ERP Solutions, IT Infrastructure, Business Intelligence, Database Management, DevOps, Machine Learning, Artificial Intelligence, Business Automation, E-commerce Solutions, IT Helpdesk, IT Project Management">


<meta property="og:title" content="Cora Solution Cambodia">
<meta property="og:description" content="Leading IT solutions provider offering custom software development, cloud services, cybersecurity, digital transformation, and managed IT support. Empower your business with cutting-edge technology solutions tailored to meet your unique needs. Contact us for IT consulting and robust, scalable digital solutions.">

<meta property="og:image" content="{{ asset('/assets/images/gallery/thumb/'.$homeImage1->image) }}">
<meta property="og:type" content="website">
@endsection

@section('content')
    <!-- Strat transform -->
    <div id="controls-carousel" class="relative w-full mt-[75px] md:mt-[98px] lg:mt-[110px] ">
        <!-- Carousel wrapper -->
        <div class="relative aspect-[16/5] md:aspect-[16/5]  w-full overflow-hidden ">
            <!-- Swiper -->
            <swiper-container class="w-full h-full mySwiper" centered-slides="true" autoplay-delay="4000"
                autoplay-disable-on-interaction="false">
                <!-- slide 1 -->
                @forelse ($slides as $item)
                <swiper-slide class="w-full h-full">
                    <div class="relative flex w-full h-full bg-center bg-cover bg-blend-multiply" data-carousel-item
                        style="background-image: url({{ asset('/assets/images/slides/'.$item->image)  }});">
                        <!-- Dark Overlay -->
                        {{-- <div class="absolute inset-0 bg-[#151516a6] bg-opacity-80"></div> --}}

                        <!-- Content -->
                        <div
                            class="absolute top-1/2 left-3 md:left-5 lg:left-20 transform -translate-y-1/2 z-10 w-full max-w-md lg:max-w-[560px] text-left text-white px-4 lg:px-0">
                            <h2
                                class=" text-[12px] sm:text-xl md:text-xl lg:text-5xl font-costum1 bg-gradient-to-r from-white to-white bg-clip-text text-transparent max-w-[9rem] sm:max-w-[11rem] md:max-w-full">
                                {{ $item->name }}
                            </h2>
                            <p
                                class="text-[8px] line-clamp-2 sm:line-clamp-3 md:line-clamp-4 lg:line-clamp-5 sm:text-sm md:text-sm lg:text-lg  sm:text-white mt-1 lg:mt-5 max-w-[30ch] sm:max-w-[60ch] ">
                                {{ $item->short_description }}
                            </p>
                            <div class="mt-1 md:mt-4">
                                <a href="{{ $item->link }}"
                                    class="text-[8px] sm:text-sm md:text-lg border border-white  rounded-md p-1 px-3 md:px-5 md:py-3 md:border-2 text-white transition duration-300">
                                    Learn More
                                </a>
                            </div>
                        </div>
                    </div>
                </swiper-slide>
                @empty

                @endforelse


            </swiper-container>

            <!-- Swiper JS -->
            <script defer src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script>
        </div>
    </div>

    <!-- End transform -->
    <!-- strat middle -->
    <section class="max-w-screen-xl px-4 mx-auto mt-20 overflow-hidden sm:mt-32">
        <div class="flex flex-col max-w-screen-xl gap-10 p-5 mx-auto sm:p-10 lg:flex-row lg:px-6">
            <!-- Image Section -->
            <div class="relative w-full mx-auto md:px-10 md:mr-10 md:w-10/12 lg:w-1/2 aspect-square"
                data-aos="zoom-out-left" data-aos-duration="1000">
                <!-- First Image -->
                <div class="absolute -top-10 md:-top-20 -left-5 md:-left-10 w-[80%] md:w-[500px]">
                    <img class="object-cover w-full aspect-square" src="{{ asset('assets/images/gallery/'.$homeImage1->image) }}"
                        alt="Trainer assisting woman with leg press">
                </div>
                <!-- Second Image -->
                <div
                    class="absolute bottom-5 md:bottom-10 -right-5 md:-right-10 p-2 bg-white rounded-md w-[60%] md:w-[300px]">
                    <img class="object-cover w-full rounded-md aspect-square"
                        src="{{ asset('assets/images/gallery/'.$homeImage2->image) }}"
                        alt="Trainer helping man with squat">
                </div>
            </div>
            <!-- Text Section -->
            <div class="space-y-4 text-left lg:w-1/2 aos-init aos-animate">
                <div
                    class="font-costum8 text-[#6251ef] border-b-2 border-t-2 border-primary1 inline-block py-2 px-4 rounded-md">
                    About Us
                </div>
                <h2 class="mb-4 text-5xl md:text-6xl font-costum4 leading-normal  bg-gradient-to-r font-bold from-[#2d37a4] to-teal-500 text-transparent bg-clip-text"
                    data-aos="zoom-out-right" data-aos-duration="1000">
                    {{ $aboutHeading->name }}
                </h2>

                <p class="mb-6 text-xl md:text-[22px] text-text_color2 line-clamp-2">
                    {{ $aboutHeading->short_description }}
                </p>
                <ul class="grid grid-cols-1 md:grid-cols-2 text-[16px] gap-6 mb-6 bg-gradient-to-r from-cyan-800 to-blue-700 text-transparent bg-clip-text "
                    data-aos="fade-up" data-aos-duration="1000">
                    @forelse ($servicesPages as $item)
                    <li class="flex items-center space-x-2">
                        <span class="text-blue-500">&#10003;</span>
                        <span>{{ $item->name }}</span>
                    </li>
                    @empty

                    @endforelse
                </ul>
                <!-- Button -->
                <a href="{{ url('/about_us') }}"
                    class="inline-block px-8 py-3 font-costum8 text-white bg-gradient-to-r from-teal-400 to-[#2d37a4] hover:bg-transparent hover:from-blue-900 hover:to-teal-400  rounded-md  transition-colors"
                    data-aos="fa[10px] border sm:text-sm data-aos-duration="2000">
                    Learn More
                </a>
            </div>
        </div>
    </section>
    <!-- End middle -->

    <!-- Strat Section -->
    <section class="py-8 mt-20 overflow-hidden antialiased bg-primary1 ">

        <div class="max-w-screen-xl p-4 mx-auto lg:px-6">
            <div class="max-w-full mx-auto space-y-2 text-center">
                <button class="px-6 py-2 text-xl tracking-normal text-white rounded-full bg-primary2 md:text-3xl ">
                   {{ $whatWeDoForYouHeading->name }}
                </button>
                <h2 class=" text-white text-xl md:text-2xl  mx-auto text-center max-w-[60ch] leading-normal line-clamp-4">
                   {{ $whatWeDoForYouHeading->short_description }}
                </h2>
                {{-- <p class="font-costum8 text-white text-sm leading-loose  mx-auto text-center max-w-[500px]">
                    Morem ipsum dolor sit amet,
                    consectetur adipiscing elita florai psum dolor ectetuolor sit amet, consectetur adipiscine.
                </p> --}}
            </div>
            <div class="grid grid-cols-1 gap-6 mt-6 md:grid-cols-2 lg:grid-cols-3">
                @forelse ($servicesPages as $item)
                <div
                    class="w-full p-3 text-center bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <a href="{{ url('detail/'.$item->id) }}">
                        <img class="rounded-t-lg w-[30%] sm:w-[40%] mx-auto mt-4"
                            src="{{ asset('assets/images/pages/thumb/'.$item->image) }}" alt="" />
                    </a>
                    <div class="p-5">
                        <a href="{{ url('detail/'.$item->id) }}">
                            <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-900 md:text-2xl dark:text-white">
                                {{ $item->name }}
                            </h5>
                        </a>
                        <p class="mb-3 text-xl md:text-[22px] text-text_color2 line-clamp-2">
                           {{ $item->short_description }}
                        </p>
                        <a href="{{ url('detail/'.$item->id) }}"
                            class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-gradient-to-r from-teal-400 to-[#2d37a4]  border-transparent hover:bg-transparent hover:from-blue-900 hover:to-teal-400  rounded-lg">
                            See Details
                        </a>
                    </div>
                </div>
                @empty

                @endforelse
                <!-- Repeat similar structure for other services -->

            </div>
        </div>
    </section>
    <!--End Section  -->

    {{-- completed project --}}
    <section class="p-5 mt-6 overflow-hidden md:mt-20">
        <div class="max-w-screen-xl mx-auto">
            <div class="" data-aos="flip-down" data-aos-duration="1000">
                <h2
                    class="font-costum5 text-5xl bg-gradient-to-r font-bold from-[#2d37a4] to-teal-500 text-transparent bg-clip-text ">
                    {{ $completedProjectHeading->name }}
                </h2>
                <p class="text-xl md:text-[22px] text-text_color2 max-w-[65ch] text-start mt-5 ">
                    {{ $completedProjectHeading->short_description }}
                </p>
            </div>
            <div class="grid grid-cols-1 gap-6 mt-10 aspect-auto md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
                {{-- item 1 --}}
                @forelse ($completedProjectsPages as $item)
                <a href="{{ url('detail/'.$item->id) }}">
                    <div
                        class="duration-500 border rounded-md border-slate-300 hover:shadow-zinc-400 hover:shadow-2xl hover:cursor-pointer">
                        <img src="{{ asset('assets/images/pages/thumb/'.$item->image) }}"
                            class="w-full aspect-[3/4] object-cover rounded-t-md rounded-br-[200px]">

                        <div class="p-8">
                            <h2 class="text-xl font-bold hover:text-blue-600 hover:cursor-pointer md:text-2xl">
                                {{ $item->name }}
                            </h2>
                            <p class="text-xl md:text-[22px] text-text_color2 mt-2">
                                {{ $item->short_description }}
                            </p>
                        </div>
                    </div>
                </a>
                @empty

                @endforelse
            </div>
        </div>
        <div class="max-w-screen-xl px-4 pb-2 mx-auto mt-2 text-xl text-[#43428d] font-bold underline md:text-right">
            <a href="{{ url('projects') }}">
                {{ __('messages.seeMore') }} >
            </a>
        </div>
    </section>

    {{-- End completed project --}}

    {{-- Blog --}}
    <section class="p-4 py-8 mt-20 overflow-hidden antialiased bg-primary1">
        <div class="mb-8 text-center">
            <p
                class="inline-block p-2 px-4 text-xl tracking-normal text-white rounded-full font-costum4 bg-primary2 md:text-3xl">
                {{ $ourBlogHeading->name }}
            </p>
            <h2
                class="font-costum4 text-white sm:text-xl mx-auto text-center max-w-[600px] leading-normal line-clamp-3 mt-2">
                {{ $ourBlogHeading->short_description }}
            </h2>
        </div>

        <!-- Blog Cards -->
        <div class="mx-auto max-w-7xl ">
            <div class="grid gap-6 lg:grid-cols-3">
                <!-- Card 1 -->
                @forelse ($newsPages as $item)
                <a href="{{ url('news_detail/'.$item->id) }}">
                    <div class="overflow-hidden bg-white rounded-lg shadow-lg ">
                        <img class="object-cover w-full h-48"
                            src="{{ asset('assets/images/news/thumb/'.$item->image) }}" alt="Blog Image">
                        <div class="p-6">
                            <h3
                                class="mb-2 text-xl font-bold tracking-tight text-gray-900 line-clamp-2 md:text-2xl hover:text-blue-600 hover:cursor-pointer hover:">
                                {{ $item->name }}
                            </h3>
                            <p class="text-xl md:text-[20px] text-text_color2 line-clamp-3 mb-4">
                                {{ $item->short_description }}
                            </p>
                            <div class="flex items-center justify-between">
                                <div class="flex items-center">
                                    <img class="w-8 h-8 mr-2 rounded-full"
                                        src="{{ asset('assets/images/users/thumb/'.$item->user?->image) }}"
                                        alt="Author Image">
                                    <span class="text-sm text-gray-800">
                                        {{ $item->user?->name }}
                                    </span>
                                </div>
                                <span class="text-sm text-gray-500">
                                    {{ $item->created_at?->format('d-M-Y') }}
                                </span>
                            </div>
                        </div>
                    </div>
                </a>
                @empty

                @endforelse
            </div>
        </div>
        <div class="max-w-screen-xl px-4 pb-2 mx-auto mt-2 text-xl font-bold text-white underline md:text-right">
            <a href="{{ url('news') }}">
                {{ __('messages.seeMore') }} >
            </a>
        </div>
    </section>
    {{-- End Blog --}}

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script>
    </body>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>

    </html>
@endsection
