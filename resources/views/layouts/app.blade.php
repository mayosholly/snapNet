
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Registration System - PHP and MySQL</title>
    <link rel="stylesheet" href="{{ url('assets/bootstrap.min.css') }}">

</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="{{ route('index.adminDashboard') }}">Snap Net Test</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">

        <li class="nav-item active">
            <a class="nav-link" href="{{ route('index.adminDashboard') }}">Home <span class="sr-only">(current)</span></a>
        </li>

        @if (session()->has('loginId'))
        <li class="nav-item active">
            <a class="nav-link" href="{{ route('logout.adminLogout') }}">Logout</a>
        </li>
        @endif
        </ul>
    </div>
    </nav>


<!-- body area started form here -->

<div class="container w-50 mt-5">
    <div class="card">
        <div class="card-header bg-dark">
            <h5 class="text-white">@yield('nav')</h5>
        </div>
        <div class="card-body">

@yield('main')

</div>
</div>
</div>



