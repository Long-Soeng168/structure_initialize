@extends('layouts.client')
@section('content')
    <!-- Strat Section -->
    <section class="p-5 mt-24 mb-8 overflow-hidden md:mt-32">
        <div class="max-w-screen-xl mx-auto">
            <div class="" data-aos="flip-down" data-aos-duration="1000">
                <h1
                    class="font-costum5 text-5xl bg-gradient-to-r font-bold from-[#2d37a4] to-teal-500 text-transparent bg-clip-text ">
                    {{ $completedProjectHeading->name }}
                </h1>
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
                            <h1 class="text-xl font-bold hover:text-blue-600 hover:cursor-pointer md:text-2xl">
                                {{ $item->name }}
                            </h1>
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
    </section>
    <!--End Section  -->
@endsection
