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
      </div>
      <div class="row" class="h011btn" style="display:grid; width:-webkit-fill-available;">
        <p><b class="h011btn">{{ trans('global.map_word') }}</b></p>
        <p><b class="h011btn">{{ trans('global.year') }}</b></p>

        <div class="col-md-4 ">
          <button class="btn btn-block margin-botton btn-sm " style="color:white; background-color: #E9ADBF;">2011</button>
        </div>
        <div class="col-md-4 ">
          <button class="btn btn-color btn-block margin-botton btn-sm">2021</button>
        </div>
      </div>
      <div  id="map2"></div>
      {{-- <div  style="margin-top:5px;"></div> --}}
    </div>

    <div class="col-md-8">
      <div class="chart1"></div>
      <div class="chart2"></div>
      <div class="chart3"></div>

      <div class="row justify-content-center">
        <div class="col-md-4 padding">
          <button class="btn btn-color btn-block margin-botton">{{ trans('global.show_occupancy_of_rooms') }}</button>
        </div>
        <div class="col-md-4 padding">
          <button class="btn btn-color btn-block margin-botton">{{ trans('global.show_number_of_rooms') }}</button>
        </div>
        <div class="col-md-4 padding">
          <button class="btn btn-color1 btn-block margin-botton">{{ trans('global.more_data') }}<i class="fa fa-arrow-up"></i></button>
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

var map2 = L.map('map2').setView([-19.00, 34.00], 5);

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
    var filteredData = dataFromServer.filter(function (record) {
        return record.id === id_of_districts;
    });

    // Extract the "Pop_Total" value from the filtered data
    var popID = filteredData[0].id;
    var popTotalValue = filteredData[0].Pop_Total;
    var popDistrictName = filteredData[0].District;
    var popWomenName = filteredData[0].Pop_mulheres;
    var popMenName = filteredData[0].Pop_homens;

    // Print the extracted values in the console
    console.log("Pop_ID: " + popID );
    console.log("Pop_Total: " + popTotalValue);
    console.log("District Name: " + popDistrictName);
    console.log("Population women: " + popWomenName);
    console.log("Population men: " + popMenName);

     // Create and show the popup with district information
     var popupContent =
        '<b>' + popDistrictName + '</b><br/>'+
        translations.total_population + ' : ' + popTotalValue + '<br/>' +
        translations.men_population   + ' : ' + popMenName    + '<br/>' +
        translations.women_population + ' : ' + popWomenName  + '<br/>';
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

info.onAdd = function (map2) {
    this._div = L.DomUtil.create('div', 'info'); // create a div with a class "info"
    this.update();
    return this._div;
};


var translations = {
        marine_sprite: '{{ __("global.marine_sprite") }}',
        striking_calf: '{{ __("global.striking_calf") }}',
        tank_picture: '{{ __("global.tank_picture") }}',
        bucket_slope: '{{ __("global.bucket_slope") }}',
        reborn_kid: '{{ __("global.reborn_kid") }}',
        tenure_household_percentage: '{{ __("global.tenure_household_percentage") }}',

        total_population: '{{ __("global.total_population") }}',
        men_population: '{{ __("global.mens_population") }}',
        women_population: '{{ __("global.womens_population") }}',

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
