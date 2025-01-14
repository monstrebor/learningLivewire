@extends('layout.layout')



@section('title', 'Login')



@section('script')
    <link rel="stylesheet" href="css/navbarStyle.css">
    <link rel="stylesheet" href="css/footerStyle.css">
@endsection


@section('content')
    @include('Partials.navbar')

    <body class="font-sans antialiased dark:bg-black dark:text-white/50">
        <div class="bg-gray-50 text-black/50 dark:bg-black dark:text-white/50">
            <section class="relative py-20 2xl:py-40 bg-gray-800 overflow-hidden">
                <img class="hidden lg:block absolute inset-0 mt-32" src="zospace-assets/lines/line-mountain.svg"
                    alt="">
                <img class="hidden lg:block absolute inset-y-0 right-0 -mr-40 -mt-32"
                    src="zospace-assets/lines/line-right-long.svg" alt="">
                <div class="relative container px-4 mx-auto">
                    <div class="max-w-5xl mx-auto">
                        <div class="flex flex-wrap items-center -mx-4">
                            <div class="w-full lg:w-1/2 px-4 mb-16 lg:mb-0">
                                <div class="max-w-md">
                                    <span class="text-lg text-blue-400 font-bold">Login Account</span>
                                    <h2 class="mt-8 mb-12 text-5xl font-bold font-heading text-white">Start your journey by
                                        creating an account.</h2>
                                    <p class="text-lg text-gray-200">
                                        <span>The brown fox jumps over</span>
                                        <span class="text-white">the lazy dog.</span>
                                    </p>
                                </div>
                            </div>
                            <div class="w-full lg:w-1/2 px-4">
                                <div class="px-6 lg:px-20 py-12 lg:py-24 bg-gray-600 rounded-lg">
                                    @if (session('success'))
                                        <div class="alert alert-success">
                                            {{ session('success') }}
                                        </div>
                                    @endif
                                    <livewire:login>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </body>
    @include('Partials.footer')
    <script src="{{ asset('/js/navbar.js') }}"></script>
@endsection
