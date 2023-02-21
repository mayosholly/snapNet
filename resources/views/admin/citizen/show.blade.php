@extends('layouts.app')

@section('header')
    Dashboard
@endsection

@section('nav')
    Dashboard
@endsection

@section('main')

<table class="table table-hover">
    <th>
        <tr>
            <td scope='col'>Citizen Id</td>
            <td scope='col'>Citizen Name</td>
            <td scope='col'>Gender</td>
            <td scope='col'>Address</td>
            <td scope='col'>Phone Number</td>

        </tr>
    </th>
    <tbody>

        <tr>
            <td scope='row'>{{ $citizen->id }}</td>
            <td scope='row'>{{ $citizen->full_name }}</td>
            <td scope='row'>{{ $citizen->gender }}</td>
            <td scope='row'>{{ $citizen->address }}</td>
            <td scope='row'>{{ $citizen->phone }}</td>


        </tr>

    </tbody>
</table>
@endsection
