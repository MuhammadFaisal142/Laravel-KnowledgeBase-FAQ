@extends('layouts.main')
<style>
    .district-label {
        font-size: 12px;
        font-weight: bold;
        white-space: nowrap;
    }
</style>
@section('content')
    <!-- START Map -->
    <div class="container mt-10">
        <div class="row">
            <div class="col-md-6">
                <div class="box box-solid box-primary">
                    <div class="box-header with-border">
                        <h4 class="box-title">
                            {{ trans('global.mozambique-map') }}
                            <div class="btn-group ml-10">
                                <a href="{{ route('growthRate') }}"
                                    class="btn btn-info btn-primary text-white">{{ trans('global.national') }}</a>
                                <button type="button" class="btn btn-info dropdown-toggle text-white" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                    {{ trans('global.all_provinces') }}
                                </button>
                                <div class="dropdown-menu">
                                    <!-- Add your province options here -->
                                    <a class="dropdown-item" href="{{ url('/provinceGrowthRate/Niassa') }}">Niassa</a>
                                    <a class="dropdown-item" href="{{ url('/provinceGrowthRate/Tete') }}">Tete</a>
                                    <a class="dropdown-item" href="{{ url('/provinceGrowthRate/Nampula') }}">Nampula</a>
                                    <a class="dropdown-item" href="{{ url('/provinceGrowthRate/Cabo Delgado') }}">Cabo
                                        Delgado</a>
                                    <a class="dropdown-item" href="{{ url('/provinceGrowthRate/Zambezia') }}">Zambezia</a>
                                    <a class="dropdown-item" href="{{ url('/provinceGrowthRate/Manica') }}">Manica</a>
                                    <a class="dropdown-item" href="{{ url('/provinceGrowthRate/Sofala') }}">Sofala</a>
                                    <a class="dropdown-item"
                                        href="{{ url('/provinceGrowthRate/Inhambane') }}">Inhambane</a>
                                    <a class="dropdown-item" href="{{ url('/provinceGrowthRate/Gaza') }}">Gaza</a>
                                    <a class="dropdown-item" href="{{ url('/provinceGrowthRate/Maputo Cidade') }}">Maputo
                                        Cidade </a>
                                    <a class="dropdown-item"
                                        href="{{ url('/provinceGrowthRate/Maputo Provincia') }}">Maputo
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

        // Update the original GeoJSON data with the filtered features
        mozambiquefulldistricts.features = filteredFeatures;

        var translations = {
            total_population: '{{ __('global.total_population') }}',
            men_population: '{{ __('global.mens_population') }}',
            women_population: '{{ __('global.womens_population') }}',
            Growth_Rate: '{{ __('global.growth_rate') }}',

        };




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


        L.geoJson(mozambiquefulldistricts, {
            style: style
        }).addTo(map2);

        // Define global variable to track the highlighted layer
        var highlightedLayer;

        function highlightFeature(e) {
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
        var geojson;
        // ... our listeners
        geojson = L.geoJson(mozambiquefulldistricts);

        function zoomToFeature(e) {
            map2.fitBounds(e.target.getBounds());
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


        geojson = L.geoJson(mozambiquefulldistricts, {
            style: style,
            onEachFeature: onEachFeature
        }).addTo(map2);

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
        geojson.on('mouseover', function() {
            map2.scrollWheelZoom.enable();
        });

        geojson.on('mouseout', function() {
            map2.scrollWheelZoom.disable();
        });
    </script>
@endsection
