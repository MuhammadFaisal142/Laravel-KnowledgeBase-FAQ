// //[Dashboard Javascript]

// //Project:	Uicod Admin - Responsive Admin Template
// //Primary use:   Used only for the main dashboard (index.html)

// $(function () {

//   'use strict';

// 	var options = {
//             chart: {
//                 width: 380,
//                 type: 'pie',
//             },
// 		    colors:['#145388', '#2a93d5', '#28a745', '#fcc525'],
//             labels: ['Retail', 'IT', 'Health', 'Education'],
//             series: [44, 55, 13, 43],
// 			legend: {
//                         position: 'bottom'
//                     },
//             responsive: [{
//                 breakpoint: 480,
//                 options: {
//                     chart: {
//                         width:250
//                     },
//                     legend: {
//                         position: 'bottom'
//                     }
//                 }
//             }]
//         }

//         var chart = new ApexCharts(
//             document.querySelector("#rev-chart1"),
//             options
//         );

//         chart.render();

// 	var options = {
//             chart: {
//                 width: 380,
//                 type: 'pie',
//             },
// 		    colors:['#00876C', '#00E7B9', '#0D8B70', '#04D2AB'],
//             labels: ['Class A', 'Class B', 'Class C', 'Class D'],
//             series: [15, 42, 36, 51],
// 			legend: {
//                         position: 'bottom'
//                     },
//             responsive: [{
//                 breakpoint: 480,
//                 options: {
//                     chart: {
//                         width: 250
//                     },
//                     legend: {
//                         position: 'bottom'
//                     }
//                 }
//             }]
//         }

//         var chart = new ApexCharts(
//             document.querySelector("#rev-chart2"),
//             options
//         );

//         chart.render();


// 		var options = {
//             chart: {
//                 width: 380,
//                 type: 'pie',
//             },
// 		    colors:['#664E9D', '#9985C8', '#513D82', '#8D72BC'],
//             labels: ['Ruby Mark', 'Johon', 'MG Clark', 'MCG Joi'],
//             series: [36, 19, 45, 29],
// 			legend: {
//                         position: 'bottom'
//                     },
//             responsive: [{
//                 breakpoint: 480,
//                 options: {
//                     chart: {
//                         width: 250
//                     },
//                     legend: {
//                         position: 'bottom'
//                     }
//                 }
//             }]
//         }

//         var chart = new ApexCharts(
//             document.querySelector("#rev-chart3"),
//             options
//         );

//         chart.render();


// 	// dash1
//     var dash1 = jQuery('#dash1')
// 	if (dash1.length > 0) {
// 		var options = {
// 			chart: {
// 				type: 'bar',
// 				width: 120,
// 				height: 50,
// 				sparkline: {
// 				  enabled: true
// 				}
// 			  },
// 			  colors:['#145388'],
// 			  plotOptions: {
// 				bar: {
// 				  columnWidth: '50%',
// 				}
// 			  },
// 			  series: [{
// 				data: [15, 55, 60, 69, 53, 35, 54]
// 			  }],
// 			  labels: [1, 2, 3, 4, 5, 6, 7, 8, 9, 10],
// 			  xaxis: {
// 				crosshairs: {
// 				  width: 1
// 				},
// 			  },
// 			  tooltip: {
// 				fixed: {
// 				  enabled: false
// 				},
// 				x: {
// 				  show: false
// 				},
// 				y: {
// 				  title: {
// 					formatter: function (seriesName) {
// 					  return ''
// 					}
// 				  }
// 				},
// 				marker: {
// 				  show: false
// 				}
// 			  },
// 			  responsive: [{
// 				breakpoint: 360,
// 				options: {
// 					chart: {
// 						width:60,
// 						height:60
// 					}
// 				},
// 			},{
// 				breakpoint: 480,
// 				options: {
// 					chart: {
// 						width:100,
// 						height:80
// 					}
// 				},
// 			}]
// 		}

// 	  var chart = new ApexCharts(
// 				document.querySelector("#dash1"),
// 				options
// 			);
// 			chart.render();
// 	   }

// 	   // dash2
// 		var dash2 = jQuery('#dash2')
// 	if (dash2.length > 0) {
// 		var options = {
// 			chart: {
// 				type: 'bar',
// 				width: 120,
// 				height: 50,
// 				sparkline: {
// 				  enabled: true
// 				}
// 			  },
// 			  colors:['#2a93d5'],
// 			  plotOptions: {
// 				bar: {
// 				  columnWidth: '50%',
// 				}
// 			  },
// 			  series: [{
// 				data: [15, 55, 60, 69, 53, 35, 54]
// 			  }],
// 			  labels: [1, 2, 3, 4, 5, 6, 7, 8, 9, 10],
// 			  xaxis: {
// 				crosshairs: {
// 				  width: 1
// 				},
// 			  },
// 			  tooltip: {
// 				fixed: {
// 				  enabled: false
// 				},
// 				x: {
// 				  show: false
// 				},
// 				y: {
// 				  title: {
// 					formatter: function (seriesName) {
// 					  return ''
// 					}
// 				  }
// 				},
// 				marker: {
// 				  show: false
// 				}
// 			  },
// 			  responsive: [{
// 				breakpoint: 360,
// 				options: {
// 					chart: {
// 						width:60,
// 						height:60
// 					}
// 				},
// 			},{
// 				breakpoint: 480,
// 				options: {
// 					chart: {
// 						width:100,
// 						height:80
// 					}
// 				},
// 			}]
// 		}

// 	  var chart = new ApexCharts(
// 				document.querySelector("#dash2"),
// 				options
// 			);
// 			chart.render();
// 	   }
// 	   // dash3
// 		var dash3 = jQuery('#dash3')
// 	if (dash3.length > 0) {
// 		var options = {
// 			chart: {
// 				type: 'bar',
// 				width: 120,
// 				height: 50,
// 				sparkline: {
// 				  enabled: true
// 				}
// 			  },
// 			  colors:['#b69329'],
// 			  plotOptions: {
// 				bar: {
// 				  columnWidth: '50%',
// 				}
// 			  },
// 			  series: [{
// 				data: [15, 55, 60, 69, 53, 35, 54]
// 			  }],
// 			  labels: [1, 2, 3, 4, 5, 6, 7, 8, 9, 10],
// 			  xaxis: {
// 				crosshairs: {
// 				  width: 1
// 				},
// 			  },
// 			  tooltip: {
// 				fixed: {
// 				  enabled: false
// 				},
// 				x: {
// 				  show: false
// 				},
// 				y: {
// 				  title: {
// 					formatter: function (seriesName) {
// 					  return ''
// 					}
// 				  }
// 				},
// 				marker: {
// 				  show: false
// 				}
// 			  },
// 			  responsive: [{
// 				breakpoint: 360,
// 				options: {
// 					chart: {
// 						width:60,
// 						height:60
// 					}
// 				},
// 			},{
// 				breakpoint: 480,
// 				options: {
// 					chart: {
// 						width:100,
// 						height:80
// 					}
// 				},
// 			}]
// 		}

// 	  var chart = new ApexCharts(
// 				document.querySelector("#dash3"),
// 				options
// 			);
// 			chart.render();
// 	   }




// 	// revenue-analysis

// 	 var revenueanalysis = jQuery('#revenueanalysis')
// 		if (revenueanalysis.length > 0) {
// 		   var options = {
// 				chart: {
// 					height: 340,
// 					type: 'area',
// 					toolbar: {
// 					show: false
// 					},
// 				},
// 				dataLabels: {
// 					enabled: false
// 				},
// 				legend: {
// 					offsetY: -10,
// 				},
// 				colors:['#2a93d5', '#FC3468'],
// 				fill: {
// 				type: 'gradient',
// 					gradient: {
// 					  type: "vertical",
// 					  shadeIntensity: 0,
// 					  opacityFrom: 0.3,
// 					  opacityTo: 0.2,
// 					  gradientToColors: ['#fcc525'],
// 					  stops: [0, 90, 100]
// 					}
// 			  },
// 				stroke: {
// 					curve: 'smooth',
// 					width: 2
// 				},
// 				series: [{
// 					name: 'Sale',
// 					data: [20, 30, 42, 53, 32, 50, 60, 43, 43, 32, 20, 40, 54]
// 				},
// 				{
// 					name: 'Investment',
// 					data: [30, 40, 29, 33, 42, 30, 40, 52, 33, 22, 40, 50, 64]
// 				}],
// 				tooltip: {
// 					x: {
// 						format: 'dd/MM/yy HH:mm'
// 					},
// 				},
// 				xaxis: {
// 					show: true,
// 					labels: {
// 						show: true,
// 					},
// 					 axisBorder: {
// 						 color: '#fafbfb',
// 						 show: true,
// 					 },
// 					 axisTicks: {
// 					 color: '#fafbfb',
// 					 },
// 				},
// 				yaxis: {
// 				labels: {
// 					show: true,
// 				},
// 				axisBorder: {
// 					 color: '#fff',
// 					 show: true,
// 				 },
// 				},
// 				grid: {
// 				show: true,
// 				borderColor: '#fafbfb',
// 				},
// 			}
// 		var chart = new ApexCharts(
// 			document.querySelector("#revenueanalysis"),
// 			options
// 		);
// 		chart.render();
// 	 }

// 	Apex.grid = {
// 		  padding: {
// 			right: 0,
// 			left: 0
// 		  }
// 		}

// 		Apex.dataLabels = {
// 		  enabled: false
// 		}

// 		var randomizeArray = function (arg) {
// 		  var array = arg.slice();
// 		  var currentIndex = array.length, temporaryValue, randomIndex;

// 		  while (0 !== currentIndex) {

// 			randomIndex = Math.floor(Math.random() * currentIndex);
// 			currentIndex -= 1;

// 			temporaryValue = array[currentIndex];
// 			array[currentIndex] = array[randomIndex];
// 			array[randomIndex] = temporaryValue;
// 		  }

// 		  return array;
// 		}

// 		// data for the sparklines that appear below header area
// 		var sparklineData = [47, 45, 54, 38, 56, 24, 65, 31, 37, 39, 62, 51, 35, 41, 35, 27, 93, 53, 61, 27, 54, 43, 19, 46];

// 		var spark1 = {
// 		  chart: {
// 			id: 'sparkline1',
// 			group: 'sparklines',
// 			type: 'area',
// 			height: 310,
// 			sparkline: {
// 			  enabled: true
// 			},
// 		  },
// 			stroke: {
// 				curve: 'smooth',
// 				width: 2
// 			},
// 		  fill: {
// 			opacity: 1,
// 			colors: ['#28a745']
// 		  },
// 		  series: [{
// 			name: 'Sales',
// 			data: randomizeArray(sparklineData)
// 		  }],
// 		  labels: [...Array(24).keys()].map(n => `2018-09-0${n+1}`),
// 		  yaxis: {
// 			min: 0
// 		  },
// 		  xaxis: {
// 			type: 'datetime',
// 		  },
// 		  colors: ['#28a745'],

// 		}

// 		new ApexCharts(document.querySelector("#spark1"), spark1).render();



// 	// analytics10
// 		var analytics10 = jQuery('#analytics10')
// 	if (analytics10.length > 0) {

// 	   var optionsDonutTop = {
// 			  chart: {
// 				height: 115,
// 				width: 140,
// 				type: 'donut',
// 			  },
// 			  colors: ['#8E54E9', '#f7b731', '#45aaf2'],
// 			  labels: ['Redirect Visists', 'New Visits', 'Direct Visits'],
// 			  series: [456, 256, 128],
// 			  legend: {
// 				show: false
// 			  },
// 			  dataLabels: {
// 				enabled: false
// 			  },
// 			  plotOptions: {
// 				pie: {
// 				  size: 35,
// 				  donut: {
// 					size: '72%',
// 				  },
// 				  offsetX: 10,
// 				  offsetY: -10,
// 				  dataLabels: {
// 					enabled: false
// 				  },
// 				}
// 			  },
// 			  responsive: [{
// 				breakpoint: 480,
// 				options: {
// 					chart: {
// 						width:250,
// 						height:250
// 					},
// 					plotOptions: {
// 						pie: {
// 						  size: 70,
// 						  donut: {
// 							size: '72%',
// 						  },
// 						  offsetX: 0,
// 						  offsetY: -20,
// 						  dataLabels: {
// 							enabled: false
// 						  },
// 						}
// 					  },
// 				},
// 			  }]
// 			}
// 			var chartDonut2 = new ApexCharts(document.querySelector('#analytics10'), optionsDonutTop);
// 			chartDonut2.render().then(function () {
// 			});
// 			};


// }); // End of use strict

