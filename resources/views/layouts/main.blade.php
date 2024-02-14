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


    <script>
        var categories = [
            '0-4', '5-9', '10-14', '15-19',
            '20-24', '25-29', '30-34', '35-39', '40-44',
            '45-49', '50-54', '55-59', '60-64', '65-69',
            '70-74', '75-79', '80-84', '85-89', '90-94',
            '95-99', '100 + '
        ];

        Highcharts.chart('malePopulation', {
            chart: {
                type: 'bar'
            },
            title: {
                text: 'Population pyramid for mozambique, 2023'
            },
            credits: {
                enabled: false // Hide the credits
            },
            subtitle: {
                text: 'Source: <a href="http://populationpyramid.net/germany/2018/">Population Pyramids of the World from 1950 to 2100</a>'
            },
            xAxis: [{
                categories: categories,
                reversed: false,
                labels: {
                    step: 1
                }
            }, { // mirror axis on right side
                opposite: true,
                reversed: false,
                categories: categories,
                linkedTo: 0,
                labels: {
                    step: 1
                }
            }],
            yAxis: {
                title: {
                    text: null
                },
                labels: {
                    formatter: function() {
                        return Math.abs(this.value) + '%';
                    }
                }
            },

            plotOptions: {
                series: {
                    stacking: 'normal'
                }
            },

            tooltip: {
                formatter: function() {
                    return '<b>' + this.series.name + ', age ' + this.point.category + '</b><br/>' +
                        'Population: ' + Highcharts.numberFormat(Math.abs(this.point.y), 2);
                }
            },

            series: [{
                name: 'Male',
                data: [
                    -2.2, -2.1, -2.2, -2.4,
                    -2.7, -3.0, -3.3, -3.2,
                    -2.9, -3.5, -4.4, -4.1,
                    -13.4, -2.7, -2.3, -2.2,
                    -1.6, -0.6, -0.3, -0.0,
                    -0.0
                ]
            }, {
                name: 'Female',
                data: [
                    2.1, 2.0, 2.1, 2.3, 2.6,
                    2.9, 3.2, 3.1, 2.9, 3.4,
                    14.3, 4.0, 3.5, 2.9, 2.5,
                    2.7, 2.2, 1.1, 0.6, 0.2,
                    0.0
                ]
            }]
        });
        var categories = [
            '0-4', '5-9', '10-14', '15-19',
            '20-24', '25-29', '30-34', '35-39', '40-44',
            '45-49', '50-54', '55-59', '60-64', '65-69',
            '70-74', '75-79', '80-84', '85-89', '90-94',
            '95-99', '100 + '
        ];

        Highcharts.chart('dependency1', {
            chart: {
                type: 'bar'
            },
            title: {
                text: 'Population pyramid for mozambique, 2023'
            },
            credits: {
                enabled: false // Hide the credits
            },
            subtitle: {
                text: 'Source: <a href="http://populationpyramid.net/germany/2018/">Population Pyramids of the World from 1950 to 2100</a>'
            },
            xAxis: [{
                categories: categories,
                reversed: false,
                labels: {
                    step: 1
                }
            }, { // mirror axis on right side
                opposite: true,
                reversed: false,
                categories: categories,
                linkedTo: 0,
                labels: {
                    step: 1
                }
            }],
            yAxis: {
                title: {
                    text: null
                },
                labels: {
                    formatter: function() {
                        return Math.abs(this.value) + '%';
                    }
                }
            },

            plotOptions: {
                series: {
                    stacking: 'normal'
                }
            },

            tooltip: {
                formatter: function() {
                    return '<b>' + this.series.name + ', age ' + this.point.category + '</b><br/>' +
                        'Population: ' + Highcharts.numberFormat(Math.abs(this.point.y), 2);
                }
            },

            series: [{
                name: 'Male',
                data: [
                    -2.2, -2.1, -2.2, -2.4,
                    -2.7, -3.0, -3.3, -3.2,
                    -2.9, -3.5, -4.4, -4.1,
                    -13.4, -2.7, -2.3, -2.2,
                    -1.6, -0.6, -0.3, -0.0,
                    -0.0
                ]
            }, {
                name: 'Female',
                data: [
                    2.1, 2.0, 2.1, 2.3, 2.6,
                    2.9, 3.2, 3.1, 2.9, 3.4,
                    14.3, 4.0, 3.5, 2.9, 2.5,
                    2.7, 2.2, 1.1, 0.6, 0.2,
                    0.0
                ]
            }]
        });
        var categories = [
            '0-4', '5-9', '10-14', '15-19',
            '20-24', '25-29', '30-34', '35-39', '40-44',
            '45-49', '50-54', '55-59', '60-64', '65-69',
            '70-74', '75-79', '80-84', '85-89', '90-94',
            '95-99', '100 + '
        ];

        Highcharts.chart('dependency2', {
            chart: {
                type: 'bar'
            },
            title: {
                text: 'Population pyramid for mozambique, 2023'
            },
            credits: {
                enabled: false // Hide the credits
            },
            subtitle: {
                text: 'Source: <a href="http://populationpyramid.net/germany/2018/">Population Pyramids of the World from 1950 to 2100</a>'
            },
            xAxis: [{
                categories: categories,
                reversed: false,
                labels: {
                    step: 1
                }
            }, { // mirror axis on right side
                opposite: true,
                reversed: false,
                categories: categories,
                linkedTo: 0,
                labels: {
                    step: 1
                }
            }],
            yAxis: {
                title: {
                    text: null
                },
                labels: {
                    formatter: function() {
                        return Math.abs(this.value) + '%';
                    }
                }
            },

            plotOptions: {
                series: {
                    stacking: 'normal'
                }
            },

            tooltip: {
                formatter: function() {
                    return '<b>' + this.series.name + ', age ' + this.point.category + '</b><br/>' +
                        'Population: ' + Highcharts.numberFormat(Math.abs(this.point.y), 2);
                }
            },

            series: [{
                name: 'Male',
                data: [
                    -2.2, -2.1, -2.2, -2.4,
                    -2.7, -3.0, -3.3, -3.2,
                    -2.9, -3.5, -4.4, -4.1,
                    -13.4, -2.7, -2.3, -2.2,
                    -1.6, -0.6, -0.3, -0.0,
                    -0.0
                ]
            }, {
                name: 'Female',
                data: [
                    2.1, 2.0, 2.1, 2.3, 2.6,
                    2.9, 3.2, 3.1, 2.9, 3.4,
                    14.3, 4.0, 3.5, 2.9, 2.5,
                    2.7, 2.2, 1.1, 0.6, 0.2,
                    0.0
                ]
            }]
        });
    </script>
</body>

</html>
