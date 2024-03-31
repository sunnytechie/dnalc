<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @include('snippets.headerfiles.head')

    <body class="custom-cursor">
        <!-- Custom Cursor -->
        {{-- <div class="custom-cursor__cursor"></div> --}}
        {{-- <div class="custom-cursor__cursor-two"></div> --}}

        <!-- Preloader Start-->
        {{-- <div class="preloader">
            <div class="preloader__image" style="background-image: url(assets/images/dna/dnalogo2.png);"></div>
        </div> --}}
        <!-- Preloader End-->

        <div class="page-wrapper">

            @include('snippets.header')

                @yield('content')

            @include('snippets.footer')
        </div>

        @include('snippets.mobile_nav_search_back_up')


        @include('snippets.headerfiles.scripts')


        @yield('scripts')
    </body>
</html>
