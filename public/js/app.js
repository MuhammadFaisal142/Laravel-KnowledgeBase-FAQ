function myFunction() {
    document.getElementsByClassName("topnav")[0].classList.toggle("responsive");
}

/* COMMENTS LAST BORDER REMOVAL */
$(function() {
  var comments = $('div.article-comment-top');
  var last = comments.last();
  last.css({ borderBottom : 'none' });
});



// test chart javascripts

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
    const chartElements = document.querySelectorAll('.highChartMap');

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
          minColor: '#B5969C',
          maxColor: '#B5969C' // Adjust as needed for darker/lighter shades
        },
        series: [{
          data: data,
          name: 'Random data',
          states: {
            hover: {
              color: '#D73564' // Color on hover
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



// this code for horizontal line chart


// new pie chart js
// Create the chart
var chartElements = document.getElementsByClassName('newPieChart');

var totalRoomsValue1 = 5;
var roomsPrice1 = '130.5k';
var yValue1 = 30.0;

var totalRoomsValue2 = 6;
var roomsPrice2 = '25.7k';
var yValue2 = 6.1;

var totalRoomsValue3 = 3;
var roomsPrice3 = '4.5k';
var yValue3 = 20;

var totalRoomsValue4 = 2;
var roomsPrice4 = '52.6k';
var yValue4 = 12.4;

var totalRoomsValue5 = 6;
var roomsPrice5 = '78.6k';
var yValue5 = 15.06;

var totalRoomsValue6 = 4;
var roomsPrice6 = '115.2k';
var yValue6 = 27.06;

var roomsPrice5 = '1.1k'; // Change this value as needed
for (var i = 0; i < chartElements.length; i++) {
    Highcharts.chart(chartElements[i], {
        chart: {
            type: 'pie'
        },


    plotOptions: {
        series: {
            borderRadius: 5,
            dataLabels: [{
                enabled: true,
                distance: 15,
                format: '{point.name}'
            }, {
                enabled: true,
                distance: '-30%',
                filter: {
                    property: 'percentage',
                    operator: '>',
                    value: 5
                },
                format: '{point.y:.1f}%',
                style: {
                    fontSize: '0.9em',
                    textOutline: 'none'
                }
            }]
        }
    },

    tooltip: {
        headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
        pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y:.2f}%</b> of total<br/>'
    },

    series: [
        {
            name: 'Rooms',
            colorByPoint: true,
            data: [{
                totalRooms: totalRoomsValue1,
                name: totalRoomsValue1 + ' rooms ' + roomsPrice1  + yValue1 ,
                y: yValue1,
                drilldown: 'Rooms'
            },
            {
                totalRooms: totalRoomsValue2,
                name: totalRoomsValue2 + ' rooms ' + roomsPrice2  + yValue2 ,
                y: yValue2,
                drilldown: 'Rooms'
            },
            {
                totalRooms: totalRoomsValue3,
                name: totalRoomsValue3 + ' rooms ' + roomsPrice3  + yValue3 ,
                y: yValue3,
                drilldown: 'Rooms'
            },
            {
                totalRooms: totalRoomsValue4,
                name: totalRoomsValue4 + ' rooms ' + roomsPrice4  + yValue4 ,
                y: yValue4,
                drilldown: 'Rooms'
            },
            {
                totalRooms: totalRoomsValue5,
                name: totalRoomsValue5 + ' rooms ' + roomsPrice5  +" "+ yValue5 ,
                y: yValue5,
                drilldown: 'Rooms'
            },
            {
                totalRooms: totalRoomsValue6,
                name: totalRoomsValue6 + ' rooms ' + roomsPrice6  + yValue6 ,
                y: yValue6,
                drilldown: 'Rooms'
            }
            ]
        }
    ],
    drilldown: {
        series: [
            {
                name: 'Rooms',
                id: 'Rooms',
                data: [
                    [
                        'v97.0',
                        36.89
                    ],
                    [
                        'v96.0',
                        18.16
                    ],
                    [
                        'v95.0',
                        0.54
                    ],
                    [
                        'v94.0',
                        0.7
                    ],
                    [
                        'v93.0',
                        0.8
                    ],
                    [
                        'v92.0',
                        0.41
                    ],
                    [
                        'v91.0',
                        0.31
                    ],
                    [
                        'v90.0',
                        0.13
                    ],
                    [
                        'v89.0',
                        0.14
                    ],
                    [
                        'v88.0',
                        0.1
                    ],
                    [
                        'v87.0',
                        0.35
                    ],
                    [
                        'v86.0',
                        0.17
                    ],
                    [
                        'v85.0',
                        0.18
                    ],
                    [
                        'v84.0',
                        0.17
                    ],
                    [
                        'v83.0',
                        0.21
                    ],
                    [
                        'v81.0',
                        0.1
                    ],
                    [
                        'v80.0',
                        0.16
                    ],
                    [
                        'v79.0',
                        0.43
                    ],
                    [
                        'v78.0',
                        0.11
                    ],
                    [
                        'v76.0',
                        0.16
                    ],
                    [
                        'v75.0',
                        0.15
                    ],
                    [
                        'v72.0',
                        0.14
                    ],
                    [
                        'v70.0',
                        0.11
                    ],
                    [
                        'v69.0',
                        0.13
                    ],
                    [
                        'v56.0',
                        0.12
                    ],
                    [
                        'v49.0',
                        0.17
                    ]
                ]
            },
            {
                name: 'Rooms',
                id: 'Rooms',
                data: [
                    [
                        'v15.3',
                        0.1
                    ],
                    [
                        'v15.2',
                        2.01
                    ],
                    [
                        'v15.1',
                        2.29
                    ],
                    [
                        'v15.0',
                        0.49
                    ],
                    [
                        'v14.1',
                        2.48
                    ],
                    [
                        'v14.0',
                        0.64
                    ],
                    [
                        'v13.1',
                        1.17
                    ],
                    [
                        'v13.0',
                        0.13
                    ],
                    [
                        'v12.1',
                        0.16
                    ]
                ]
            },
            {
                name: 'Rooms',
                id: 'Rooms',
                data: [
                    [
                        'v97',
                        6.62
                    ],
                    [
                        'v96',
                        2.55
                    ],
                    [
                        'v95',
                        0.15
                    ]
                ]
            },
            {
                name: 'Rooms',
                id: 'Rooms',
                data: [
                    [
                        'v96.0',
                        4.17
                    ],
                    [
                        'v95.0',
                        3.33
                    ],
                    [
                        'v94.0',
                        0.11
                    ],
                    [
                        'v91.0',
                        0.23
                    ],
                    [
                        'v78.0',
                        0.16
                    ],
                    [
                        'v52.0',
                        0.15
                    ]
                ]
            }
        ]
    }
    });
}
// new pie chart js end code
