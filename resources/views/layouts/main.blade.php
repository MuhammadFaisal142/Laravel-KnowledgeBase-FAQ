<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ trans('panel.site_title') }}</title>
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    {{-- leaflet css --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/leaflet@1.9.4/dist/leaflet.min.css">
    {{-- end leaflet  css --}}


    <!-- Google Font: Source Sans Pro -->

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://code.highcharts.com/maps/highmaps.js"></script>
    <script src="https://code.highcharts.com/maps/modules/exporting.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <script src="https://code.highcharts.com/highcharts.js"></script>


    <!-- Include Leaflet and Highcharts libraries -->
    <!-- Leaflet CSS/JS -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
    <script src="{{ asset('js/us-state.js') }}"></script>
    {{-- new shape file chart  scripts --}}
    {{-- <script src="{{ asset('js/mozambiquejson.js') }}"></script> --}}
    <script src="{{ asset('js/districtsfinalfile.js') }}"></script>
    {{-- leaflet js --}}
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
    {{-- leaflet js end --}}

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/ol@v8.2.0/ol.css">
    <script src="https://cdn.jsdelivr.net/npm/ol@v8.2.0/dist/ol.js"></script>
    <style>
        #map2 {
            height: 400px;
        }

        .info {
            padding: 6px 8px;
            font: 14px/16px Arial, Helvetica, sans-serif;
            background: white;
            background: rgba(255, 255, 255, 0.8);
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
            border-radius: 5px;
        }

        .info h4 {
            margin: 0 0 5px;
            color: #777;
        }

        .leaflet-control-attribution {
            display: none;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row">
            <h1 class="mb-5">{{ trans('panel.site_title') }}</h1>
        </div>
    </div>

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

    <div class="container featured-area-default padding-30">
        <div class="row">
            @yield('content')



            @if (!isset($exception))
                {{-- @include('partials.sidebar') --}}
            @endif
        </div>
    </div>

    @yield('about')

    @include('partials.footer')

    <script src="{{ asset('js/jquery-2.2.4.min.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src='https://cdn.rawgit.com/VPenkov/okayNav/master/app/js/jquery.okayNav.js'></script>

</body>

</html>
