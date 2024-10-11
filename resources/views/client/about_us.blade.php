@extends('layouts.client')
@section('content')
    <section class="mt-28">
        <div class="flex flex-col items-center justify-between max-w-screen-xl p-8 mx-auto lg:flex-row ">
            <!-- Text Section -->
            <div class="mb-10 lg:w-1/2 lg:mb-0">
                <button class="px-5 py-2 mb-4 text-xs font-semibold text-blue-600 uppercase bg-gray-100 rounded-full"
                    data-aos="fade-up" data-aos-duration="1000">
                    Get to Know Us
                </button>
                <h2 class="text-5xl md:text-6xl font-costum4 leading-normal bg-gradient-to-r font-bold from-[#2d37a4] to-teal-500 text-transparent bg-clip-text mb-4"
                    data-aos="fade-up" data-aos-duration="1000">
                    {{ $aboutHeading->name }}
                </h2>
                <p class="text-gray-500 text-xl md:text-[22px] text-text_color2 mb-6" data-aos="fade-up"
                    data-aos-duration="1000">
                    {{ $aboutHeading->short_description }}
                </p>
                <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 ">
                    <!-- Feature 1 -->
                    @forelse ($servicesPages as $item)
                    <div class="flex items-center ">
                        <div class="p-4 bg-blue-100 rounded-full " data-aos="fade-up" data-aos-duration="1000">
                            <img src="{{ asset('assets/images/pages/thumb/'.$item->image) }}" class="w-6 h-6 text-blue-600"
                                fill="currentColor" viewBox="0 0 20 20"><!-- Icon SVG --></img>
                        </div>
                        <div class="ml-4" data-aos="fade-up" data-aos-duration="1000">
                            <a href="{{ url('detail/'.$item->id) }}">
                                <h3
                                    class="text-[16px] bg-gradient-to-r  from-[#2d37a4] to-teal-500 text-transparent bg-clip-text">
                                    {{ $item->name }}
                                </h3>
                            </a>
                            {{-- <a href="{{ url('/product#product1') }} " class="text-gray-500 text-[12px]">Product</a> --}}
                        </div>
                    </div>
                    @empty

                    @endforelse
                </div>
            </div>
            <!-- Image Section -->
            <div class="relative lg:w-1/2 ">
                <img src="{{ asset('assets/images/gallery/'.$aboutImage->image) }}" alt="Team Working"
                    class="rounded-tl-[200px] rounded-br-[200px] rounded-bl-[100px] w-full rounded-tr-[100px] shadow-lg ">
                <div class="absolute p-2 rounded-lg md:-top-2 md:-right-7 -top-2 -right-5 bg-zinc-50/70 md:p-3 lg:p-4">
                    <span class="font-bold text-blue-600 sm:text-xl">100+</span>
                    <p class="text-gray-500 text-[10px]  sm:text-[12px]">Satisfied Clients</p>
                </div>
                <div
                    class="absolute p-2 rounded-lg shadow md:bottom-4 lg:-left-2 -left-2 bottom-4 bg-zinc-50/70 md:p-3 lg:p-4">
                    <span class="font-bold text-blue-600 sm:text-xl">15+</span>
                    <p class="text-gray-500 text-[10px]  sm:text-[12px]">Years of Experience</p>
                </div>
            </div>
        </div>
    </section>

    {{-- completed project --}}
    <section class="p-5 mt-20">
        <div class="max-w-screen-xl mx-auto ">
            <div class="">
                <h1
                    class="font-costum5 text-5xl md:text-5xl leading-normal  bg-gradient-to-r font-bold from-[#2d37a4] to-teal-500 text-transparent bg-clip-text">
                    {{ $ourMissionHeading->name }}
                </h1>
                <p class=" max-w-[60ch] text-xl md:text-[22px] text-text_color2  text-start mt-5">
                    {{ $ourMissionHeading->short_description }}
                </p>
            </div>

        </div>
    </section>
    {{-- End completed project --}}

    <section class="px-4 mt-5 mb-10 lg:mt-20">
        <div class="grid grid-cols-1 gap-8 mx-auto max-w-7xl lg:grid-cols-12">
            <div class="sm:mb-8 md:col-span-4">
                <span
                    class="inline-block px-3 py-1 mb-2 text-sm font-semibold text-blue-500 bg-blue-100 rounded-full">Benefits</span>
                <h2
                    class="text-4xl  leading-normal font-costum5 bg-gradient-to-r font-bold from-[#2d37a4] to-teal-500 text-transparent bg-clip-text mb-4">
                    {{ $whyChooseUsHeading->name }}
                </h2>
                <p class="text-base text-gray-600 md:text-lg">
                    {{ $whyChooseUsHeading->short_description }}
                </p>
            </div>

            <div class="grid grid-cols-1 gap-8 sm:grid-cols-2 md:grid-cols-2 md:col-span-8">
                <!-- Benefit 1 -->
                @forelse ($whyChooseUsPages as $item)
                <div class="p-6 text-center rounded-lg shadow-md bg-gray-50">
                    <div class="mb-4 text-blue-500">
                        <!-- Icon -->
                        <img src="{{ asset('assets/images/pages/thumb/'.$item->image) }}" class="mx-auto w-14"
                            alt="Unique Design Icon">
                    </div>
                    <h3
                        class="text-xl md:text-xl bg-gradient-to-r font-bold from-[#2d37a4] to-teal-500 text-transparent bg-clip-text mb-2">
                        {{ $item->name }}
                    </h3>
                    <p class="text-xl md:text-[22px] text-text_color2">
                       {{ $item->short_description }}
                    </p>
                </div>
                @empty

                @endforelse
            </div>
        </div>
    </section>
@endsection
