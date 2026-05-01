<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('page_title', 'The Bamboo Way')</title>
      <script src="https://cdn.tailwindcss.com"></script>
      <link rel="stylesheet" href="{{ asset('themes/shop/frontend_assets/lib/fontawesom/css/all.min.css') }}">
      <link rel="stylesheet" href="{{ asset('themes/shop/frontend_assets/lib/owl-carousel/owl.carousel.min.css') }}">
      <link rel="stylesheet" href="{{ asset('themes/shop/frontend_assets/css/style.css') }}">
      @yield('head')
  </head>
  <body class="font-theme font-normal">
    @include('shop::layouts.partials.header')

    @yield('content-wrapper')

    @include('shop::layouts.partials.footer')

    <script src="{{ asset('themes/shop/frontend_assets/lib/jquery/jquery.js') }}"></script>
    <script src="{{ asset('themes/shop/frontend_assets/lib/fontawesom/js/all.min.js') }}"></script>
    <script src="{{ asset('themes/shop/frontend_assets/lib/owl-carousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('themes/shop/frontend_assets/js/main.js') }}"></script>
    @yield('scripts')
  </body> 
</html>
