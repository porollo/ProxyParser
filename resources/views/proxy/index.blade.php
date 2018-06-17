@extends('layout')

@section('content')

    <table class="table table-dark">
        <thead>
        <tr>
            <th scope="col">IP Address</th>
            <th scope="col">Port</th>
            <th scope="col">Country</th>
            <th scope="col">Anonymity</th>
            <th scope="col">Availability</th>
            <th scope="col">Ping</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <th scope="row">127.0.0.1</th>
            <td>9995</td>
            <td>Russia</td>
            <td>High</td>
            <td>High</td>
            <td>15.6 ms.</td>
        </tr>
        </tbody>
    </table>

@endsection