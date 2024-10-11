@extends('layouts.client')
@section('content')
    <!-- Strat Section -->
    <section class="py-8 mt-20 overflow-hidden antialiased bg-primary1 ">

        <div class="max-w-screen-xl p-4 py-12 mx-auto lg:px-6">
            <div class="max-w-full mx-auto space-y-2 text-center">
                <button class="px-6 py-2 text-xl tracking-normal text-white rounded-full bg-primary2 md:text-3xl ">
                   {{ $whatWeDoForYouHeading->name }}
                </button>
                <h1 class=" text-white text-xl md:text-2xl  mx-auto text-center max-w-[60ch] leading-normal line-clamp-4">
                   {{ $whatWeDoForYouHeading->short_description }}
                </h1>
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
@endsection
