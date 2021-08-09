@extends('base')

@section('content')

<h1>Ministry of Transport</h1>

<div class="row">
    <div class="chart col-6">
        <div id="chartdiv"></div>
    </div>
    
    <div class="chart col-6">
        <div id="chartdiv1"></div>
    </div>
</div>



</style>

<!-- Resources -->
<script src="https://cdn.amcharts.com/lib/4/core.js"></script>
<script src="https://cdn.amcharts.com/lib/4/charts.js"></script>
<script src="https://cdn.amcharts.com/lib/4/themes/animated.js"></script>

<!-- Chart code -->
<script>
am4core.ready(function() {

// Themes begin
am4core.useTheme(am4themes_animated);
// Themes end

// Create chart instance
var chart = am4core.create("chartdiv", am4charts.PieChart);

// Let's cut a hole in our Pie chart the size of 40% the radius
chart.innerRadius = am4core.percent(40);



// Add and configure Series
var pieSeries = chart.series.push(new am4charts.PieSeries());
pieSeries.dataFields.value = "value";
pieSeries.dataFields.category = "category";
pieSeries.slices.template.stroke = am4core.color("#fff");
pieSeries.innerRadius = 10;
pieSeries.slices.template.fillOpacity = 0.5;

pieSeries.slices.template.propertyFields.disabled = "labelDisabled";
pieSeries.labels.template.propertyFields.disabled = "labelDisabled";
pieSeries.ticks.template.propertyFields.disabled = "labelDisabled";


// Add data
pieSeries.data = [{
  "category": "LLS + GGL",
  "value": 60
}, {
  "category": "Unused",
  "value": 30,
  "labelDisabled":true
}];

// Disable sliding out of slices
pieSeries.slices.template.states.getKey("hover").properties.shiftRadius = 0;
pieSeries.slices.template.states.getKey("hover").properties.scale = 1;

// Add second series
var pieSeries2 = chart.series.push(new am4charts.PieSeries());
pieSeries2.dataFields.value = "value";
pieSeries2.dataFields.category = "category";
pieSeries2.slices.template.states.getKey("hover").properties.shiftRadius = 0;
pieSeries2.slices.template.states.getKey("hover").properties.scale = 1;
pieSeries2.slices.template.propertyFields.fill = "fill";
var label = chart.seriesContainer.createChild(am4core.Label);
label.textAlign = "middle";
label.horizontalCenter = "middle";
label.verticalCenter = "middle";
label.adapter.add("text", function(text, target){
  return "[font-size:18px] Status/Jumlah Pendaftaran  [/]:\n[bold font-size:30px]" +988+ "[/]";
})

// Add data
pieSeries2.data = [{
  "category": "Lulus",
  "value": 300
}, {
  "category": "Gagal",
  "value": 233
}, {
  "category": "Baki",
  "value": 455,
  "fill":"#dedede"
}];


pieSeries.adapter.add("innerRadius", function(innerRadius, target){
  return am4core.percent(40);
})

pieSeries2.adapter.add("innerRadius", function(innerRadius, target){
  return am4core.percent(60);
})

pieSeries.adapter.add("radius", function(innerRadius, target){
  return am4core.percent(100);
})

pieSeries2.adapter.add("radius", function(innerRadius, target){
  return am4core.percent(80);
})

}); // end am4core.ready()
</script>



<!-- Resources -->
<script src="https://cdn.amcharts.com/lib/4/core.js"></script>
<script src="https://cdn.amcharts.com/lib/4/charts.js"></script>
<script src="https://cdn.amcharts.com/lib/4/themes/animated.js"></script>

<!-- Chart code -->
<script>
am4core.ready(function() {

// Themes begin
am4core.useTheme(am4themes_animated);
// Themes end

var chart = am4core.create("chartdiv1", am4charts.XYChart);

chart.data = [{
 "country": "Jan",
 "visits": 2025
}, {
 "country": "Feb",
 "visits": 1882
}, {
 "country": "Mar",
 "visits": 1809
}, {
 "country": "Apr",
 "visits": 1322
}, {
 "country": "May",
 "visits": 1122
}, {
 "country": "June",
 "visits": 1114
}, {
 "country": "Jul",
 "visits": 984
}, {
 "country": "Aug",
 "visits": 711
}, {
 "country": "Sep",
 "visits": 665
}, {
 "country": "Oct",
 "visits": 580
}, {
 "country": "Nov",
 "visits": 443
}, {
 "country": "Dec",
 "visits": 441
}];

chart.padding(40, 40, 40, 40);

var categoryAxis = chart.xAxes.push(new am4charts.CategoryAxis());
categoryAxis.renderer.grid.template.location = 0;
categoryAxis.dataFields.category = "country";
categoryAxis.renderer.minGridDistance = 60;
categoryAxis.renderer.inversed = true;
categoryAxis.renderer.grid.template.disabled = true;


var valueAxis = chart.yAxes.push(new am4charts.ValueAxis());
valueAxis.min = 0;
valueAxis.extraMax = 0.1;

//valueAxis.rangeChangeEasing = am4core.ease.linear;
//valueAxis.rangeChangeDuration = 1500;

var series = chart.series.push(new am4charts.ColumnSeries());
series.dataFields.categoryX = "country";
series.dataFields.valueY = "visits";
series.tooltipText = "{valueY.value}"
series.columns.template.strokeOpacity = 0;
series.columns.template.column.cornerRadiusTopRight = 10;
series.columns.template.column.cornerRadiusTopLeft = 10;

//series.interpolationDuration = 1500;
//series.interpolationEasing = am4core.ease.linear;
var labelBullet = series.bullets.push(new am4charts.LabelBullet());
labelBullet.label.verticalCenter = "bottom";
labelBullet.label.dy = -10;
labelBullet.label.text = "{values.valueY.workingValue.formatNumber('#.')}";
var valueAxis = chart.yAxes.push(new am4charts.ValueAxis());
valueAxis.title.text = "Jumlah Pendaftaran (Bulan)";
valueAxis.title.fontWeight = "bold";


chart.zoomOutButton.disabled = true;


// as by default columns of the same series are of the same color, we add adapter which takes colors from chart.colors color set
series.columns.template.adapter.add("fill", function (fill, target) {
 return chart.colors.getIndex(target.dataItem.index);
});

setInterval(function () {
 am4core.array.each(chart.data, function (item) {
   item.visits += Math.round(Math.random() * 200 - 100);
   item.visits = Math.abs(item.visits);
 })
 chart.invalidateRawData();
}, 2000)

categoryAxis.sortBySeries = series;

}); // end am4core.ready()
</script>

@stop