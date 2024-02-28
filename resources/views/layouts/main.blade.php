<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ trans('panel.site_title') }}</title>
    {{-- themes files add here  --}}
    <link rel="stylesheet" href="{{ asset('theme_of_mozambique/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('theme_of_mozambique/css/all.css') }}">
    <link rel="stylesheet" href="{{ asset('theme_of_mozambique/css/styles.css') }}">
    {{-- leaflet css --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/leaflet@1.9.4/dist/leaflet.min.css">
    {{-- end leaflet  css --}}
    {{-- this is for icon loader --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Google Font: Source Sans Pro -->

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://code.highcharts.com/maps/highmaps.js"></script>
    <script src="https://code.highcharts.com/maps/modules/exporting.js"></script>
    <script src="https://code.highcharts.com/modules/accessibility.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <script src="https://code.highcharts.com/highcharts-more.js"></script>
    {{-- <script src="https://code.highcharts.com/highcharts.js"></script> --}}

    <!-- Include Leaflet and Highcharts libraries -->
    <!-- Leaflet CSS/JS -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>

    {{-- new shape file chart  scripts --}}
    <script src="{{ asset('js/districtsfinalfile.js') }}"></script>
    {{-- <script src="{{ asset('js/check.js') }}"></script> --}}
    {{-- leaflet js --}}
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
    {{-- leaflet js end --}}


    {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/ol@v8.2.0/ol.css">
    <script src="https://cdn.jsdelivr.net/npm/ol@v8.2.0/dist/ol.js"></script> --}}

</head>

<body>

    @include('partials.nav')

    @if (!isset($exception))
        {{-- <div class="searchfield bg-hed-six">
                    <div class="container" style="padding-top: 20px; padding-bottom: 20px;">
                        <div class="row text-center margin-bottom-20">
                            <h1 class="white">{{ trans('panel.site_title') }}</h1>
                            <span class="nested">Learn to use gomac</span>
                        </div>
                    </div>
                </div> --}}
    @endif


    @yield('content')


    @if (!isset($exception))
        {{-- @include('partials.sidebar') --}}
    @endif

    @yield('about')
    @include('partials.footer')



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://canvasjs.com/assets/script/jquery.canvasjs.min.js"></script>
    {{-- <script src="{{ asset('theme_of_mozambique/js/linecharts.js') }}"></script> --}}
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>



</body>

</html>
