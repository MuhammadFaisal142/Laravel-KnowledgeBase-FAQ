@extends('layouts.main')

@section('content')
    <!-- START Map -->
    <div class="container mt-10">
        {{-- TABLE --}}
        <div class="row">
            <div class="col-12 ">
                <div class="box">
                    <div class="box-header with-border td-align-center  box-primary">
                        <h4 class="box-title text-center text-white ">{{ trans('global.overall_conversion_rate') }}</h4>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-dark mb-0">
                                <thead>
                                    <tr>
                                        <th scope="col" class="td-align-center" class="text-white">
                                            {{ trans('global.gender') }}</th>
                                        <th scope="col" class="td-align-center">18-24</th>
                                        <th scope="col" class="td-align-center">25-34</th>
                                        <th scope="col" class="td-align-center">35-44</th>
                                        <th scope="col" class="td-align-center">45-54</th>
                                        <th scope="col" class="td-align-center">55-64</th>
                                        <th scope="col" class="td-align-center">65+</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row" class="td-align-center">{{ trans('global.female') }}</th>
                                        <td style="background-color: #FED976; color: white;">14.3%</td>
                                        <td style="background-color: #FD8D3C; color: white;">16.5%</td>
                                        <td style="background-color: #FC4E2A; color: white;">18.6%</td>
                                        <td style="background-color: #FEB24C; color: white;">18.7%</td>
                                        <td style="background-color: #E31A1C; color: white;">15.9%</td>
                                        <td style="background-color: #BD0026; color: white;">12.2%</td>
                                    </tr>
                                    <tr>
                                        <th scope="row" class="td-align-center">{{ trans('global.male') }}</th>
                                        <td style="background-color: #FEB24C; color: white;">16.3%</td>
                                        <td style="background-color: #FD8D3C; color: white;">16.8%</td>
                                        <td style="background-color: #FC4E2A; color: white;">16.0%</td>
                                        <td style="background-color: #FEB24C; color: white;">16.6%</td>
                                        <td style="background-color: #BD0026; color: white;">11.0%</td>
                                        <td style="background-color: #BD0026; color: white;">8.6%</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>


            <div class="col-md-6">
                <div class="box box-solid box-primary">
                    <div class="box-header with-border">
                        <h4 class="box-title">
                            {{ trans('global.mozambique-map') }}
                            <div class="btn-group ml-10">
                                <a href="{{ route('home') }}"
                                    class="btn btn-info btn-primary text-white">{{ trans('global.national') }}</a>
                                <button type="button" class="btn btn-info dropdown-toggle text-white"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    {{ trans('global.all_provinces') }}
                                </button>
                                <div class="dropdown-menu">
                                    <!-- Add your province options here -->
                                    <a class="dropdown-item" href="{{ url('/province/Niassa') }}">Niassa</a>
                                    <a class="dropdown-item" href="{{ url('/province/Tete') }}">Tete</a>
                                    <a class="dropdown-item" href="{{ url('/province/Nampula') }}">Nampula</a>
                                    <a class="dropdown-item" href="{{ url('/province/Cabo Delgado') }}">Cabo Delgado</a>
                                    <a class="dropdown-item" href="{{ url('/province/Zambezia') }}">Zambezia</a>
                                    <a class="dropdown-item" href="{{ url('/province/Manica') }}">Manica</a>
                                    <a class="dropdown-item" href="{{ url('/province/Sofala') }}">Sofala</a>
                                    <a class="dropdown-item" href="{{ url('/province/Inhambane') }}">Inhambane</a>
                                    <a class="dropdown-item" href="{{ url('/province/Gaza') }}">Gaza</a>
                                    <a class="dropdown-item" href="{{ url('/province/Maputo Cidade') }}">Maputo Cidade </a>
                                    <a class="dropdown-item" href="{{ url('/province/Maputo Provincia') }}">Maputo
                                        Provincia</a>
                                    <!-- Add more provinces as needed -->
                                </div>
                            </div>
                        </h4>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div id="map2" style="height: 600px"></div>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
            <!-- /.col -->

            <div class="col-md-3">
                <div class="row">
                    <div class="col-md-12">
                        <div class="box">
                            <div class="box-header with-border">
                                <h4 class="box-title">{{ trans('global.population-contribution') }}</h4>
                            </div>
                            <div class="box-body">
                                <div class="row">
                                    <div class="">
                                        <h5 class="box-title">{{ trans('global.total_population') }}</h5>
                                        <div id="rev-chart1"></div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="">
                                        <h5 class="box-title">{{ trans('global.mens_population') }}</h5>
                                        <div id="rev-chart2"></div>
                                    </div>
                                    <div class="">
                                        <h5 class="box-title">{{ trans('global.womens_population') }}</h5>
                                        <div id="rev-chart3"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="row">
                    <div class="col-md-12">
                        <div class="box">
                            <div class="box-header with-border">
                                <h4 class="box-title">{{ trans('global.marital_Ratio') }}</h4>
                            </div>
                            <div class="box-body">
                                <div class="row">
                                    <div class="">
                                        <h5 class="box-title">{{ trans('global.total_marital_ratio') }}</h5>
                                        <div id="chart_total_marital"></div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="">
                                        <h5 class="box-title">{{ trans('global.mens_marital_ratio') }}</h5>
                                        <div id="chart_mens_marital"></div>
                                    </div>
                                    <div class="">
                                        <h5 class="box-title">{{ trans('global.womens_marital_ratio') }}</h5>
                                        <div id="chart_womens_marital"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.col-md-4 -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->






    <script>
        // Set the desired province to show (set to null or an empty string to show all provinces)
        const desiredProvince =
            @json($province); // Change this to the desired province or set to null/empty string

        // Filter features based on the "Provincia" property if a specific province is set
        const filteredFeatures = desiredProvince ?
            mozambiquefulldistricts.features.filter(feature => feature.properties.Provincia === desiredProvince) :
            mozambiquefulldistricts.features;
        var translations = {
            marine_sprite: '{{ __('global.marine_sprite') }}',
            striking_calf: '{{ __('global.striking_calf') }}',
            tank_picture: '{{ __('global.tank_picture') }}',
            bucket_slope: '{{ __('global.bucket_slope') }}',
            reborn_kid: '{{ __('global.reborn_kid') }}',
            tenure_household_percentage: '{{ __('global.tenure_household_percentage') }}',

            total_population: '{{ __('global.total_population') }}',
            men_population: '{{ __('global.mens_population') }}',
            women_population: '{{ __('global.womens_population') }}',
            name_of_district: '{{ __('global.name_of_district') }}',

        };



        // Update the original GeoJSON data with the filtered features
        mozambiquefulldistricts.features = filteredFeatures;

        function getProvinceCoordinates(province) {
            // Replace this with logic to get coordinates based on the selected province
            switch (province) {
                case "Niassa":
                    return [-13.50, 36.00];
                case "Cabo Delgado":
                    return [-12.50, 39.00];
                case "Nampula":
                    return [-15.50, 39.00];
                case "Zambezia":
                    return [-16.50, 37.00];
                case "Tete":
                    return [-15.50, 33.00];
                case "Manica":
                    return [-19.00, 33.50];

                case "Sofala":
                    return [-19.50, 35.00];
                case "Inhambane":
                    return [-23.50, 34.50];
                case "Gaza":
                    return [-23.50, 33.00];
                case "Maputo Provincia":
                    return [-25.50, 32.50];
                case "Maputo Cidade":
                    return [-25.9692, 32.6862];

                    // Add more cases for other provinces as needed
                default:
                    // Default coordinates if province is not found
                    return [-19.00, 34.00];
            }
            // You need to provide actual coordinates for each province
        }

        // Mozambiquie  chart javascripts
        function getColor(d) {
            return d > 600000 ? '#BD0026' :
                d > 400000 ? '#E31A1C' :
                d > 350000 ? '#FC4E2A' :
                d > 200000 ? '#FD8D3C' :
                d > 100000 ? '#FEB24C' :
                d > 70000 ? '#FED976' :
                d > 50000 ? '#FFEDA0' :
                '#FFED00';
        }


        // Assuming $population_data is a JSON object passed from PHP
        const populationData = @json($population_data);

        function style(feature) {
            // Get the "id" property from the feature
            const id_of_districts = feature.properties.id;

            // Find the corresponding record in the population data
            const filteredData = populationData.find(record => record.id === id_of_districts);

            // Check if the record is found
            if (filteredData) {
                // Assuming popTotalValue is a string like "123,232"
                const popTotalString = filteredData.Pop_Total;

                // Remove commas from the string
                const popTotalWithoutCommas = popTotalString.replace(/,/g, '');

                // Convert the string without commas to a number
                const popTotalValue = parseInt(popTotalWithoutCommas, 10);
                return {
                    fillColor: getColor(popTotalValue),
                    weight: 2,
                    opacity: 1,
                    color: 'white',
                    dashArray: '3',
                    fillOpacity: 0.7
                };
            }
        }

        var map2;

        if (desiredProvince) {
            const provinceCoordinates = getProvinceCoordinates(desiredProvince);
            map2 = L.map('map2', {
                center: provinceCoordinates,
                zoom: 6.5,
                minZoom: 4,
                maxZoom: 8,
                scrollWheelZoom: true // Disable global scroll wheel zoom initially
            });

            // Check if the desired province is "Maputo Cidade"
            if (desiredProvince === "Maputo Cidade") {
                // Adjust zoom levels for Maputo Cidade
                map2.setMinZoom(8);
                map2.setMaxZoom(10);
                map2.setZoom(18);
            }

        } else {
            map2 = L.map('map2', {
                center: [-19.00, 34.00],
                zoom: 5,
                minZoom: 4,
                maxZoom: 8,
                scrollWheelZoom: true // Disable global scroll wheel zoom initially
            });
        }






        // var tiles = L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        //     maxZoom: 19,
        //     attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
        // }).addTo(map2);

        L.geoJson(mozambiquefulldistricts, {
            style: style
        }).addTo(map2);

        // Define global variable to track the highlighted layer
        var highlightedLayer;

        function highlightFeature(e) {
            const layer = e.target;
            layer.setStyle({
                weight: 1,
                color: '#666',
                dashArray: '',
                fillOpacity: 0.7
            });

            layer.bringToFront();
        }

        function resetHighlight(e) {
            geojson.resetStyle(e.target);
            map2.closePopup();
        }
        var geojson;
        // ... our listeners
        geojson = L.geoJson(mozambiquefulldistricts);

        function zoomToFeature(e) {
            // map2.fitBounds(e.target.getBounds());
            const layer = e.target;
            const id_of_districts = layer.feature.properties.id;

            const dataFromServer = @json($population_data);

            // Filter data to include only records where id is equal to id_of_districts
            const filteredData = dataFromServer.filter(function(record) {
                return record.id === id_of_districts;
            });
            // console.log(filteredData);
            const popID = filteredData[0].id;
            // console.log(popID);


            layer.setStyle({
                weight: 4,
                color: '#666',
                dashArray: '',
                fillOpacity: 0.8
            });
            // Pie charts total population
            var grupIdad_014_Total = filteredData[0].GrupIdad_014_Total;
            var grupIdad_1564_Total = filteredData[0].GrupIdad_1564_Total;
            var grupIdad_65_Total = filteredData[0].GrupIdad_65_Total;
            // Pie charts mens population
            var grupIdad_014_homens = filteredData[0].GrupIdad_014_homens;
            var grupIdad_1564_homens = filteredData[0].GrupIdad_1564_homens;
            var grupIdad_65_homens = filteredData[0].GrupIdad_65_homens;
            // Pie charts womens population
            var grupIdad_014_mulheres = filteredData[0].GrupIdad_014_mulheres;
            var grupIdad_1564_mulheres = filteredData[0].GrupIdad_1564_mulheres;
            var grupIdad_65_mulheres = filteredData[0].GrupIdad_65_mulheres;

            // Pie charts total marital ratio
            var solteiro_total = filteredData[0].Solteiro_total;
            var casado_total = filteredData[0].Casado_total;
            var uniao_Marital_total = filteredData[0].União_Marital_total;
            var divorciado_Separado_total = filteredData[0].Divorciado_Separado_total;
            var viuvo_total = filteredData[0].Viúvo_total;

            // Pie charts mens marital ratio
            var solteiro_homens = filteredData[0].Solteiro_homens;
            var casado_homens = filteredData[0].Casado_homens;
            var uniao_Marital_homens = filteredData[0].União_Marital_homens;
            var divorciado_Separado_homens = filteredData[0].Divorciado_Separado_homens;
            var viuvo_homens = filteredData[0].Viúvo_homens;

            // Pie charts womens marital ratio
            var solteiro_mulheres = filteredData[0].Solteiro_mulheres;
            var casado_mulheres = filteredData[0].Casado_mulheres;
            var uniao_Marital_mulheres = filteredData[0].União_Marital_mulheres;
            var divorciado_Separado_mulheres = filteredData[0].Divorciado_Separado_mulheres;
            var viuvo_mulheres = filteredData[0].Viúvo_mulheres;

            highlightPieChartMaritalRatio(
                solteiro_total, casado_total, uniao_Marital_total, divorciado_Separado_total, viuvo_total,
                solteiro_homens, casado_homens, uniao_Marital_homens, divorciado_Separado_homens, viuvo_homens,
                solteiro_mulheres, casado_mulheres, uniao_Marital_mulheres, divorciado_Separado_mulheres, viuvo_mulheres
            );



            // PieChartsPopulation();
            highlightPieChartPopulation(popID, grupIdad_014_Total, grupIdad_1564_Total, grupIdad_65_Total,
                grupIdad_014_homens,
                grupIdad_1564_homens, grupIdad_65_homens, grupIdad_014_mulheres, grupIdad_1564_mulheres,
                grupIdad_65_mulheres);
        }

        function onEachFeature(feature, layer) {
            var layer1 = layer;
            const id_of_districts = feature.properties.id;

            const dataFromServer = @json($population_data);

            // Filter data to include only records where id is equal to id_of_districts
            const filteredData = dataFromServer.filter(function(record) {
                return record.id === id_of_districts;
            });

            if (feature.properties && feature.properties.Distrito) {
                var nameOfDistrict = filteredData[0].District;

                var popTotalValue = filteredData[0].Pop_Total;
                var popWomenName = filteredData[0].Pop_mulheres;
                var popMenName = filteredData[0].Pop_homens;

                const customIcon = L.divIcon({
                    className: 'district-label', // Add a CSS class for styling
                    html: nameOfDistrict,
                });

                // // Create a marker with the custom icon
                // const labelMarker = L.marker(layer1.getBounds().getCenter(), {
                //     icon: customIcon
                // });

                // // Add the marker to the map
                // labelMarker.addTo(map2);

                // Set up event listeners for the GeoJSON layer1
                layer1.on({
                    mouseover: highlightFeature,
                    mouseout: resetHighlight,
                    click: zoomToFeature
                });

                // Add tooltip to the layer
                layer1.bindTooltip(translations.name_of_district + ': ' + nameOfDistrict + '</br>' +
                    '<b>' + translations.total_population + ": " + '</b>' + popTotalValue + '</br>' + '<b>' +
                    translations
                    .men_population + '</b>' + ": " + popMenName +
                    '</br>' +
                    '<b>' + translations.women_population + '</b>' + ": " + popWomenName, {
                        sticky: true
                    }).openTooltip();

            }
        }
        geojson = L.geoJson(mozambiquefulldistricts, {
            style: style,
            onEachFeature: onEachFeature
        }).addTo(map2);


        var legend = L.control({
            position: 'bottomright'
        });

        legend.onAdd = function(map2) {
            var div = L.DomUtil.create('div', 'info legend');
            var grades = [0, 50000, 70000, 100000, 200000, 350000, 400000, 600000];

            for (var i = 0; i < grades.length; i++) {
                var from = grades[i];
                var to = grades[i + 1];
                var label = from + (to ? '&ndash;' + to : '+');

                var color = getColor(from + 1);

                // Add label inside the button without removing <br>
                div.innerHTML +=
                    '<button style="background:' + color +
                    '; border: 0; height: 10px; width: 15px; line-height: 10px;"></button>' + " " + label + '<br>';
            }

            return div;
        };

        legend.addTo(map2);



        // These are pie charts code


        function highlightPieChartPopulation(popID, grupIdad_014_Total, grupIdad_1564_Total, grupIdad_65_Total,
            grupIdad_014_homens,
            grupIdad_1564_homens, grupIdad_65_homens, grupIdad_014_mulheres, grupIdad_1564_mulheres, grupIdad_65_mulheres) {

            // Check if the charts exist and destroy them
            if (window.chartTotalPopulation) {
                window.chartTotalPopulation.destroy();
            }

            if (window.chartForMens) {
                window.chartForMens.destroy();
            }

            if (window.chartForWomens) {
                window.chartForWomens.destroy();
            }

            // Total population pie charts data
            var id = parseFloat(popID);
            var total_014 = parseFloat(grupIdad_014_Total);
            var total_1564 = parseFloat(grupIdad_1564_Total);
            var total_65 = parseFloat(grupIdad_65_Total);
            var updatedSeriesTotal = [total_014, total_1564, total_65];

            // Update the chart options with the new series data
            var options = {
                chart: {
                    width: 280,
                    type: 'pie',
                },
                colors: ['#BD0026', '#FC4E2A', '#FEB24C'],
                labels: ['0-14 Years', '15-64 Years', '65+ Years'],
                series: updatedSeriesTotal,
                legend: {
                    position: 'bottom',
                },
                responsive: [{
                    breakpoint: 480,
                    options: {
                        chart: {
                            width: 100,
                        },
                        legend: {
                            position: 'bottom',
                        },
                    },
                }],
            };

            // Render the chart with updated options
            window.chartTotalPopulation = new ApexCharts(
                document.querySelector("#rev-chart1"),
                options
            );
            window.chartTotalPopulation.render();

            // Women population pie charts data
            var homens_014 = parseFloat(grupIdad_014_homens);
            var homens_1564 = parseFloat(grupIdad_1564_homens);
            var homens_65 = parseFloat(grupIdad_65_homens);
            var updatedSeriesForMens = [homens_014, homens_1564, homens_65];

            var options = {
                chart: {
                    width: 280,
                    type: 'pie',
                },
                colors: ['#BD0026', '#FC4E2A', '#FEB24C'],
                labels: ['0-14 Years', '15-64 Years', '65+ Years'],
                series: updatedSeriesForMens,
                legend: {
                    position: 'bottom'
                },
                responsive: [{
                    breakpoint: 480,
                    options: {
                        chart: {
                            width: 100
                        },
                        legend: {
                            position: 'bottom'
                        }
                    }
                }]
            };

            window.chartForMens = new ApexCharts(
                document.querySelector("#rev-chart2"),
                options
            );
            window.chartForMens.render();

            // Men population pie charts data
            var mulheres_014 = parseFloat(grupIdad_014_mulheres);
            var mulheres_1564 = parseFloat(grupIdad_1564_mulheres);
            var mulheres_65 = parseFloat(grupIdad_65_mulheres);
            var updatedSeriesForWomens = [mulheres_014, mulheres_1564, mulheres_65];

            var options = {
                chart: {
                    width: 280,
                    type: 'pie',
                },
                colors: ['#BD0026', '#FC4E2A', '#FEB24C'],
                labels: ['0-14 Years', '15-64 Years', '65+ Years'],
                series: updatedSeriesForWomens,
                legend: {
                    position: 'bottom'
                },
                responsive: [{
                    breakpoint: 480,
                    options: {
                        chart: {
                            width: 100
                        },
                        legend: {
                            position: 'bottom'
                        }
                    }
                }]
            };

            window.chartForWomens = new ApexCharts(
                document.querySelector("#rev-chart3"),
                options
            );
            window.chartForWomens.render();
        }

        function highlightPieChartMaritalRatio(
            solteiro_total, casado_total, uniao_Marital_total, divorciado_Separado_total, viuvo_total,
            solteiro_homens, casado_homens, uniao_Marital_homens, divorciado_Separado_homens, viuvo_homens,
            solteiro_mulheres, casado_mulheres, uniao_Marital_mulheres, divorciado_Separado_mulheres, viuvo_mulheres
        ) {


            // Check if the charts exist and destroy them
            if (window.chartTotalMarital) {
                window.chartTotalMarital.destroy();
            }
            if (window.chartMensMarital) {
                window.chartMensMarital.destroy();
            }
            if (window.chartWomensMarital) {
                window.chartWomensMarital.destroy();
            }


            // Convert string values to float
            var solteiro_total_marital = parseFloat(solteiro_total);
            var casado_total_marital = parseFloat(casado_total);
            var uniao_Marital_total_marital = parseFloat(uniao_Marital_total);
            var divorciado_Separado_total_marital = parseFloat(divorciado_Separado_total);
            var viuvo_total_marital = parseFloat(viuvo_total);

            var updatedSeriesTotalMarital = [solteiro_total_marital, casado_total_marital, uniao_Marital_total_marital,
                divorciado_Separado_total_marital, viuvo_total_marital
            ];

            // Update the chart options with the new series data
            var options = {
                chart: {
                    width: 280,
                    type: 'pie',
                },
                colors: ['#BD0026', 'E31A1C', '#FC4E2A', 'FD8D3C', '#FEB24C'],
                labels: ['single', 'married', 'unity', 'divorced', 'widower'],
                series: updatedSeriesTotalMarital,
                legend: {
                    position: 'bottom',
                },
                responsive: [{
                    breakpoint: 480,
                    options: {
                        chart: {
                            width: 100,
                        },
                        legend: {
                            position: 'bottom',
                        },
                    },
                }],
            };

            // Render the chart with updated options
            window.chartTotalMarital = new ApexCharts(
                document.querySelector("#chart_total_marital"),
                options
            );
            window.chartTotalMarital.render();


            // it is mens marital

            var solteiro_homens_marital = parseFloat(solteiro_homens);
            var casado_homens_marital = parseFloat(casado_homens);
            var uniao_Marital_homens_marital = parseFloat(uniao_Marital_homens);
            var divorciado_Separado_homens_marital = parseFloat(divorciado_Separado_homens);
            var viuvo_homens_marital = parseFloat(viuvo_homens);


            var updatedSeriesMensMarital = [solteiro_homens_marital, casado_homens_marital, uniao_Marital_homens_marital,
                divorciado_Separado_homens_marital, viuvo_homens_marital
            ];

            // Update the chart options with the new series data
            var options = {
                chart: {
                    width: 280,
                    type: 'pie',
                },
                colors: ['#BD0026', 'E31A1C', '#FC4E2A', 'FD8D3C', '#FEB24C'],
                labels: ['single', 'married', 'unity', 'divorced', 'widower'],
                series: updatedSeriesMensMarital,
                legend: {
                    position: 'bottom',
                },
                responsive: [{
                    breakpoint: 480,
                    options: {
                        chart: {
                            width: 100,
                        },
                        legend: {
                            position: 'bottom',
                        },
                    },
                }],
            };

            // Render the chart with updated options
            window.chartMensMarital = new ApexCharts(
                document.querySelector("#chart_mens_marital"),
                options
            );
            window.chartMensMarital.render();


            // it is womens marital
            var solteiro_mulheres_marital = parseFloat(solteiro_mulheres);
            var casado_mulheres_marital = parseFloat(casado_mulheres);
            var uniao_Marital_mulheres_marital = parseFloat(uniao_Marital_mulheres);
            var divorciado_Separado_mulheres_marital = parseFloat(divorciado_Separado_mulheres);
            var viuvo_mulheres_marital = parseFloat(viuvo_mulheres);

            var updatedSeriesWomensMarital = [solteiro_mulheres_marital, casado_mulheres_marital,
                uniao_Marital_mulheres_marital,
                divorciado_Separado_mulheres_marital, viuvo_mulheres_marital
            ];

            // Update the chart options with the new series data
            var options = {
                chart: {
                    width: 280,
                    type: 'pie',
                },
                colors: ['#BD0026', 'E31A1C', '#FC4E2A', 'FD8D3C', '#FEB24C'],
                labels: ['single', 'married', 'unity', 'divorced', 'widower'],
                series: updatedSeriesWomensMarital,
                legend: {
                    position: 'bottom',
                },
                responsive: [{
                    breakpoint: 480,
                    options: {
                        chart: {
                            width: 100,
                        },
                        legend: {
                            position: 'bottom',
                        },
                    },
                }],
            };

            // Render the chart with updated options
            window.chartWomensMarital = new ApexCharts(
                document.querySelector("#chart_womens_marital"),
                options
            );
            window.chartWomensMarital.render();

        }


        geojson.on('mouseover', function() {
            map2.scrollWheelZoom.enable();
        });

        geojson.on('mouseout', function() {
            map2.scrollWheelZoom.disable();
        });
    </script>
@endsection
