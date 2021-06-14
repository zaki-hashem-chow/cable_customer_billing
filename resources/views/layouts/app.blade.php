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
        <div class="container-fluid">
            <!-- Page Content -->
                @section('header')
                    <div class="row">
                        {{--includes page Header setion--}}
                        @include('layouts.includes.header')
                    </div>
                @show

                <div class="row">
                    @section('sidebar')
                        <div class="col-md-2">
                            {{--includes sidebar setion--}}
                            @include('layouts.includes.sidebar')
                        </div>
                    @show

                    <div role="main" class="col-md-10">
                        {{--page contents goes here--}}
                        <div class="container">
                            @yield('content')
                        </div>

                    </div>
                </div>

                @section('footer')
                    <div class="row">
                        {{--includes page footer setion--}}
                        @include('layouts.includes.footer')
                    </div>
                @show
        </div>

            {{--munu toggle js script--}}

        @section('js-assets')
            {{--includes all js assets--}}
            @include('layouts.includes.js-assets')
        @show

        <script>
            $(document).ready(function (){
                $("#menu-toggle").click(function(e) {
                    e.preventDefault();
                    $("#wrapper").toggleClass("toggled");
                });
            });
        </script>

        @yield('page-js');
    </body>

</html>
