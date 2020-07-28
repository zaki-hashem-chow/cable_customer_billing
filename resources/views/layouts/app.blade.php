<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        @section('head')
            {{--include html head data--}}
            @include('layouts.includes.head')
        @show
        @section('head-assets')
            {{--include css and js assets--}}
            @include('layouts.includes.head-assets')
        @show

        <script> window.Laravel = @json(['csrfToken' => csrf_token(),]); </script>

    </head>

    <body>
    <div class="container">
        <!-- Page Content -->
        <div id="page-content-wrapper">
            @section('header')
                <div class="row">
                    {{--includes page Header setion--}}
                    @include('layouts.includes.header')
                </div>
            @show

            <div id="main" class="row">
                @section('sidebar')
                    <div id="sidebar" class="col-md-3">
                        {{--includes sidebar setion--}}
                        @include('layouts.includes.sidebar')
                    </div>
                @show

                <div id='content' class="col-md-9">
                    {{--page contents goes here--}}
                    @yield('content')

                </div>
            </div>

            @section('footer')
                <div class="row">
                    {{--includes page footer setion--}}
                    @include('layouts.includes.footer')
                </div>
            @show
        </div>
    </div>

        {{--munu toggle js script--}}
    <script>
        $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
        });
    </script>

    @section('js-assets')
        {{--includes all js assets--}}
        @include('layouts.includes.js-assets')
    @show

    </body>

</html>
