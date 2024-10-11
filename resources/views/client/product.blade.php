@extends('layouts.client')
@section('content')
    <section class="space-y-20 bg-white mt-14 dark:bg-gray-900">
        @forelse ($productsPages as $index => $item)
        <div id="product1"
            class="items-center max-w-screen-xl gap-8 px-4 py-8 mx-auto border-t-2 border-dotted border-primary1 xl:gap-16 md:grid md:grid-cols-2 sm:py-16 lg:px-6">

            <img class="w-full dark:hidden {{ $index % 2 ? 'order-2' : '' }}"
                src="{{ asset('assets/images/pages/thumb/'.$item->image) }}"
                alt="dashboard image">

            <div class="mt-4 md:mt-0">
                <h2
                    class="mb-4 text-4xl tracking-tight   bg-gradient-to-r font-bold from-[#2d37a4] to-teal-500 text-transparent bg-clip-text">
                    {{ $item->name }}
                </h2>
                <p class="mb-6 text-xl md:text-[22px] text-text_color2">
                    {{ $item->short_description }}
                </p>
                <!-- Button -->
                <a href="{{ url('detail/'.$item->id) }}"
                    class="inline-block px-8 py-3 font-costum8 text-white bg-gradient-to-r from-teal-400 to-[#2d37a4] hover:bg-transparent hover:from-blue-900 hover:to-teal-400 rounded-md  transition-colors"
                    data-aos="fade-up" data-aos-duration="2000">
                    Learn More
                </a>
            </div>

        </div>
        @empty

        @endforelse

    </section>
@endsection
