@extends('layouts.client')
@section('content')
    <!-- Strat Section -->
    {{-- Blog --}}
    <section class="p-4 pb-12 mt-20 overflow-hidden antialiased lg:28 bg-primary1">
        <div class="pt-10 mb-8 text-center">
            <p
                class="inline-block p-2 px-4 text-xl tracking-normal text-white rounded-full font-costum4 bg-primary2 md:text-3xl">
                {{ $ourBlogHeading->name }}
            </p>
            <h2
                class="font-costum4 text-white sm:text-xl mx-auto text-center max-w-[600px] leading-normal line-clamp-3 mt-2">
                {{ $ourBlogHeading->short_description }}
            </h2>

            <form action="{{ url('/news') }}" class="max-w-lg m-4 mx-auto">
                <label for="default-search"
                    class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
                <div class="relative">
                    <div class="absolute inset-y-0 flex items-center pointer-events-none start-0 ps-3">
                        <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                        </svg>
                    </div>
                    <input type="search" id="default-search"
                        class="block w-full p-4 text-sm text-gray-900 border border-gray-300 rounded-lg ps-10 bg-gray-50 focus:ring-primary1 focus:border-primary1 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary1 dark:focus:border-primary1"
                        placeholder="Search..." required  name="search"/>
                    <button type="submit"
                        class="text-white absolute end-2.5 bottom-2.5 bg-primary1 hover:bg-primary1 focus:ring-4 focus:outline-none focus:ring-primary1 font-medium rounded-lg text-sm px-4 py-2 dark:bg-primary1 dark:hover:bg-primary1 dark:focus:ring-primary1">Search</button>
                </div>
            </form>
        </div>



        <!-- Blog Cards -->
        <div class="mx-auto max-w-7xl ">
            <div class="grid gap-6 lg:grid-cols-3">
                <!-- Card 1 -->
                @forelse ($newsPages as $item)
                    <a href="{{ url('news_detail/' . $item->id) }}">
                        <div class="overflow-hidden bg-white rounded-lg shadow-lg ">
                            <img class="object-cover w-full h-48"
                                src="{{ asset('assets/images/news/thumb/' . $item->image) }}" alt="Blog Image">
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
                                            src="{{ asset('assets/images/users/thumb/' . $item->user?->image) }}"
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
    </section>
    {{-- End Blog --}}
    <!--End Section  -->
@endsection
