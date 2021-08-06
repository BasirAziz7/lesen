@extends('base')

@section('content')

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
        rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
        crossorigin="anonymous">
</head>

<div class="container py-5">
    <div class="row">
        <div class="col-6 bg-light">
            <h3>Flight Crew Licensings</h3>

            <div class="col-6">

                <form method="POST" action="/flightcrewlicensings">
                    @csrf
                    <div class="form-group">
                        <label for="">User ID :</label>
                        <input class="form-control mb-3" type="text" name="user_id">
                        <label for="">Invoicing fee :</label>
                        <input class="form-control mb-3" type="text" name="invoicing_fee">
                        <div class="form-group">
                            <label name="rule_check">Rules Check :</label>
                            <select class="form-control" name="rule_check">
                                <option hidden selected> Sila Pilih </option>
                                <option value="instructor">instructor</option>
                                <option value="flight school">flight school</option>
                                <option value="examinor">examinor</option>
                                <option value="air craft registration">air craft registration</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label name="verify_rule">Verify Rule :</label>
                            <select class="form-control" name="verify_rule">
                                <option hidden selected> Sila Pilih </option>
                                <option value="approve">Approve</option>
                                <option value="reject">Reject</option>
                            </select>
                        </div>
                        <label for="">Name :</label>
                        <input class="form-control mb-3" type="text" name="nama">
                        <div class="form-group">
                            <label name="location">Location :</label>
                            <select class="form-control" name="location">
                                <option hidden selected> Sila Pilih </option>
                                <option value="Place A">Place A</option>
                                <option value="Place B">Place B</option>
                                <option value="Place C">Place C</option>
                            </select>
                        </div>
                        <label for="">Task Name :</label>
                        <input class="form-control mb-3" type="text" name="task_name">
                        <label for="">Address :</label>
                        <input class="form-control mb-3" type="text" name="alamat">
                        <div class="form-group">
                            <label name="status_pilot">Pilot Status :</label>
                            <select class="form-control" name="status_pilot">
                                <option hidden selected> Sila Pilih </option>
                                <option value="complete">complete</option>
                                <option value="in complete">in complete</option>
                            </select>
                        </div>
                        <label for="">Authority :</label>
                        <input class="form-control mb-3" type="text" name="authority">
                        <div class="form-group">
                            <label name="status_authority">Authority Status :</label>
                            <select class="form-control" name="status_authority">
                                <option hidden selected> Sila Pilih </option>
                                <option value="complete">complete</option>
                                <option value="in complete">in complete</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label name="examiner">Examiner :</label>
                            <select class="form-control" name="examiner">
                                <option hidden selected> Sila Pilih </option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                            </select>
                        </div>
                        <label for="">Remark :</label>
                        <input class="form-control mb-3" type="text" name="remark">
                        <label for="">Flight Experience :</label>
                        <input class="form-control mb-3" type="text" name="flight_experience">

                        </br>

                    </div>
                    <input type="hidden" name="flightcrewlicensing" value=1>
                    <button class="btn btn-primary" type="submit">Tambah</button>
                </form>

                <div class="row my-4">
                    <div class="col-12">
                        <h3>Flight Crew Licensings</h3>
                        <table class="table table-bordered">

                            <th>User Id</th>
                            <th>Invoicing Fee</th>
                            <th>Name</th>
                            <th>Lokasi </th>
                            <th>Task Name </th>
                            <th>status pilot</th>
                            <th>Address </th>
                            <th>Authority</th>
                            <th>Authority Status</th>
                            <th>Examiner</th>
                            <th>Remarks</th>
                            <th>Rules Check</th>
                            <th>Verify Rules</th>
                            <th>Flight Experience</th>

                            </tr>
                            @foreach ($flightcrewlicensings as $flightcrewlicensing)
                            <tr>
                                <td>{{ $flightcrewlicensing['user_id'] }}</td>
                                <td>{{ $flightcrewlicensing['invoicing_fee'] }}</td>
                                <td>{{ $flightcrewlicensing['nama'] }}</td>
                                <td>{{ $flightcrewlicensing['lokasi'] }}</td>
                                <td>{{ $flightcrewlicensing['task_name'] }}</td>
                                <td>{{ $flightcrewlicensing['status_pilot'] }}</td>
                                <td>{{ $flightcrewlicensing['alamat'] }}</td>
                                <td>{{ $flightcrewlicensing['authority'] }}</td>
                                <td>{{ $flightcrewlicensing['status_authority'] }}</td>
                                <td>{{ $flightcrewlicensing['examiner'] }}</td>
                                <td>{{ $flightcrewlicensing['remarks'] }}</td>
                                <td>{{ $flightcrewlicensing['rules_check'] }}</td>
                                <td>{{ $flightcrewlicensing['verify_rule'] }}</td>
                                <td>{{ $flightcrewlicensing['flight_experience'] }}</td>


                            </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="chart col-6">
            <div id="chartdiv"></div>
        </div>
    </div>
</div>


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
    var chart = am4core.create("chartdiv", am4charts.XYChart3D);
    chart.paddingBottom = 30;
    chart.angle = 35;

    // Add data
    chart.data = [{
        "country": "USA",
        "visits": 4025
    }, {
        "country": "China",
        "visits": 1882
    }, {
        "country": "Japan",
        "visits": 1809
    }, {
        "country": "Germany",
        "visits": 1322
    }, {
        "country": "UK",
        "visits": 1122
    }, {
        "country": "France",
        "visits": 1114
    }, {
        "country": "India",
        "visits": 984
    }, {
        "country": "Spain",
        "visits": 711
    }, {
        "country": "Netherlands",
        "visits": 665
    }, {
        "country": "Russia",
        "visits": 580
    }, {
        "country": "South Korea",
        "visits": 443
    }, {
        "country": "Canada",
        "visits": 441
    }, {
        "country": "Brazil",
        "visits": 395
    }, {
        "country": "Italy",
        "visits": 386
    }, {
        "country": "Taiwan",
        "visits": 338
    }];

    // Create axes
    var categoryAxis = chart.xAxes.push(new am4charts.CategoryAxis());
    categoryAxis.dataFields.category = "country";
    categoryAxis.renderer.grid.template.location = 0;
    categoryAxis.renderer.minGridDistance = 20;
    categoryAxis.renderer.inside = true;
    categoryAxis.renderer.grid.template.disabled = true;

    let labelTemplate = categoryAxis.renderer.labels.template;
    labelTemplate.rotation = -90;
    labelTemplate.horizontalCenter = "left";
    labelTemplate.verticalCenter = "middle";
    labelTemplate.dy = 10; // moves it a bit down;
    labelTemplate.inside = false; // this is done to avoid settings which are not suitable when label is rotated

    var valueAxis = chart.yAxes.push(new am4charts.ValueAxis());
    valueAxis.renderer.grid.template.disabled = true;

    // Create series
    var series = chart.series.push(new am4charts.ConeSeries());
    series.dataFields.valueY = "visits";
    series.dataFields.categoryX = "country";

    var columnTemplate = series.columns.template;
    columnTemplate.adapter.add("fill", function(fill, target) {
        return chart.colors.getIndex(target.dataItem.index);
    })

    columnTemplate.adapter.add("stroke", function(stroke, target) {
        return chart.colors.getIndex(target.dataItem.index);
    })

}); // end am4core.ready()
</script>

@stop