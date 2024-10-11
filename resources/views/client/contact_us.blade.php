@extends('layouts.client')
@section('content')
    <section class="mt-28">
        <div class="max-w-screen-xl px-4 py-12 mx-auto">
            <!-- Contact Header -->
            <div class="mb-8">
                <h2
                    class="text-3xl tracking-tight   bg-gradient-to-r font-bold from-[#2d37a4] to-teal-500 text-transparent bg-clip-text mb-2">
                    {!! $contactInfo->name !!}
                </h2>
                {{--
                <p class="text-xl md:text-[22px] text-text_color2">
                    Let’s collaborate and take your business to the next level. Contact us today to discuss how we can help
                    you achieve your digital transformation goals.
                </p> --}}
                <div class="no-tailwind">
                    {!! $contactInfo->description !!}
                </div>
            </div>

            <div class="grid gap-8 overflow-hidden md:grid-cols-2 ">
                <!-- Contact Info -->

                <div class="no-tailwind">
                    {!! $contactInfo->contact_info !!}
                </div>
                {{-- <div>
                    <h3
                        class="text-2xl   bg-gradient-to-r font-bold from-[#2d37a4] to-teal-500 text-transparent bg-clip-text mb-4">
                        Contact Info :</h3>
                    <ul class="space-y-4">
                        <li class="flex items-center">
                            <span class="mr-3 ">
                                <img src="{{ asset('assets/images/email.png') }}" class="w-10">
                            </span>
                            <span class="text-lg">info@corasolutions.com</span>
                        </li>
                        <li class="flex items-center">
                            <span class="mr-3 ">
                                <!-- Phone Icon -->
                                <img src="{{ asset('assets/images/phone.png') }}" class="w-10">
                            </span>
                            <span class="text-lg">010775589</span>
                        </li>
                        <li class="flex items-center">
                            <span class="mr-3 ">
                                <!-- Location Icon -->
                                <img src="{{ asset('assets/images/gps.png') }}" class="w-10">
                            </span>
                            <span class="text-lg">Phnom Penh, Cambodia</span>
                        </li>

                    </ul>
                </div> --}}

                <!-- Contact Form -->

                <div class="no-tailwind">
                    {!! $contactInfo->iframe !!}
                </div>
            </div>
        </div>
        </div>
    </section>
@endsection
