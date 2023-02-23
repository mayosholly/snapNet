@extends('layouts.app')


@section('nav')
    Dashboard
@endsection

@section('main')
<div>
<a href="{{ route('citizen.create') }}" class="btn btn-primary">Register Citizen</a>

<form action="" style="display:flex">
    <input type="text" name="search" placeholder="Search" id="search">
    <input type="submit" class="btn btn-sm btn-primary" value="Search">
</form>
</div>
<table class="table table-hover">
    <th>
        <tr>
            <td scope='col'>Citizen Id</td>
            <td scope='col'>Citizen Name</td>
            <td scope='col'>Gender</td>
            <td scope='col'>View Details</td>

        </tr>
    </th>
    <tbody>
        @forelse ($citizens as $citizen )

        <tr>
            <td scope='row'>{{ $citizen->id }}</td>
            <td scope='row'>{{ $citizen->full_name }}</td>
            <td scope='row'>{{ $citizen->gender }}</td>
            <td scope='row'><a href="{{ route('citizen.show', $citizen) }}" class="btn btn-primary">View Detail</a></td>


        </tr>
        @empty
        Empty
    @endforelse

    </tbody>
</table>
<div class="blog-pagination">
        {{ $citizens->links() }}
      </div>
@endsection
