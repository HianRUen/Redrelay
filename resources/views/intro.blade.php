<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>RedRelay AI</title>

        <!-- Styles -->
        <link rel="stylesheet" href="{{asset('styles/aos.css')}}">
        <link rel="stylesheet" href="{{asset('styles/tw-elements2.css')}}">
        <link rel="stylesheet" href="{{asset('styles/swiper-slider.css')}}">
        
        <script src="{{asset('script/aos.js')}}" ></script>
        <script src="{{asset('script/swiper-slider.js')}}"></script>
        <script src="{{asset('script/smooth-scroll.min.js')}}"></script>
        
        {{-- vites --}}
        @routes
        @viteReactRefresh
        @vite(['resources/js/app.jsx'])
    </head>
    <style>
    body {
        
        
        
    }
    
    .text-primary-500{
        color:#fff !important;
    }
    .hover\:bg-primary-25:hover{
        background-color:#dd761c;
    }
    .hover\:bg-primary-600:hover{
        background-color:#000;
    }
    .bg-primary-500{
        background-color:#dd761c;
        
    }
    .border-primary-500{
        border-color:#fff !important;
    }
    
    :is(.dark .group:hover .dark\:group-hover\:bg-primary-500){
    
            background-color:#dd761c;
    }
    .overview-tab[aria-selected=true]{
        background-color:#dd761c !important;
    }
    .swiper-pagination-bullet-active{
        background-color:#dd761c !important;
    }
    .swiper-pagination-bullet{
        background-color:#000 !important;
    }
    
    .intro-footer-bg-dark {
    /*background: linear-gradient(137.42deg,#13062d 0%,#5a0977 57.83%,#3d1472 76.05%);*/
    background:#dd761c !important;
}
    :is(.dark .dark\:data-\[te-nav-active\]\:bg-primary-500[data-te-nav-active]){
        background-color:#dd761c ;
    }
    .hover\:\!bg-primary-500:hover{
        background-color:#dd761c !important;
    }
    .hover\:outline-primary-500:hover{
        outline-color:#fff !important;
    }
    :is(.dark .dark\:hover\:bg-gray-800:hover){
        background-color:#dd761c4d !important;
    }
  .group:hover .group-hover\:text-primary-500{
      color:#dd761c;
  }
  .group:hover .group-hover\:border-primary-500{
      border-color:#dd761c;
  }
    
    </style>

    <body class="" style="background: linear-gradient(to right,#5e0a0a, #ff4f4f 50%, #5e0a0a );">
        @include('components.intro.navbar')
        <main class="">
            @include('components.intro.header')
            @include('components.intro.features')
            @include('components.intro.overview')
            @include('components.intro.demos')
            @include('components.intro.templates')
            @include('components.intro.testimonials')
            @include('components.intro.faqs')
            @include('components.intro.price-plan')
            @include('components.intro.banner')
            @include('components.intro.footer')
        </main>

        <script>
            AOS.init({ once: true });
        </script>
        <script src="{{asset('script/index.js')}}"></script>
        <script src="{{asset('script/video-player.js')}}"></script>
        <script src="{{asset('script/tw-elements.min.js')}}"></script>
        <script src="{{asset('script/scripts-tabs.js')}}"></script>
        <script src="{{asset('script/dialog.js')}}"></script>
    </body>
</html>