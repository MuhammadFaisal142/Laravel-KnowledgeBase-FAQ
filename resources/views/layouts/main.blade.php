<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ trans('panel.site_title') }}</title>
    {{-- themes files add here  --}}
    <!-- Bootstrap 4.0-->
    <link rel="stylesheet" href="{{ asset('html/assets/vendor_components/bootstrap/dist/css/bootstrap.css') }}">

    <!-- Bootstrap extend-->
    <link rel="stylesheet" href="{{ asset('html/css/bootstrap-extend.css') }}">

    <!-- theme style -->
    <link rel="stylesheet" href="{{ asset('html/css/master_style.css') }}">

    <!-- Uicod Admin skins -->
    <link rel="stylesheet" href="{{ asset('html/css/skins/_all-skins.css') }}">
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
    <script src="{{ asset('js/districtsfinalfile.js') }}"></script>
    {{-- <script src="{{ asset('js/check.js') }}"></script> --}}
    {{-- leaflet js --}}
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
    {{-- leaflet js end --}}




    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/ol@v8.2.0/ol.css">
    <script src="https://cdn.jsdelivr.net/npm/ol@v8.2.0/dist/ol.js"></script>
    <style>
        /* #map2 {
            height: 400px;
        } */

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

        .legend {
            line-height: 18px;
            color: #555;
        }

        .legend i {
            width: 18px;
            height: 18px;
            float: left;
            margin-right: 8px;
            opacity: 0.7;
        }

        .table td {
            text-align: center;
            color: white;
        }

        .td-align-center {
            text-align: center;
            color: white;
        }

        /* .table1 tbody th,
        .table1 tbody td {
            color: white;
        } */

        .table tbody td {
            font-weight: bold;
        }
    </style>
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

    {{-- <script src='https://cdn.rawgit.com/VPenkov/okayNav/master/app/js/jquery.okayNav.js'></script> --}}

    <!-- ./wrapper jQuery 3 -->
    <script src="{{ asset('html/assets/vendor_components/jquery/dist/jquery.js') }}"></script>

    <!-- jQuery UI 1.11.4 -->
    <script src="{{ asset('html/assets/vendor_components/jquery-ui/jquery-ui.js') }}"></script>

    <!-- popper -->
    <script src="{{ asset('html/assets/vendor_components/popper/dist/popper.min.js') }}"></script>

    <!-- Bootstrap 4.0-->
    <script src="{{ asset('html/assets/vendor_components/bootstrap/dist/js/bootstrap.js') }}"></script>

    <!-- Slimscroll -->
    <script src="{{ asset('html/assets/vendor_components/jquery-slimscroll/jquery.slimscroll.js') }}"></script>

    <!-- FastClick -->
    <script src="{{ asset('html/assets/vendor_components/fastclick/lib/fastclick.js') }}"></script>

    <!-- apexcharts -->
    {{-- <script src="{{ asset('html/assets/vendor_components/apexcharts-bundle/irregular-data-series.js') }}"></script> --}}
    {{-- <script src="{{ asset('html/assets/vendor_components/apexcharts-bundle/dist/apexcharts.js') }}"></script> --}}

    <!-- amcharts -->
    <script src="https://www.amcharts.com/lib/4/core.js"></script>
    <script src="https://www.amcharts.com/lib/4/charts.js"></script>
    <script src="https://www.amcharts.com/lib/4/themes/animated.js"></script>

    <!-- Uicod Admin App -->
    <script src="{{ asset('html/js/template.js') }}"></script>

    <!-- Uicod Admin dashboard demo (This is only for demo purposes) -->
    <script src="{{ asset('html/js/pages/dashboard.js') }}"></script>
    <script src="{{ asset('html/js/pages/dashboard-chart.js') }}"></script>

    <!-- Uicod Admin for demo purposes -->
    <script src="{{ asset('html/js/demo.js') }}"></script>

</body>

</html>
