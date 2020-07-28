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
        <div id="main" class="row">
            <!-- page contents goes here -->

                @yield('content')
        </div>


        <div class="footer row">
            <!-- include footer -->

            @include('layouts.includes.footer')

        </div>
    </div>
  </div>
  <!-- /#wrapper -->
  <!-- /#wrapper -->

    @section('footer')
        <div class="row">
            {{--includes page footer setion--}}
            @include('layouts.includes.footer')
        </div>
    @show


</body>

</html>
