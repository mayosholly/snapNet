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
            <td scope='col'>Ward</td>
            <td scope='col'>LGA</td>
            <td scope='col'>State</td>

        </tr>
    </th>
    <tbody>

        <tr>
            <td scope='row'>{{ $citizen->id }}</td>
            <td scope='row'>{{ $citizen->full_name }}</td>
            <td scope='row'>{{ $citizen->gender }}</td>
            <td scope='row'>{{ $citizen->address }}</td>
            <td scope='row'>{{ $citizen->phone }}</td>
            <td scope='row'>{{ $citizen->ward->name }}</td>
            <td scope='row'>{{ $citizen->ward->lga->name }}</td>
            <td scope='row'>{{ $citizen->ward->lga->state->name }}</td>


        </tr>

    </tbody>
</table>
@endsection
