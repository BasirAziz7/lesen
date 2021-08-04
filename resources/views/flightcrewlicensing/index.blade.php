
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
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
                        <select class="form-control"  name="rule_check">
                        <option value="instructor">instructor</option>
                        <option value="flight school">flight school</option>
                        <option value="examinor">examinor</option>
                        <option value="air craft registration">air craft registration</option>
                      </select>
                    </div>
                        <div class="form-group">
                        <label name="verify_rule">Verify Rule :</label>
                        <select class="form-control"  name="verify_rule">
                        <option value="approve">Approve</option>
                        <option value="reject">Reject</option>
                      </select>
                    </div>
                        <label for="">Name :</label>
                        <input class="form-control mb-3" type="text" name="nama">
                        <div class="form-group">
                        <label name="location">Location :</label>
                        <select class="form-control"  name="location">
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
                        <select class="form-control"  name="status_pilot">
                        <option value="complete">complete</option>
                        <option value="in complete">in complete</option>
                        </select>
                    </div>
                        <label for="">Authority :</label>
                        <input class="form-control mb-3" type="text" name="authority">
                        <div class="form-group">
                        <label name="status_authority">Authority Status :</label>
                        <select class="form-control"  name="status_authority">
                        <option value="complete">complete</option>
                        <option value="in complete">in complete</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label name="examiner">Examiner :</label>
                        <select class="form-control"  name="examiner">
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

                              <tr>User Id</th>
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
        