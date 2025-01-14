@extends('layout.layout')



@section('title', 'Home')



@section('script')
    <link rel="stylesheet" href="css/homeStyle.css">
    <link rel="stylesheet" href="css/navbarStyle.css">
    <link rel="stylesheet" href="css/footerStyle.css">
@endsection


@section('content')
    @include('Partials.navbar')
    <body class="font-sans antialiased dark:bg-black dark:text-white/50">
        <div class="bg-gray-50 text-black/50 dark:bg-black dark:text-white/50">
            <img src="{{ asset('/img/bg.jpg') }}" class="z-index-0" alt="background_picture">
        </div>
    </body>
    @include('Partials.footer')
    <script src="{{asset('/js/navbar.js')}}"></script>
@endsection
