//[Dashboard Javascript]

//Project:	Uicod Admin - Responsive Admin Template
//Primary use:   Used only for the main dashboard (index.html)


$(function () {

  'use strict';
	
	// Themes begin
	am4core.useTheme(am4themes_animated);
	// Themes end

	var chart = am4core.create("reg-chartdiv", am4charts.PieChart);
	chart.hiddenState.properties.opacity = 0; // this creates initial fade-in

	chart.data = [
	  {
		country: "Lithu",
		value: 401
	  },
	  {
		country: "Czech",
		value: 300
	  },
	  {
		country: "INDIA",
		value: 200
	  },
	  {
		country: "Germany",
		value: 165
	  },
	  {
		country: "UAE",
		value: 139
	  },
	  {
		country: "USA",
		value: 128
	  }
	];
	chart.radius = am4core.percent(70);
	chart.innerRadius = am4core.percent(40);
	chart.startAngle = 180;
	chart.endAngle = 360;  

	var series = chart.series.push(new am4charts.PieSeries());
	series.dataFields.value = "value";
	series.dataFields.category = "country";

	series.slices.template.cornerRadius = 10;
	series.slices.template.innerCornerRadius = 7;
	series.slices.template.draggable = true;
	series.slices.template.inert = true;
	series.alignLabels = false;

	series.hiddenState.properties.startAngle = 90;
	series.hiddenState.properties.endAngle = 90;

	chart.legend = new am4charts.Legend();
	
	
	

}); // End of use strict

