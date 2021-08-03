
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<div class="container py-5">
    <div class="row">
        <div class="col-6 bg-light">
            <h3>Aircraft Maintenance Personnel</h3>

            <div class="col-6">

                <form method="POST" action="/aircraftmaintenancepersonnels">
                    @csrf
                    <div class="form-group">
                        <label for="">Maintenance ID :</label>
                        <input class="form-control mb-3" type="text" name="maintenance_id">
                        <div class="form-group">
                        <label name="background">Background: </label>
                        <select class="form-control"  name="background">
                        <option value="manufacturer">manufacturer</option>
                        <option value="aircraft type">flight school</option>
                        <option value="limitation">examiner</option>
                      </select>
                    </div>
                        <label for="">Name :</label>
                        <input class="form-control mb-3" type="text" name="nama">
                        <label for="">NRIC :</label>
                        <input class="form-control mb-3" type="text" name="ic">
                        <label for="">Tarikh Lahir :</label>
                        <input class="form-control mb-3" type="text" name="tarikh_lahir">
                        <label for="">Address :</label>
                        <input class="form-control mb-3" type="text" name="alamat">

</br>

                    </div>
                    <input type="hidden" name="aircraftmaintenancepersonnel" value=1>
                    <button class="btn btn-primary" type="submit">Tambah</button>
                </form>

                <div class="row my-4">
                    <div class="col-12">
                        <h3>Aircraft Maintenance Personnel</h3>
                        <table class="table table-bordered">
                               
                              <tr>Maintenance ID</th>
                                <th>Background:</th>
                                <th>Name</th>
                                <th>Lokasi </th>
                                <th>NRIC </th>
                                <th>Tarikh Lahir</th>
                                <th>Address </th>
                            </tr>
                            @foreach ($aircraftmaintenancepersonnels as $aircraftmaintenancepersonnel)
                            <tr>
                                <td>{{ $aircraftmaintenancepersonnel['maintenance_id'] }}</td>
                                <td>{{ $aircraftmaintenancepersonnel['background'] }}</td>
                                <td>{{ $aircraftmaintenancepersonnel['nama'] }}</td>
                                <td>{{ $aircraftmaintenancepersonnel['ic'] }}</td>
                                <td>{{ $aircraftmaintenancepersonnel['tarikh_lahir'] }}</td>
                                <td>{{ $aircraftmaintenancepersonnel['alamat'] }}</td>
                                

                            </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
          </div>
        
          