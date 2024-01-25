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
          <button class="btn btn-block btn-color1  margin-botton btn-sm " style="color:white; ">2011</button>
        </div>
        <div class="col-md-4 ">
          <button class="btn btn-color btn-block margin-botton btn-sm">2021</button>
        </div>
      </div>
      <div class="highChartMaptest"></div>
    </div>

    <div class="col-md-8">
        <img src="{{ asset('images/testpic.jpg') }}" alt="Test Picture" style="width: 100%; height: auto;">
    </div>


    </div>
  </div>
</div>

<style>
  .btn-color {
    background: #658EA4;
    color: white;
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
    background: #658EA4;
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



  (async () => {
    const topology = await fetch(
      'https://code.highcharts.com/mapdata/countries/mz/mz-all.topo.json'
    ).then(response => response.json());

    const data = [
      ['mz-nm', 10], ['mz-in', 11], ['mz-mp', 12], ['mz-za', 13],
      ['mz-7278', 14], ['mz-te', 15], ['mz-mn', 16], ['mz-cd', 17],
      ['mz-ns', 18], ['mz-ga', 19], ['mz-so', 20]
    ];

    // Find all elements with the "highChartMap" class and initialize a chart for each one.
    const chartElements = document.querySelectorAll('.highChartMaptest');

    chartElements.forEach(element => {
      Highcharts.mapChart(element, {
        chart: {
          map: topology
        },
        title: {
          text: 'Map ward'
        },
        subtitle: {
          text: 'Source map: <a href="http://code.highcharts.com/mapdata/countries/mz/mz-all.topo.json">Mozambique</a>'
        },
        mapNavigation: {
          enabled: true,
          buttonOptions: {
            verticalAlign: 'bottom'
          }
        },
        colorAxis: {
          min: 0,
          // Change the default map color to a light blue shade
          minColor: '#658EA4',
          maxColor: '#658EA4' // Adjust as needed for darker/lighter shades
        },
        series: [{
          data: data,
          name: 'Random data',
          states: {
            hover: {
              color: '#658EA4' // Color on hover
            }
          },
          dataLabels: {
            enabled: true,
            format: '{point.name}'
          }
        }]
      });
    });
  })();

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
