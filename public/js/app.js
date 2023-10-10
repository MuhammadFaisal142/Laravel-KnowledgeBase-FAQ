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
// this chart for two  pie chart
document.addEventListener("DOMContentLoaded", function() {
    const canvasElements = document.getElementsByClassName('myChart');

    Array.from(canvasElements).forEach(function(canvas) {
        new Chart(canvas, {
            type: 'doughnut',
            data: {
                labels: [
                    'Red',
                    'Blue',
                    'Yellow'
                ],
                datasets: [{
                    label: 'My First Dataset',
                    data: [300, 50, 100],
                    backgroundColor: [
                        'rgb(255, 99, 132)',
                        'rgb(54, 162, 235)',
                        'rgb(255, 205, 86)'
                    ],
                    hoverOffset: 4
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    });
});

// this code for maping chart of pakistan

(async () => {

const topology = await fetch(
'https://code.highcharts.com/mapdata/countries/pk/pk-all.topo.json'
).then(response => response.json());

// Prepare demo data. The data is joined to map using value of 'hc-key'
// property by default. See API docs for 'joinBy' for more info on linking
// data and map.
const data = [
['pk-sd', 10], ['pk-ba', 11], ['pk-jk', 12], ['pk-na', 13],
['pk-nw', 14], ['pk-ta', 15], ['pk-is', 16], ['pk-pb', 17]
];

// Create the chart
Highcharts.mapChart('highChartMap', {
chart: {
map: topology
},

title: {
text: 'Map ward'
},

subtitle: {
text: 'Source map: <a href="http://code.highcharts.com/mapdata/countries/pk/pk-all.topo.json">Pakistan</a>'
},

mapNavigation: {
enabled: true,
buttonOptions: {
    verticalAlign: 'bottom'
}
},

colorAxis: {
min: 0
},

series: [{
data: data,
name: 'Random data',
states: {
    hover: {
        color: '#BADA55'
    }
},
dataLabels: {
    enabled: true,
    format: '{point.name}'
}
}]
});

})();

// this code for horizontal line chart
var options = {
    series: [{
    name: 'Marine Sprite',
    data: [44, 55, 41, 37, 22, 43, 21]
  }, {
    name: 'Striking Calf',
    data: [53, 32, 33, 52, 13, 43, 32]
  }, {
    name: 'Tank Picture',
    data: [12, 17, 11, 9, 15, 11, 20]
  }, {
    name: 'Bucket Slope',
    data: [9, 7, 5, 8, 6, 9, 4]
  }, {
    name: 'Reborn Kid',
    data: [25, 12, 19, 32, 25, 24, 10]
  }],
    chart: {
    type: 'bar',
    height: 350,
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
      formatter: function (val) {
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

  var chart = new ApexCharts(document.querySelector("#chart"), options);
  chart.render();


