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
            <h3>air navigation services personnel</h3>

            <div class="col-6">

                <form method="POST" action="/airnavigationservicespersonnel">
                    @csrf
                    <div class="form-group">
                        <label for="">Navigation Service ID</label>
                        <input class="form-control mb-3" type="text" name="nav_service_id">
                        <div class="form-group">
                            <label name="background">Rules Check </label>
                            <select class="form-control" name="rules_check">
                                <option hidden selected> Sila Pilih </option>
                                <option value="instructors">instructors</option>
                                <option value="flight school">flight school</option>
                                <option value="examiner">examiner</option>
                                <option value="aircraft registration">aircraft registration</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label name="background">rating </label>
                            <select class="form-control" name="rating">
                                <option hidden selected> Sila Pilih </option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
                        </div>
                        <label for="">Unit</label>
                        <input class="form-control mb-3" type="text" name="unit">
                        <div class="form-group">
                            <label name="background">checkpoint </label>
                            <select class="form-control" name="checkpoints">
                                <option hidden selected> Sila Pilih </option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label name="background">unit endorsement </label>
                            <select class="form-control" name="unit_emdorsemnent">
                                <option hidden selected> Sila Pilih </option>
                                <option value="1">1</approve>
                                <option value="2">2</reject>
                            </select>
                        </div>

                        </br>

                    </div>
                    <input type="hidden" name="airnavigationservicespersonnel" value=1>
                    <button class="btn btn-primary" type="submit">Tambah</button>
                </form>

                <div class="row my-4">
                    <div class="col-12">
                        <h3>air navigation services personnel</h3>
                        <table class="table table-bordered">

                            <tr>Navigation Service ID</th>
                                <th>Rules Check</th>
                                <th>rating</th>
                                <th>Unit</th>
                                <th>checkpoint </th>
                                <th>unit endorsement</th>
                            </tr>
                            @foreach ($airnavigationservicespersonnels as $airnavigationservicespersonnel)
                            <tr>
                                <td>{{ $airnavigationservicespersonnel['nav_service_id'] }}</td>
                                <td>{{ $airnavigationservicespersonnel['rules_check'] }}</td>
                                <td>{{ $aairnavigationservicespersonnel['rating'] }}</td>
                                <td>{{ $airnavigationservicespersonnel['unit'] }}</td>
                                <td>{{ $airnavigationservicespersonnel['checkpoint'] }}</td>
                                <td>{{ $airnavigationservicespersonnel['unit_endorsement'] }}</td>


                            </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
</br>
        <div class="chart col-6">
            <div id="chartdiv"></div>
        </div>
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

var chart = am4core.create("chartdiv", am4charts.PieChart3D);
chart.hiddenState.properties.opacity = 0; // this creates initial fade-in

chart.legend = new am4charts.Legend();

chart.data = [
  {
    country: "Lithuania",
    litres: 501.9
  },
  {
    country: "Czech Republic",
    litres: 301.9
  },
  {
    country: "Ireland",
    litres: 201.1
  },
  {
    country: "Germany",
    litres: 165.8
  },
  {
    country: "Australia",
    litres: 139.9
  },
  {
    country: "Austria",
    litres: 128.3
  },
  {
    country: "UK",
    litres: 99
  },
  {
    country: "Belgium",
    litres: 60
  },
  {
    country: "Netherlands",
    litres: 50
  }
];

var series = chart.series.push(new am4charts.PieSeries3D());
series.dataFields.value = "litres";
series.dataFields.category = "country";

}); // end am4core.ready()
</script>

    @stop