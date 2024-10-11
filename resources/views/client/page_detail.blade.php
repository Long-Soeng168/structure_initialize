@extends('layouts.client')

@section('meta_data')
<meta name="description" content="{{ $page->short_description }}">

<meta name="keywords" content="Cora Solutions, IT Solution Cambodia, Best Tech Cambodia, Cambodia Tech Company, Cambo Tech, Technology Cambodia, Cambodia Website Creation, Website Cambodia,IT Solutions, IT Consulting, Custom Software Development, Cloud Services, Cybersecurity, Digital Transformation, Managed IT Services, IT Support, Cloud Migration, Web Development, Mobile App Development, Network Security, Data Backup, ERP Solutions, IT Infrastructure, Business Intelligence, Database Management, DevOps, Machine Learning, Artificial Intelligence, Business Automation, E-commerce Solutions, IT Helpdesk, IT Project Management">

<meta property="og:title" content="{{ $page->name }}">
<meta property="og:description" content="{{ $page->short_description }}">

<meta property="og:image" content="{{ asset('/assets/images/pages/thumb/'.$page->image) }}">
<meta property="og:type" content="website">
@endsection

@section('content')
    <section class="font-costum4">
        <main class="my-20 antialiased bg-white md:my-28 lg:my-32 dark:bg-gray-900">
            <div class="max-w-screen-xl px-4 mx-auto ">
                <h1 class="text-3xl font-bold">
                    {{ $page->name }}
                </h1>
                <div class="no-tailwind">
                    {!! $page->description !!}
                </div>
            </div>
        </main>
    </section>
@endsection
