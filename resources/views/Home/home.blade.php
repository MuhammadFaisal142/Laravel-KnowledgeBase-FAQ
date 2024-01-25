@extends('layouts.main')

@section('content')
    <div class="container padding-20">

        <div class="row">
            <div class="col-md-4">
                <div class="row justify-content-center">
                    <div class="col-md-4 padding">
                        <button class="btn btn-color btn-block margin-botton">{{ trans('global.output_area') }}</button>
                    </div>
                    <div class="col-md-4 padding">
                        <button class="btn btn-color btn-block margin-botton">{{ trans('global.ward') }}</button>
                    </div>
                    <div class="col-md-4 padding">
                        <button class="btn btn-color btn-block margin-botton">{{ trans('global.constituency') }}</button>
                    </div>
                    <div class="col-md-4 padding">
                        <a href="{{ route('home') }}"
                            class="btn btn-color btn-block margin-botton">{{ trans('global.national') }}</a>
                    </div>

                    <div class="col-md-4 padding">
                        <!-- Add a dropdown button with a default value 'National' -->
                        <div class="dropdown">
                            <button class="btn btn-color btn-block  dropdown-toggle" type="button" id="provinceDropdown"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                {{ trans('global.all_provinces') }}<i class="fa fa-arrow-down fa-sm ml-5"
                                    style="margin-left: 4px"></i>
                            </button>

                            <!-- Provide a list of static provinces as dropdown items -->
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                <li><a class="dropdown-item" href="{{ url('/province/Niassa') }}">Niassa</a></li>
                                <li><a class="dropdown-item" href="{{ url('/province/Tete') }}">Tete</a></li>
                                <li><a class="dropdown-item" href="{{ url('/province/Nampula') }}">Nampula</a></li>
                                <li><a class="dropdown-item" href="{{ url('/province/Cabo Delgado') }}">Cabo Delgado</a>
                                </li>
                                <li><a class="dropdown-item" href="{{ url('/province/Zambezia') }}">Zambezia</a></li>
                                <li><a class="dropdown-item" href="{{ url('/province/Manica') }}">Manica</a></li>
                                <li><a class="dropdown-item" href="{{ url('/province/Sofala') }}">Sofala</a></li>
                                <li><a class="dropdown-item" href="{{ url('/province/Inhambane') }}">Inhambane</a></li>
                                <li><a class="dropdown-item" href="{{ url('/province/Gaza') }}">Gaza</a></li>
                                <li><a class="dropdown-item" href="{{ url('/province/Maputo Cidade') }}">Maputo Cidade </a>
                                </li>
                                <li><a class="dropdown-item" href="{{ url('/province/Maputo Provincia') }}">Maputo
                                        Provincia</a></li>
                                <!-- Add more provinces as needed -->
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row" class="h011btn" style="display:grid; width:-webkit-fill-available;">
                    <p><b class="h011btn">{{ trans('global.map_word') }}</b></p>
                    <p><b class="h011btn">{{ trans('global.year') }}</b></p>

                    <div class="col-md-4 ">
                        <button class="btn btn-block margin-botton btn-sm "
                            style="color:white; background-color: #E9ADBF;">2011</button>
                    </div>
                    <div class="col-md-4 ">
                        <button class="btn btn-color btn-block margin-botton btn-sm">2021</button>
                    </div>
                </div>
                <div id="map2"></div>
            </div>

            <div class="col-md-8">
                <div class="chart1"></div>
                <div class="chart2"></div>
                <div class="chart3"></div>

                <div class="row justify-content-center">
                    <div class="col-md-4 padding">
                        <button
                            class="btn btn-color btn-block margin-botton">{{ trans('global.show_occupancy_of_rooms') }}</button>
                    </div>
                    <div class="col-md-4 padding">
                        <button
                            class="btn btn-color btn-block margin-botton">{{ trans('global.show_number_of_rooms') }}</button>
                    </div>
                    <div class="col-md-4 padding">
                        <button class="btn btn-color1 btn-block margin-botton">{{ trans('global.more_data') }}<i
                                class="fa fa-arrow-up"></i></button>
                    </div>
                </div>

                <div class="row justify-content-center">
                    <div class="col-md-6">
                        <div class="chart-title">
                            <h3>{{ trans('global.rooms') }}</h3>
                        </div>
                        <div class="newPieChart donutChart"></div>
                    </div>

                    <div class="col-md-6">
                        <div class="chart-title">
                            <h3>{{ trans('global.bedrooms') }}</h3>
                        </div>
                        <div class="newPieChart donutChart"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>



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
                return [-25.50, 33.00];

            // Add more cases for other provinces as needed
            default:
                // Default coordinates if province is not found
                return [-19.00, 34.00];
        }
            // You need to provide actual coordinates for each province
        }

        // Mozambiquie  chart javascripts
        function getColor(d) {
            return d < 1000 ? '#B5969C' : '#B5969C';
        }

        function style(feature) {
            const density = feature.properties.Pop_Total; // Make sure this property name matches your data
            // console.log("Total Population: ", density); // Debug statement, check the Total Population values in the console
            return {
                fillColor: getColor(density),
                weight: 2,
                opacity: 1,
                color: 'white',
                dashArray: '3',
                fillOpacity: 0.7
            };
        }

        var map2;

if (desiredProvince) {
    // If a specific province is selected, set the map view based on its coordinates
    const provinceCoordinates = getProvinceCoordinates(desiredProvince);
    map2 = L.map('map2').setView(provinceCoordinates, 6.5);
} else {
    // If no specific province is selected, set the default view
    map2 = L.map('map2').setView([-19.00, 34.00], 5);
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
            var layer = e.target;

            if (highlightedLayer && highlightedLayer !== layer) {
                // Reset the style of the previous highlighted layer
                geojson.resetStyle(highlightedLayer);
            }

            highlightedLayer = layer;

            layer.setStyle({
                weight: 5,
                color: '#666',
                dashArray: '',
                fillOpacity: 0.7
            });

            layer.bringToFront();
            var id_of_districts = layer.feature.properties.id;
            // console.log(id_of_districts);


            var dataFromServer = @json($population_data); // Convert PHP array to JSON

            // Filter data to include only records where id is equal to id_of_districts
            var filteredData = dataFromServer.filter(function(record) {
                return record.id === id_of_districts;
            });

            // Extract the "Pop_Total" value from the filtered data
            var popID = filteredData[0].id;
            var popTotalValue = filteredData[0].Pop_Total;
            var popDistrictName = filteredData[0].District;
            var popWomenName = filteredData[0].Pop_mulheres;
            var popMenName = filteredData[0].Pop_homens;

            // Print the extracted values in the console
            // console.log("Pop_ID: " + popID );
            // console.log("Pop_Total: " + popTotalValue);
            // console.log("District Name: " + popDistrictName);
            // console.log("Population women: " + popWomenName);
            // console.log("Population men: " + popMenName);

            // Create and show the popup with district information
            var popupContent =
                '<b>' + popDistrictName + '</b><br/>' +
                translations.total_population + ' : ' + popTotalValue + '<br/>' +
                translations.men_population + ' : ' + popMenName + '<br/>' +
                translations.women_population + ' : ' + popWomenName + '<br/>';
            layer.bindPopup(popupContent).openPopup();
        }



        function resetHighlight(e) {
            if (highlightedLayer) {
                geojson.resetStyle(highlightedLayer);
            }
            highlightedLayer = null;
            // info.update();
        }
        var geojson;
        // ... our listeners
        geojson = L.geoJson(mozambiquefulldistricts);

        function zoomToFeature(e) {
            map2.fitBounds(e.target.getBounds());
        }

        function onEachFeature(feature, layer) {
            layer.on({
                mouseover: highlightFeature,
                mouseout: resetHighlight,
                click: zoomToFeature
            });
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

        };
    </script>
@endsection

{{-- @section('about')
    <div class="container-fluid featured-area-grey padding-30">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="fb-heading">

                    </div>
                </div>
                <div class="col-md-4">
                    <div class="fb-heading">

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection --}}
