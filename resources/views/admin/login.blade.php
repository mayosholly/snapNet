@extends('layouts.app')


@section('nav')
    Dashboard
@endsection

@section('main')
<form action="{{ route('login.postAdminLogin') }}" method="post" enctype="multipart/form-data">
    @if (Session::has('success'))
    <div class="alert alert-success">
        {{ Session::get('success') }}
    </div>
@endif
@if (Session::has('fail'))
<div class="alert alert-danger">
    {{ Session::get('fail') }}
</div>

@endif

    @csrf

        <div class="form-group">
            <label for="email">Email address</label>
            <input type="text" name="email" class="form-control" id="email" value="{{ old('email') }}" enc >
            <span>
                @error('email')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
                @enderror
            </span>

        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" name="password" class="form-control" id="password" value="{{ old('password') }}" >
            <span>
                @error('password')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>

                @enderror
            </span>

        </div>

        <button type="submit" name="submit" class="btn btn-primary mt-4">Submit</button>
    </form>
@endsection
