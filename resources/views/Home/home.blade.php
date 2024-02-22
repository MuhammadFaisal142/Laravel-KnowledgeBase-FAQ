@extends('layouts.main')
@section('content')
    <div class="content-holdder">
        <div class="row">
            <div class="col-12 col-sm">
                <div class="counter-box male-population">
                    <div class="counter" id="total_population">27.864</div>
                    <h2>{{ trans('global.total_population') }}</h2>
                </div>
            </div>
            <div class="col-12 col-sm">
                <div class="counter-box female-population">
                    <div class="counter" id="sex_ratio_by_birth">105</div>
                    <h2>{{ trans('global.Sex_Ratio_By_Birth') }}</h2>
                </div>
            </div>
            <div class="col-12 col-sm">
                <div class="counter-box total-population">
                    <div class="counter" id="population_growth_rate">2.6</div>
                    <h2>{{ trans('global.population_growth') }}</h2>
                </div>
            </div>

            <div class="col-12 col-sm">
                <div class="counter-box population_density">
                    <div class="counter" id="population_density">40.3</div>
                    <h2>{{ trans('global.population_density') }}</h2>
                </div>
            </div>
        </div>
    </div>

    <div class="filters-holder">
        <div class="filters-header">

        </div>
        <div class="form-holder">
            <div class="row">
                <div class="col-md-10">
                    <label class="custom-select" for="styledSelect2">
                        <select id="styledSelect2" name="options">
                            <option value="">{{ trans('global.all_provinces') }}</option>
                            <option value="">{{ trans('global.all_districts') }}</option>
                            <option value="Niassa">Niassa</option>
                            <option value="Tete">Tete</option>
                            <option value="Nampula">Nampula</option>
                            <option value="Cabo Delgado">Cabo Delgado</option>
                            <option value="Zambezia">Zambezia</option>
                            <option value="Manica">Manica</option>
                            <option value="Sofala">Sofala</option>
                            <option value="Inhambane">Inhambane</option>
                            <option value="Gaza">Gaza</option>
                            <option value="Maputo Cidade">Maputo Cidade</option>
                            <option value="Maputo Provincia">Maputo Provincia</option>
                        </select></label>
                </div>
                <div class="col-md-2">
                    <button class="search-btn" onclick="performSearch()">
                        {{ trans('global.search') }}
                        <i id="loader" class="fa fa-spinner fa-spin" style="display: none;"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>


    <div class="graphs-row">
        <div class="row">
            <div class="col-md-8">
                <div class="map-holder">
                    <!--    <h2>Mozanbique Map</h2> -->
                    <div class="box-body mb-2">
                        <div id="map2" style="height: 741px"></div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="chart-visual totals">
                    <div class="chart-holder" id="dependency1"></div>
                </div>
                <div class="chart-visual totals">

                    <div class="chart-holder" id="dependency2"></div>
                </div>
            </div>
        </div>
    </div>
    {{-- this is tabs option  section --}}
    <section class="section_tabs">
        <div class="content-holdder">

            <div class="pills_wrap">
                <ul class="nav nav-pills" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#population">{{ trans('global.population') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#marital_ratio">{{ trans('global.marital_Ratio') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab"
                            href="#illiteracyRate">{{ trans('global.illiteracyRate') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#dependency">{{ trans('global.dependency') }}</a>
                    </li>
                </ul>
            </div>
            <!-- Tab panes -->
            <div class="tab-content">
                <div id="population" class="tab-pane active">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="chart-visual totals">
                                {{-- chart total population --}}
                                <div class="emptyMessage">
                                    {{ trans('global.select_any_districts') }}
                                </div>
                                <div class="chart-holder" id="rev-chart1"></div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="chart-visual totals">
                                {{-- chart  mens population --}}
                                <div class="emptyMessage">
                                    {{ trans('global.select_any_districts') }}
                                </div>
                                <div class="chart-holder" id="rev-chart2"></div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="chart-visual totals">
                                {{-- chart womens population --}}
                                <div class="emptyMessage">
                                    {{ trans('global.select_any_districts') }}
                                </div>
                                <div class="chart-holder" id="rev-chart3"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="marital_ratio" class="tab-pane fade">
                    <div class="row">

                        <div class="col-md-4">
                            <div class="chart-visual totals">
                                {{-- chart marital ratio Total  --}}
                                <div class="emptyMessage">
                                    {{ trans('global.select_any_districts') }}
                                </div>
                                <div id="chart_total_marital"></div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="chart-visual totals">
                                {{-- chart marital ratio men --}}
                                <div class="emptyMessage">
                                    {{ trans('global.select_any_districts') }}
                                </div>
                                <div id="chart_mens_marital"></div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="chart-visual totals">
                                {{-- chart  marital ratio Women --}}
                                <div class="emptyMessage">
                                    {{ trans('global.select_any_districts') }}
                                </div>
                                <div id="chart_womens_marital"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="illiteracyRate" class="tab-pane fade"><br>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="chart-visual totals">
                                {{-- ILLITRACY RATE     --}}
                                <div class="emptyMessage">
                                    {{ trans('global.select_any_districts') }}
                                </div>
                                <div id="totalIlliteracyRate"></div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            {{-- <div class="chart-visual totals">

                            </div> --}}
                        </div>
                    </div>
                </div>
                <div id="dependency" class="tab-pane fade"><br>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="chart-visual totals">
                                {{-- dependency rate of   --}}
                                <div class="emptyMessage">
                                    {{ trans('global.select_any_districts') }}
                                </div>
                                <div id="totalDependencyRatioRate"></div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            {{-- <div class="chart-visual totals">

                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
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

            total_marital_ratio: '{{ __('global.total_marital_ratio') }}',
            mens_marital_ratio: '{{ __('global.mens_marital_ratio') }}',
            womens_marital_ratio: '{{ __('global.womens_marital_ratio') }}',

        };
        var desiredProvince;

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
                maxZoom: 9,
                scrollWheelZoom: true // Disable global scroll wheel zoom initially
            });

            // Check if the desired province is "Maputo Cidade"
            if (desiredProvince === "Maputo Cidade") {
                // Adjust zoom levels for Maputo Cidade
                map2.setMinZoom(10);
                map2.setMaxZoom(12);
                map2.setZoom(20);
            }

        } else {
            map2 = L.map('map2', {
                center: [-19.00, 34.00],
                zoom: 5.1,
                minZoom: 5.4,
                maxZoom: 9,
                scrollWheelZoom: true // Disable global scroll wheel zoom initially
            });
        }

        // var tiles = L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        //     maxZoom: 19,
        //     attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
        // }).addTo(map2);

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

            // Three box Total Population
            var popTotalValue = filteredData[0].Pop_Total;
            // Three box Growth Rate Population
            var popGrowthRate = filteredData[0].Taxa_Cresc_Pop;
            // Three box Growth Rate Population
            var popSexRatioBybirth = 105;
            // Three box  Population Density
            var populationDensity = filteredData[0].Densidade;

            updatePopulationCounters(popTotalValue, popSexRatioBybirth, popGrowthRate, populationDensity);

            // bar charts of the dependency ratio of 0-14 65+ all
            var totalDependencyRatio = filteredData[0].TaxaDep_01465_total;
            var youthDependencyRatioZeroToFourteen = filteredData[0].TaxaDep_014_total;
            var elderlyDependencyRatioSixtyFiveAbove = filteredData[0].TaxaDep_65_total;
            updatedPopulationDependencyRatio(totalDependencyRatio, youthDependencyRatioZeroToFourteen,
                elderlyDependencyRatioSixtyFiveAbove);


            // Illiteracy Rate by Sex,District
            var TotalIlliteracyRate = filteredData[0].Taxa_Analf_Tot;
            var MenIlliteracyRate = filteredData[0].Taxa_Analf_Hom;
            var woMenIlliteracyRate = filteredData[0].Taxa_Analf_Mulh;
            updatedPopulation_total_Illiteracy_Rate(TotalIlliteracyRate, MenIlliteracyRate,
                woMenIlliteracyRate);

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

                // Create a marker with the custom icon
                const labelMarker = L.marker(layer1.getBounds().getCenter(), {
                    icon: customIcon
                });

                // Add the marker to the map only if a specific province is selected
                if (desiredProvince) {
                    labelMarker.addTo(map2);
                }

                // Set up event listeners for the GeoJSON layer1
                layer1.on({
                    mouseover: highlightFeature,
                    mouseout: resetHighlight,
                    click: zoomToFeature
                });

                // Add tooltip to the layer
                layer1.bindTooltip(nameOfDistrict + '</br>' +
                    '<b>' + translations.total_population + ": " + '</b>' + popTotalValue, {
                        sticky: true
                    }).openTooltip();

            }
        }

        var geojson;
        geojson = L.geoJson(mozambiquefulldistricts, {
            style: style,
            onEachFeature: onEachFeature
        }).addTo(map2);

        // Add event listeners after creating the geojson layer
        geojson.on('mouseover', function() {
            map2.scrollWheelZoom.enable();
        });

        geojson.on('mouseout', function() {
            map2.scrollWheelZoom.disable();
        });
        // print legends on the mozambique map
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

        function performSearch() {
            // Get selected option for styledSelect2
            var selectedOption2 = document.getElementById('styledSelect2');
            var selectedProvince = selectedOption2.options[selectedOption2.selectedIndex].value;

            // Update the desiredProvince variable with the selected province
            desiredProvince = selectedProvince;

            // Show the loader and hide the button text
            document.getElementById('loader').style.display = 'inline-block';
            // Hide the loader after 2 seconds
            setTimeout(function() {
                document.getElementById('loader').style.display = 'none';
            }, 2000);
            // Delay the updateMap function by 2 seconds
            setTimeout(function() {
                // Update the map based on the selected province
                updateMap();
            }, 2000);
        }




        function updateMap() {
            // Clear existing GeoJSON layer
            if (map2) {
                map2.remove(); // Remove the existing map instance
            }
            map2.removeLayer(geojson);

            // Get coordinates for the selected province
            const provinceCoordinates = getProvinceCoordinates(desiredProvince);

            // Create or update the map
            if (desiredProvince) {
                map2 = L.map('map2', {
                    center: provinceCoordinates,
                    zoom: 7,
                    minZoom: 4,
                    maxZoom: 9,
                    scrollWheelZoom: true
                });

                // Check if the desired province is "Maputo Cidade"
                if (desiredProvince === "Maputo Cidade") {
                    // Adjust zoom levels for Maputo Cidade
                    map2.setMinZoom(10);
                    map2.setMaxZoom(12);
                    map2.setZoom(20);
                }
            } else {
                map2 = L.map('map2', {
                    center: [-19.00, 34.00],
                    zoom: 5.1,
                    minZoom: 5.4,
                    maxZoom: 9,
                    scrollWheelZoom: true
                });

                // If desiredProvince is empty, add the GeoJSON layer with all features
                geojson = L.geoJson(mozambiquefulldistricts, {
                    style: style,
                    onEachFeature: onEachFeature
                }).addTo(map2);
                geojson.on('mouseover', function() {
                    map2.scrollWheelZoom.enable();
                });

                geojson.on('mouseout', function() {
                    map2.scrollWheelZoom.disable();
                });
                return; // Exit the function as we don't need to filter features further
            }

            // Filter the features based on the selected province
            const filteredFeatures = desiredProvince ?
                mozambiquefulldistricts.features.filter(feature => feature.properties.Provincia === desiredProvince) :
                mozambiquefulldistricts.features;

            // Add the new GeoJSON layer with filtered features to the map
            geojson = L.geoJson(filteredFeatures, {
                style: style,
                onEachFeature: onEachFeature
            }).addTo(map2);

            geojson.on('mouseover', function() {
                map2.scrollWheelZoom.enable();
            });

            geojson.on('mouseout', function() {
                map2.scrollWheelZoom.disable();
            });
            legend.addTo(map2);

        }



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

            Highcharts.chart('rev-chart1', {
                chart: {
                    plotBackgroundColor: null,
                    plotBorderWidth: null,
                    plotShadow: false,
                    type: 'pie',


                },
                title: {
                    text: translations.total_population,
                    align: 'left'
                },
                tooltip: {
                    pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
                },
                accessibility: {
                    point: {
                        valueSuffix: '%'
                    }
                },
                plotOptions: {
                    pie: {

                        showInLegend: true
                    },

                    series: {
                        allowPointSelect: true,
                        cursor: 'pointer',
                        dataLabels: [{
                            enabled: false,
                            distance: 20
                        }, {
                            enabled: true,
                            distance: -40,
                            format: '{point.percentage:.1f}%',
                            style: {
                                fontSize: '0.8em',
                                textOutline: 'none'

                            },
                            filter: {
                                operator: '>',
                                property: 'percentage',
                                value: 10
                            }
                        }]
                    }
                },
                credits: {
                    enabled: false // Hide the credits
                },
                colors: [
                    '#7cb5ec',
                    '#434348',
                    '#90ed7d'
                ],
                series: [{
                    name: 'Age Group',
                    colorByPoint: true,
                    data: [{
                        name: '0-14 Years',
                        y: updatedSeriesTotal[0], // Dynamic value for mulheres_014

                    }, {
                        name: '15-64 Years',
                        y: updatedSeriesTotal[1], // Dynamic value for mulheres_1564
                    }, {
                        name: '65+ Years',
                        y: updatedSeriesTotal[2], // Dynamic value for mulheres_65
                    }]
                }]
            });

            // men population pie charts data
            var homens_014 = parseFloat(grupIdad_014_homens);
            var homens_1564 = parseFloat(grupIdad_1564_homens);
            var homens_65 = parseFloat(grupIdad_65_homens);
            var updatedSeriesForMens = [homens_014, homens_1564, homens_65];

            Highcharts.chart('rev-chart2', {
                chart: {
                    plotBackgroundColor: null,
                    plotBorderWidth: null,
                    plotShadow: false,
                    type: 'pie',

                },
                title: {
                    text: translations.men_population,
                    align: 'left'
                },
                tooltip: {
                    pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
                },
                accessibility: {
                    point: {
                        valueSuffix: '%'
                    }
                },
                plotOptions: {
                    pie: {

                        showInLegend: true
                    },

                    series: {
                        allowPointSelect: true,
                        cursor: 'pointer',
                        dataLabels: [{
                            enabled: false,
                            distance: 20
                        }, {
                            enabled: true,
                            distance: -40,
                            format: '{point.percentage:.1f}%',
                            style: {
                                fontSize: '0.8em',
                                textOutline: 'none'

                            },
                            filter: {
                                operator: '>',
                                property: 'percentage',
                                value: 10
                            }
                        }]
                    }
                },
                credits: {
                    enabled: false // Hide the credits
                },
                colors: [
                    '#ff9966',
                    '#663399',
                    '#00cc99'
                ],

                series: [{
                    name: 'Age Group',
                    colorByPoint: true,
                    data: [{
                        name: '0-14 Years',
                        y: updatedSeriesForMens[0], // Dynamic value for mulheres_014

                    }, {
                        name: '15-64 Years',
                        y: updatedSeriesForMens[1], // Dynamic value for mulheres_1564
                    }, {
                        name: '65+ Years',
                        y: updatedSeriesForMens[2], // Dynamic value for mulheres_65
                    }]
                }]
            });

            // Women population pie charts data
            var mulheres_014 = parseFloat(grupIdad_014_mulheres);
            var mulheres_1564 = parseFloat(grupIdad_1564_mulheres);
            var mulheres_65 = parseFloat(grupIdad_65_mulheres);
            var updatedSeriesForWomens = [mulheres_014, mulheres_1564, mulheres_65];

            Highcharts.chart('rev-chart3', {
                chart: {
                    plotBackgroundColor: null,
                    plotBorderWidth: null,
                    plotShadow: false,
                    type: 'pie',

                },
                title: {
                    text: translations.women_population,
                    align: 'left'
                },
                tooltip: {
                    pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
                },
                accessibility: {
                    point: {
                        valueSuffix: '%'
                    }
                },
                plotOptions: {
                    pie: {

                        showInLegend: true
                    },

                    series: {
                        allowPointSelect: true,
                        cursor: 'pointer',
                        dataLabels: [{
                            enabled: false,
                            distance: 20
                        }, {
                            enabled: true,
                            distance: -40,
                            format: '{point.percentage:.1f}%',
                            style: {
                                fontSize: '0.8em',
                                textOutline: 'none'

                            },
                            filter: {
                                operator: '>',
                                property: 'percentage',
                                value: 10
                            }
                        }]
                    }
                },
                credits: {
                    enabled: false // Hide the credits
                },
                colors: [
                    '#ffa500',
                    '#4caf50',
                    '#9932cc'
                ],

                series: [{
                    name: 'Age Group',
                    colorByPoint: true,
                    data: [{
                        name: '0-14 Years',
                        y: updatedSeriesForWomens[0], // Dynamic value for mulheres_014

                    }, {
                        name: '15-64 Years',
                        y: updatedSeriesForWomens[1], // Dynamic value for mulheres_1564
                    }, {
                        name: '65+ Years',
                        y: updatedSeriesForWomens[2], // Dynamic value for mulheres_65
                    }]
                }]
            });
        }

        function highlightPieChartMaritalRatio(
            solteiro_total, casado_total, uniao_Marital_total, divorciado_Separado_total, viuvo_total,
            solteiro_homens, casado_homens, uniao_Marital_homens, divorciado_Separado_homens, viuvo_homens,
            solteiro_mulheres, casado_mulheres, uniao_Marital_mulheres, divorciado_Separado_mulheres, viuvo_mulheres
        ) {
            removeEmptyMessage();
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

            Highcharts.chart('chart_total_marital', {
                chart: {
                    plotBackgroundColor: null,
                    plotBorderWidth: null,
                    plotShadow: false,
                    type: 'pie',


                    // Set the height of the chart

                },
                title: {
                    text: translations.total_marital_ratio,
                    align: 'left'
                },
                tooltip: {
                    pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
                },
                accessibility: {
                    point: {
                        valueSuffix: '%'
                    }
                },
                plotOptions: {
                    pie: {

                        showInLegend: true
                    },

                    series: {
                        allowPointSelect: true,
                        cursor: 'pointer',
                        dataLabels: [{
                            enabled: false,
                            distance: 20
                        }, {
                            enabled: true,
                            distance: -40,
                            format: '{point.percentage:.1f}%',
                            style: {
                                fontSize: '0.8em',
                                textOutline: 'none'

                            },
                            filter: {
                                operator: '>',
                                property: 'percentage',
                                value: 10
                            }
                        }]
                    }
                },
                credits: {
                    enabled: false // Hide the credits
                },
                colors: [
                    '#e74c3c',
                    '#3498db',
                    '#2ecc71',
                    '#f39c12',
                    '#9b59b6'
                ],


                series: [{
                    name: 'Age Group',
                    colorByPoint: true,
                    data: [{
                            name: 'single',
                            y: updatedSeriesTotalMarital[0], // Dynamic value for mulheres_014

                        }, {
                            name: 'married',
                            y: updatedSeriesTotalMarital[1], // Dynamic value for mulheres_1564
                        }, {
                            name: 'unity',
                            y: updatedSeriesTotalMarital[2], // Dynamic value for mulheres_65
                        },
                        {
                            name: 'divorced',
                            y: updatedSeriesTotalMarital[3], // Dynamic value for mulheres_65
                        },
                        {
                            name: 'widower',
                            y: updatedSeriesTotalMarital[4], // Dynamic value for mulheres_65
                        }

                    ]
                }]
            });
            // it is mens marital

            var solteiro_homens_marital = parseFloat(solteiro_homens);
            var casado_homens_marital = parseFloat(casado_homens);
            var uniao_Marital_homens_marital = parseFloat(uniao_Marital_homens);
            var divorciado_Separado_homens_marital = parseFloat(divorciado_Separado_homens);
            var viuvo_homens_marital = parseFloat(viuvo_homens);


            var updatedSeriesMensMarital = [solteiro_homens_marital, casado_homens_marital, uniao_Marital_homens_marital,
                divorciado_Separado_homens_marital, viuvo_homens_marital
            ];

            Highcharts.chart('chart_mens_marital', {
                chart: {
                    plotBackgroundColor: null,
                    plotBorderWidth: null,
                    plotShadow: false,
                    type: 'pie',


                    // Set the height of the chart

                },
                title: {
                    text: translations.mens_marital_ratio,
                    align: 'left'
                },
                tooltip: {
                    pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
                },
                accessibility: {
                    point: {
                        valueSuffix: '%'
                    }
                },
                plotOptions: {
                    pie: {

                        showInLegend: true
                    },

                    series: {
                        allowPointSelect: true,
                        cursor: 'pointer',
                        dataLabels: [{
                            enabled: false,
                            distance: 20
                        }, {
                            enabled: true,
                            distance: -40,
                            format: '{point.percentage:.1f}%',
                            style: {
                                fontSize: '0.8em',
                                textOutline: 'none'

                            },
                            filter: {
                                operator: '>',
                                property: 'percentage',
                                value: 10
                            }
                        }]
                    }
                },
                credits: {
                    enabled: false // Hide the credits
                },
                colors: [
                    '#ff6347',
                    '#6a5acd',
                    '#32cd32',
                    '#ff8c00',
                    '#8a2be2'
                ],


                series: [{
                    name: 'Age Group',
                    colorByPoint: true,
                    data: [{
                            name: 'single',
                            y: updatedSeriesMensMarital[0], // Dynamic value for mulheres_014

                        }, {
                            name: 'married',
                            y: updatedSeriesMensMarital[1], // Dynamic value for mulheres_1564
                        }, {
                            name: 'unity',
                            y: updatedSeriesMensMarital[2], // Dynamic value for mulheres_65
                        },
                        {
                            name: 'divorced',
                            y: updatedSeriesMensMarital[3], // Dynamic value for mulheres_65
                        },
                        {
                            name: 'widower',
                            y: updatedSeriesMensMarital[4], // Dynamic value for mulheres_65
                        }

                    ]
                }]
            });


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

            Highcharts.chart('chart_womens_marital', {
                chart: {
                    plotBackgroundColor: null,
                    plotBorderWidth: null,
                    plotShadow: false,
                    type: 'pie',


                    // Set the height of the chart

                },
                title: {
                    text: translations.womens_marital_ratio,
                    align: 'left'
                },
                tooltip: {
                    pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
                },
                accessibility: {
                    point: {
                        valueSuffix: '%'
                    }
                },
                plotOptions: {
                    pie: {

                        showInLegend: true
                    },

                    series: {
                        allowPointSelect: true,
                        cursor: 'pointer',
                        dataLabels: [{
                            enabled: false,
                            distance: 20
                        }, {
                            enabled: true,
                            distance: -40,
                            format: '{point.percentage:.1f}%',
                            style: {
                                fontSize: '0.8em',
                                textOutline: 'none'

                            },
                            filter: {
                                operator: '>',
                                property: 'percentage',
                                value: 10
                            }
                        }]
                    }
                },
                credits: {
                    enabled: false // Hide the credits
                },
                colors: [
                    '#ffcc00',
                    '#993366',
                    '#0099cc',
                    '#ff6666',
                    '#669933'
                ],


                series: [{
                    name: 'Age Group',
                    colorByPoint: true,
                    data: [{
                            name: 'single',
                            y: updatedSeriesWomensMarital[0], // Dynamic value for mulheres_014

                        }, {
                            name: 'married',
                            y: updatedSeriesWomensMarital[1], // Dynamic value for mulheres_1564
                        }, {
                            name: 'unity',
                            y: updatedSeriesWomensMarital[2], // Dynamic value for mulheres_65
                        },
                        {
                            name: 'divorced',
                            y: updatedSeriesWomensMarital[3], // Dynamic value for mulheres_65
                        },
                        {
                            name: 'widower',
                            y: updatedSeriesWomensMarital[4], // Dynamic value for mulheres_65
                        }

                    ]
                }]
            });

        }

        function updatePopulationCounters(popTotalValue, popSexRatioBybirth, popGrowthRate, populationDensity) {
            // Update the innerHTML of the counter elements with the provided values
            document.getElementById('total_population').innerHTML = popTotalValue;
            document.getElementById('sex_ratio_by_birth').innerHTML = popSexRatioBybirth;
            document.getElementById('population_growth_rate').innerHTML = popGrowthRate;
            document.getElementById('population_density').innerHTML = populationDensity;
        }

        function updatedPopulationDependencyRatio(totalDependencyRatio, youthDependencyRatioZeroToFourteen,
            elderlyDependencyRatioSixtyFiveAbove) {
            // Convert strings to numbers
            totalDependencyRatio = parseFloat(totalDependencyRatio);
            youthDependencyRatioZeroToFourteen = parseFloat(youthDependencyRatioZeroToFourteen);
            elderlyDependencyRatioSixtyFiveAbove = parseFloat(elderlyDependencyRatioSixtyFiveAbove);
            // total Dependency Ratio Rate Bar charts of the Total population
            Highcharts.chart('totalDependencyRatioRate', {
                chart: {
                    type: 'column',

                },
                title: {
                    text: 'Total Dependency rate by sex and age groups by District',
                    align: 'left'
                },
                xAxis: {
                    categories: ['Dependency', 'Men', 'Women'],
                    crosshair: true,
                    accessibility: {
                        description: 'Districts'
                    }
                },
                plotOptions: {
                    column: {
                        pointPadding: 0.2,
                        borderWidth: 0
                    }
                },
                credits: {
                    enabled: false // Hide the credits
                },
                series: [{
                        name: 'Total Ratio ',
                        data: [totalDependencyRatio]
                    },
                    {
                        name: 'Youth Ratio (0-14)',
                        data: [youthDependencyRatioZeroToFourteen]
                    },
                    {
                        name: 'Elderly Ratio (65+)',
                        data: [elderlyDependencyRatioSixtyFiveAbove]
                    }
                ]
            });
        }

        // total Illiteracy Rate bar charts

        function updatedPopulation_total_Illiteracy_Rate(TotalIlliteracyRate, MenIlliteracyRate, woMenIlliteracyRate) {

            // Convert strings to numbers
            TotalIlliteracyRate = parseFloat(TotalIlliteracyRate);
            MenIlliteracyRate = parseFloat(MenIlliteracyRate);
            woMenIlliteracyRate = parseFloat(woMenIlliteracyRate);
            // total Dependency Ratio Rate Bar charts of the Total population
            Highcharts.chart('totalIlliteracyRate', {
                chart: {
                    type: 'column',

                },
                title: {
                    text: 'Illiteracy Rate by Sex and age groups by District',
                    align: 'left'
                },
                xAxis: {
                    categories: ['Illiteracy', 'Men', 'Women'],
                    crosshair: true,
                    accessibility: {
                        description: 'Districts'
                    }
                },
                plotOptions: {
                    column: {
                        pointPadding: 0.2,
                        borderWidth: 0
                    }
                },
                credits: {
                    enabled: false // Hide the credits
                },
                series: [{
                        name: 'Total Illiteracy Rate',
                        data: [TotalIlliteracyRate]
                    },
                    {
                        name: 'Men Illiteracy Rate',
                        data: [MenIlliteracyRate]
                    },
                    {
                        name: 'Women Illiteracy Rate',
                        data: [woMenIlliteracyRate]
                    }
                ]
            });
        }

        function removeEmptyMessage() {
            // Get all elements with class 'emptyMessage' and set their display property to 'none'
            var emptyMessages = document.getElementsByClassName('emptyMessage');
            for (var i = 0; i < emptyMessages.length; i++) {
                emptyMessages[i].style.display = 'none';
            }
        }

    </script>
@endsection
