//[widget flot charts Javascript]

//Project:	Uicod Admin - Responsive Admin Template
//Primary use:   Used only for the  widget flot charts


$(function() {
  'use strict';

  $.plot("#flotBar1", [{
    data: [[0, 3], [2, 8], [4, 5], [6, 13],[8,5], [10,7],[12,4], [14,6]]
  }], {
    series: {
      bars: {
        show: true,
        lineWidth: 0,
        fillColor: '#2a93d5'
      }
    },
    grid: {
      borderWidth: 1,
      borderColor: '#D9D9D9'
    },
    yaxis: {
      tickColor: '#d9d9d9',
      font: {
        color: '#666',
        size: 10
      }
    },
    xaxis: {
      tickColor: '#d9d9d9',
      font: {
        color: '#666',
        size: 10
      }
    }
  });

  $.plot("#flotBar2", [{
    data: [[0, 3], [2, 8], [4, 5], [6, 13],[8,5], [10,7],[12,8], [14,10]],
    bars: {
      show: true,
      lineWidth: 0,
      fillColor: '#2a93d5'
    }
  },{
    data: [[1, 5], [3, 7], [5, 10], [7, 7],[9,9], [11,5],[13,4], [15,6]],
    bars: {
      show: true,
      lineWidth: 0,
      fillColor: '#dc3545'
    }
  }], {
    grid: {
      borderWidth: 1,
      borderColor: '#D9D9D9'
    },
    yaxis: {
      tickColor: '#d9d9d9',
      font: {
        color: '#666',
        size: 10
      }
    },
    xaxis: {
      tickColor: '#d9d9d9',
      font: {
        color: '#666',
        size: 10
      }
    }
  });
	
var newCust = [[0, 2], [1, 3], [2,6], [3, 5], [4, 7], [5, 8], [6, 10]];
  var retCust = [[0, 1], [1, 2], [2,5], [3, 3], [4, 5], [5, 6], [6,9]];

  var plot = $.plot($('#flotLine1'),[
    {
      data: newCust,
      label: 'New Customer',
      color: '#145388'
    },
    {
      data: retCust,
      label: 'Returning Customer',
      color: '#dc3545'
    }],
    {
      series: {
        lines: {
          show: true,
          lineWidth: 1
        },
        shadowSize: 0
      },
      points: {
        show: false,
      },
      legend: {
        noColumns: 1,
        position: 'nw'
      },
      grid: {
        hoverable: true,
        clickable: true,
        borderColor: '#ddd',
        borderWidth: 0,
        labelMargin: 5,
        backgroundColor: '#fff'
      },
      yaxis: {
        min: 0,
        max: 15,
        color: '#eee',
        font: {
          size: 10,
          color: '#999'
        }
      },
      xaxis: {
        color: '#eee',
        font: {
          size: 10,
          color: '#999'
        }
      }
    });

    var plot = $.plot($('#flotLine2'),[
      {
        data: newCust,
        label: 'New Customer',
        color: '#145388'
      },
      {
        data: retCust,
        label: 'Returning Customer',
        color: '#dc3545'
      }],
      {
        series: {
          lines: {
            show: false
          },
          splines: {
            show: true,
            tension: 0.4,
            lineWidth: 1,
            //fill: 0.4
          },
          shadowSize: 0
        },
        points: {
          show: false,
        },
        legend: {
          noColumns: 1,
          position: 'nw'
        },
        grid: {
          hoverable: true,
          clickable: true,
          borderColor: '#ddd',
          borderWidth: 0,
          labelMargin: 5,
          backgroundColor: '#fff'
        },
        yaxis: {
          min: 0,
          max: 15,
          color: '#eee',
          font: {
            size: 10,
            color: '#999'
          }
        },
        xaxis: {
          color: '#eee',
          font: {
            size: 10,
            color: '#999'
          }
        }
      });

      var newCust2 = [[0, 10], [1, 7], [2, 8], [3, 9], [4, 6], [5, 5], [6, 7]];
      var retCust2 = [[0, 8], [1, 5], [2, 6], [3, 8], [4, 4], [5, 3], [6,6]];

      var plot = $.plot($('#flotLine3'),[
        {
          data: newCust2,
          label: 'New Customer',
          color: '#145388'
        },
        {
          data: retCust2,
          label: 'Returning Customer',
          color: '#dc3545'
        }],
        {
          series: {
            lines: {
              show: true,
              lineWidth: 1
            },
            shadowSize: 0
          },
          points: {
            show: true,
          },
          legend: {
            noColumns: 1,
            position: 'nw'
          },
          grid: {
            hoverable: true,
            clickable: true,
            borderColor: '#ddd',
            borderWidth: 0,
            labelMargin: 5,
            backgroundColor: '#fff'
          },
          yaxis: {
            min: 0,
            max: 15,
            color: '#eee',
            font: {
              size: 10,
              color: '#999'
            }
          },
          xaxis: {
            color: '#eee',
            font: {
              size: 10,
              color: '#999'
            }
          }
        });

        var plot = $.plot($('#flotLine4'),[
          {
            data: newCust2,
            label: 'New Customer',
            color: '#145388'
          },
          {
            data: retCust2,
            label: 'Returning Customer',
            color: '#dc3545'
          }],
          {
            series: {
              lines: {
                show: false
              },
              splines: {
                show: true,
                tension: 0.4,
                lineWidth: 1,
                //fill: 0.4
              },
              shadowSize: 0
            },
            points: {
              show: true,
            },
            legend: {
              noColumns: 1,
              position: 'nw'
            },
            grid: {
              hoverable: true,
              clickable: true,
              borderColor: '#ddd',
              borderWidth: 0,
              labelMargin: 5,
              backgroundColor: '#fff'
            },
            yaxis: {
              min: 0,
              max: 15,
              color: '#eee',
              font: {
                size: 10,
                color: '#999'
              }
            },
            xaxis: {
              color: '#eee',
              font: {
                size: 10,
                color: '#999'
              }
            }
          });	
	
	var plot = $.plot($('#flotArea1'),[
            {
              data: newCust,
              label: 'New Customer',
              color: '#dc3545'
            },
            {
              data: retCust,
              label: 'Returning Customer',
              color: '#145388'
            }],
            {
              series: {
                lines: {
                  show: true,
                  lineWidth: 0,
                  fill: 0.8
                },
                shadowSize: 0
              },
              points: {
                show: false,
              },
              legend: {
                noColumns: 1,
                position: 'nw'
              },
              grid: {
                hoverable: true,
                clickable: true,
                borderColor: '#ddd',
                borderWidth: 0,
                labelMargin: 5,
                backgroundColor: '#fff'
              },
              yaxis: {
                min: 0,
                max: 15,
                color: '#eee',
                font: {
                  size: 10,
                  color: '#999'
                }
              },
              xaxis: {
                color: '#eee',
                font: {
                  size: 10,
                  color: '#999'
                }
              }
            });

            var plot = $.plot($('#flotArea2'),[
              {
                data: newCust,
                label: 'New Customer',
                color: '#dc3545'
              },
              {
                data: retCust,
                label: 'Returning Customer',
                color: '#145388'
              }],
              {
                series: {
                  lines: {
                    show: false
                  },
                  splines: {
                    show: true,
                    tension: 0.4,
                    lineWidth: 0,
                    fill: 0.8
                  },
                  shadowSize: 0
                },
                points: {
                  show: false,
                },
                legend: {
                  noColumns: 1,
                  position: 'nw'
                },
                grid: {
                  hoverable: true,
                  clickable: true,
                  borderColor: '#ddd',
                  borderWidth: 0,
                  labelMargin: 5,
                  backgroundColor: '#fff'
                },
                yaxis: {
                  min: 0,
                  max: 15,
                  color: '#eee',
                  font: {
                    size: 10,
                    color: '#999'
                  }
                },
                xaxis: {
                  color: '#eee',
                  font: {
                    size: 10,
                    color: '#999'
                  }
                }
              });

	 /*********** REAL TIME UPDATES **************/

    var data = [], totalPoints = 50;

    function getRandomData() {
      if (data.length > 0)
      data = data.slice(1);
      while (data.length < totalPoints) {
        var prev = data.length > 0 ? data[data.length - 1] : 50,
        y = prev + Math.random() * 10 - 5;
        if (y < 0) {
          y = 0;
        } else if (y > 100) {
          y = 100;
        }
        data.push(y);
      }
      var res = [];
      for (var i = 0; i < data.length; ++i) {
        res.push([i, data[i]])
      }
      return res;
    }


    // Set up the control widget
	 var updateInterval = 1000;

   var plot4 = $.plot('#flotRealtime1', [ getRandomData() ], {
      colors: ['#2a93d5'],
		  series: {
        lines: {
          show: true,
          lineWidth: 1
        },
        shadowSize: 0	// Drawing is faster without shadows
		  },
      grid: {
        borderColor: '#ddd',
        borderWidth: 1,
        labelMargin: 5
		  },
      xaxis: {
        color: '#eee',
        font: {
          size: 10,
          color: '#999'
        }
      },
		  yaxis: {
				min: 0,
				max: 100,
        color: '#eee',
        font: {
          size: 10,
          color: '#999'
        }
		  }
	 });

   var plot5 = $.plot('#flotRealtime2', [ getRandomData() ], {
      colors: ['#2a93d5'],
		  series: {
        lines: {
          show: true,
          lineWidth: 0,
          fill: 0.9
        },
        shadowSize: 0	// Drawing is faster without shadows
		  },
      grid: {
        borderColor: '#ddd',
        borderWidth: 1,
        labelMargin: 5
		  },
      xaxis: {
        color: '#eee',
        font: {
          size: 10,
          color: '#999'
        }
      },
		  yaxis: {
				min: 0,
				max: 100,
        color: '#eee',
        font: {
          size: 10,
          color: '#999'
        }
		  }
	 });

	 function update_plot4() {
		  plot4.setData([getRandomData()]);
		  plot4.draw();
		  setTimeout(update_plot4, updateInterval);
	 }

   function update_plot5() {
		  plot5.setData([getRandomData()]);
		  plot5.draw();
		  setTimeout(update_plot5, updateInterval);
	 }

	 update_plot4();
   update_plot5();


	/**************** PIE CHART *******************/
   var piedata = [
      { label: "Series 1", data: [[1,10]], color: '#145388'},
      { label: "Series 2", data: [[1,30]], color: '#28a745'},
      { label: "Series 3", data: [[1,90]], color: '#2a93d5'},
      { label: "Series 4", data: [[1,70]], color: '#b69329'},
      { label: "Series 5", data: [[1,80]], color: '#dc3545'}
	 ];

    $.plot('#flotPie1', piedata, {
      series: {
        pie: {
          show: true,
          radius: 1,
          label: {
            show: true,
            radius: 2/3,
            formatter: labelFormatter,
            threshold: 0.1
          }
        }
      },
      grid: {
        hoverable: true,
        clickable: true
      }
    });

    $.plot('#flotPie2', piedata, {
      series: {
        pie: {
          show: true,
          radius: 1,
          innerRadius: 0.5,
          label: {
            show: true,
            radius: 2/3,
            formatter: labelFormatter,
            threshold: 0.1
          }
        }
      },
      grid: {
        hoverable: true,
        clickable: true
      }
    });

    function labelFormatter(label, series) {
		  return "<div style='font-size:8pt; text-align:center; padding:2px; color:white;'>" + label + "<br/>" + Math.round(series.percent) + "%</div>";
	  }
	

});
