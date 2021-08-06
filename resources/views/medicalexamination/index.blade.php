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
            <h3>MEDICAL EXAMINTAION</h3>

            <div class="col-6">

                <form method="POST" action="/medicalexaminations">
                    @csrf
                    <div class="form-group">
                        <label for="">Exam ID :</label>
                        <input class="form-control mb-3" type="text" name="merd_exam_id">
                        <label for="">User ID :</label>
                        <input class="form-control mb-3" type="text" name="user_id">
                        <div class="form-group">
                            <label name="med_examiner_status">Examiner Status :</label>
                            <select class="form-control" name="med_examiner_status">
                                <option hidden selected> Sila Pilih </option>
                                <option value="approve">Approve</option>
                                <option value="reject">Reject</option>
                            </select>
                        </div>
                        <label for="">Heartbeat Rate :</label>
                        <input class="form-control mb-3" type="text" name="heartbeat_rate">
                        <label for="">BMI :</label>
                        <input class="form-control mb-3" type="text" name="bmi">
                        <label for="">Jumlah :</label>
                        <input class="form-control mb-3" type="text" name="jumlah">
                        <label for="">Vendor Name :</label>
                        <input class="form-control mb-3" type="text" name="vendor_name">
                        <label for="">Department :</label>
                        <input class="form-control mb-3" type="text" name="department">
                        <div class="form-group">
                            <label name="position">Position :</label>
                            <select class="form-control" id="sel1" name="positon">
                                <option hidden selected> Sila Pilih </option>
                                <option value="mechanic">mechanic</option>
                                <option value="technician">technician</option>
                                <option value="engineer">Engineer</option>
                            </select>
                        </div>

                        </br>

                    </div>
                    <input type="hidden" name="medicalexam" value=1>
                    <button class="btn btn-primary" type="submit">Tambah</button>
                </form>

                <div class="row my-4">
                    <div class="col-12">
                        <h3>Medical Exam</h3>
                        <table class="table table-bordered">
                            <tr>
                                <th>Exam ID</th>
                                <th>User ID</th>
                                <th>Examiner Status</th>
                                <th>heartbeat rate</th>
                                <th>Weight </th>
                                <th>BMI</th>
                                <th>vendor name </th>
                                <th>department </th>
                                <th>position </th>


                            </tr>
                            @foreach ($medicalexaminations as $medicalexamination)
                            <tr>
                                <td>{{ $medicalexminations['med_exam_id'] }}</td>
                                <td>{{ $medicalexminations['user_id'] }}</td>
                                <td>{{ $medicalexminations['med_examiner_status'] }}</td>
                                <td>{{ $medicalexminations['heartbeat_rate'] }}</td>
                                <td>{{ $medicalexminations['weight'] }}</td>
                                <td>{{ $medicalexminations['bmi'] }}</td>
                                <td>{{ $medicalexminations['vendor_name'] }}</td>
                                <td>{{ $medicalexminations['department'] }}</td>
                                <td>{{ $medicalexminations['position'] }}</td>
                            </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop