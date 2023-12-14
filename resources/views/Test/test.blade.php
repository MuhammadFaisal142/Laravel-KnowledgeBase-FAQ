@extends('layouts.main')

@section('content')
<div class="container padding-20">

  <div class="row">
    <div class="col-md-4">
      <div class="row justify-content-center">
        <div class="col-md-4 padding">
          <button class="btn btn-color btn-block margin-botton">Output Area</button>
        </div>
        <div class="col-md-4 padding">
          <button class="btn btn-color btn-block margin-botton">Ward</button>
        </div>
        <div class="col-md-4 padding">
          <button class="btn btn-color btn-block margin-botton">Constituency</button>
        </div>
      </div>
      <div class="row" class="h011btn" style="display:grid; width:-webkit-fill-available;">
        <p><b class="h011btn">Map - word</b></p>
        <p><b class="h011btn">Year</b></p>

        <div class="col-md-4 ">
          <button class="btn btn-block margin-botton btn-sm " style="color:white; background-color: #E9ADBF;">2011</button>
        </div>
        <div class="col-md-4 ">
          <button class="btn btn-color btn-block margin-botton btn-sm">2021</button>
        </div>
      </div>
      <div class="highChartMap"></div>
    </div>

    <div class="col-md-8">
      <div class="chart1"></div>
      <div class="chart2"></div>
      <div class="chart3"></div>

      <div class="row justify-content-center">
        <div class="col-md-4 padding">
          <button class="btn btn-color btn-block margin-botton">Show Occupancy of Rooms</button>
        </div>
        <div class="col-md-4 padding">
          <button class="btn btn-color btn-block margin-botton">Show Number of Rooms</button>
        </div>
        <div class="col-md-4 padding">
          <button class="btn btn-color1 btn-block margin-botton">More Data<i class="fa fa-arrow-up"></i></button>
        </div>
      </div>

      <div class="row justify-content-center">
        <div class="col-md-6">
          <div class="chart-title">
            <h3>Rooms</h3>
          </div>
          <div class="newPieChart donutChart"></div>
        </div>

        <div class="col-md-6">
          <div class="chart-title">
            <h3>Bedrooms</h3>
          </div>
          <div class="newPieChart donutChart"></div>
        </div>
      </div>
    </div>
  </div>
</div>

<style>
  .btn-color {
    background: #D73564;
    color: white;
  }
  .highcharts-text-outline{
    /* font-size: 9.0rem; */
  }

  .chart-title {
    text-align: left;
    padding-left: 10px;
    /* Adjust the padding as needed */
  }

  .chart-title h3 {
    margin-bottom: 0;
    color: #B5969C;
    /* Remove default margin for h3 */
  }
  .h011btn {
    color: #B5969C;
    /* Remove default margin for h3 */
  }

  .btn-color1 {
    background: #834495;
    color: white;
  }

  .highcharts-background {
    opacity: 0;
  }

  .padding {
    padding: 0 5px;
  }

  .margin-botton {
    margin-bottom: 10px;

  }

  .margin-botton i {
    margin-left: 5px;
  }

  .apexcharts-legend {
    left: 19px !important;
  }

  .apexcharts-legend-marker {
    border-radius: 7px !important;
  }

  g line,
  .apexcharts-menu-icon,
  .apexcharts-xaxis-texts-g,
  .apexcharts-yaxis,
  .highcharts-button-symbol {
    display: none;
  }

  .highcharts-title {
    text-align: left !important;
    font-size: 2rem !important;
    transform: translateX(0) !important;
    display: none !important;
  }
</style>
<script>
  var options = {
    series: [{
      name: 'Marine Sprite',
      data: [44]
    }, {
      name: 'Striking Calf',
      data: [53]
    }, {
      name: 'Tank Picture',
      data: [12]
    }, {
      name: 'Bucket Slope',
      data: [9]
    }, {
      name: 'Reborn Kid',
      data: [25]
    }],
    chart: {
      type: 'bar',
      height: 140,
      stacked: true,
      stackType: '100%'

    },
    plotOptions: {
      bar: {
        horizontal: true,
      },

    },
    stroke: {
      width: 1,
      colors: ['#fff']
    },
    title: {
      text: 'Tenure of household as a percentage of the number of households'
    },


    tooltip: {
      y: {
        formatter: function(val) {
          return val + "K"
        }
      }
    },
    fill: {
      opacity: 1

    },
    legend: {
      position: 'top',
      horizontalAlign: 'left',
      offsetX: 40
    }
  };

  var chart1 = new ApexCharts(document.querySelector(".chart1"), options);
  var chart2 = new ApexCharts(document.querySelector(".chart2"), options);
  var chart3 = new ApexCharts(document.querySelector(".chart3"), options);

  chart1.render();
  chart2.render();
  chart3.render();
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
