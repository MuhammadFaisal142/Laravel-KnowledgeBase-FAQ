@extends('layouts.main')
@section('content')
    <div class="filters-holder mt-2">
        <div class="filters-header">
            <div class="left">
                <img src="{{ asset('theme_of_mozambique/img/filters.png') }}" alt="">
                <span>{{ trans('global.filter') }}</span>
            </div>
            <div class="plus-icon">+</div>
        </div>
        <div class="form-holder">
            <div class="row">
                {{-- <div class="col-md-3">
                <label class="custom-select" for="styledSelect1">
                    <select id="styledSelect1" name="options">
                        <option value="">
                            {{ trans('global.national') }}
                        </option>
                        <option value="">
                            {{ trans('global.all_districts') }}
                        </option>
                    </select>
                </label>
            </div> --}}
                <div class="col-md-3">
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
                        </select>
                    </label>
                </div>
                {{-- <div class="col-md-3">
                <label class="custom-select" for="styledSelect3">
                    <select id="styledSelect3" name="options">
                        <option value="">
                            Filter Three
                        </option>
                    </select>
                </label>
            </div> --}}
                <div class="col-md-2">
                    <input type="submit" value="{{ trans('global.search') }}" class="search-btn" onclick="performSearch()">
                </div>
            </div>
        </div>
    </div>
    <div class="content-holdder">
        <div class="row">
            <div class="col">
                <div class="counter-box male-population">
                    <div class="counter" id="total_population">2.7 M</div>
                    <h2>{{ trans('global.total_population') }}</h2>
                </div>
            </div>
            <div class="col">
                <div class="counter-box female-population">
                    <div class="counter" id="sex_ratio_by_birth">0.0</div>
                    <h2>{{ trans('global.Sex_Ratio_By_Birth') }}</h2>
                </div>
            </div>
            <div class="col">
                <div class="counter-box total-population">
                    <div class="counter" id="population_growth_rate">105</div>
                    <h2>{{ trans('global.population_growth') }}</h2>
                </div>
            </div>
        </div>
    </div>


    <div class="graphs-row">
        <div class="row">
            <div class="col-md-12">
                <div class="map-holder">
                    <h2>{{ trans('global.mozambique-map') }}</h2>
                    <div class="box-body">
                        <div id="map2" style="height: 600px"></div>
                    </div>
                </div>
            </div>
            {{-- <div class="col-md-4">
                <div class="chart-visual totals">
                    <h2> <span><img src="{{ asset('theme_of_mozambique/img/male.png') }}" alt=""></span>Total
                        Population</h2>
                    <div class="chart-holder" id="maleTotal"></div>
                </div>
                <div class="chart-visual totals">
                    <h2> <span><img src="{{ asset('theme_of_mozambique/img/total-population.png') }}"
                                alt=""></span>Total Population</h2>
                    <div class="chart-holder" id="femaleTotal"></div>
                </div>
            </div> --}}
        </div>
    </div>


    <script>
        var translations = {
            total_population: '{{ __('global.total_population') }}',
            men_population: '{{ __('global.mens_population') }}',
            women_population: '{{ __('global.womens_population') }}',
            Growth_Rate: '{{ __('global.growth_rate') }}',

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
            // console.log(d);
            // grades = [0,50000,70000,100000,200000,350000,400000,600000],
            // ic ko pahly set karu
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
                zoom: 5,
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

        // Define global variable to track the highlighted layer
        var highlightedLayer;

        function highlightFeature(e) {
            // console.log(e);
            var layer = e.target;

            // Reset the style of all layers to white
            geojson.eachLayer(function(otherLayer) {
                geojson.resetStyle(otherLayer);
            });

            layer.setStyle({
                weight: 4,
                color: '#666',
                dashArray: '',
                fillOpacity: 0.7
            });

            layer.bringToFront();
        }

        function resetHighlight(e) {
            geojson.resetStyle(e.target);
            // info.update();
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

            const popID = filteredData[0].id;

            // Three box Total Population
            var popTotalValue = filteredData[0].Pop_Total;
            // Three box Growth Rate Population
            var popGrowthRate = filteredData[0].Taxa_Cresc_Pop;
            // Three box Growth Rate Population
            var popSexRatioBybirth = 0.0;
            updatePopulationCounters(popTotalValue, popSexRatioBybirth, popGrowthRate);


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
                var popGrowthRate = filteredData[0].Taxa_Cresc_Pop;


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
                layer1.bindTooltip(nameOfDistrict + ' ' + translations.Growth_Rate + ':' + popGrowthRate, {
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
        var info = L.control();

        info.onAdd = function(map2) {
            this._div = L.DomUtil.create('div', 'info'); // create a div with a class "info"
            this.update();
            return this._div;
        };


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
            console.log("This is desired Province : " + desiredProvince);

            // Update the map based on the selected province
            updateMap();
            legend.addTo(map2);
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
                    zoom: 6.5,
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

        function updatePopulationCounters(popTotalValue, popSexRatioBybirth, popGrowthRate) {
            // Update the innerHTML of the counter elements with the provided values
            document.getElementById('total_population').innerHTML = popTotalValue;
            document.getElementById('sex_ratio_by_birth').innerHTML = popSexRatioBybirth;
            document.getElementById('population_growth_rate').innerHTML = popGrowthRate;
        }
    </script>
@endsection
