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

        <!--Start of Tawk.to Script-->
        <script type="text/javascript">
            var Tawk_API = Tawk_API || {}, Tawk_LoadStart = new Date();
            (function () {
                var s1 = document.createElement("script"), s0 = document.getElementsByTagName("script")[0];
                s1.async = true;
                s1.src = 'https://embed.tawk.to/63bfb9dd47425128790d01dd/1gmies2ns';
                s1.charset = 'UTF-8';
                s1.setAttribute('crossorigin', '*');
                s0.parentNode.insertBefore(s1, s0);
            })();
        </script>
        <!--End of Tawk.to Script-->
    </body>
</html>
