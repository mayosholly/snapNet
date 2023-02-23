@extends('layouts.app')


@section('nav')
    Register
@endsection


@section('main')
        <form action="{{ route('citizen.store') }}" method="post">
            @csrf

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

                <div class="form-group">
                    <label for="full_name">Full Name</label>
                    <input type="text" name="full_name" class="form-control" id="full_name" value="{{ old('full_name') }}">
                    @error('full_name')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                    @enderror
                </div>


                <div class="form-control">
                    <label for="gender"> Gender </label>
                    <select name="gender" id="gender">
                    <option selected disabled> Select Gender  </option>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                  </select>
                </div>
                  @error('gender')
                            <div class="alert alert-danger">
                                {{ $message }}
                            </div>
                        @enderror
                </div>

                <div class="form-group" >
                    <label for="address">Address</label>
                    <input type="text" name="address" class="form-control" id="address" value="{{ old('address') }}">
                @error('address')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
                </div>

                <div class="form-group">
                    <label for="phone">Phone</label>
                    <input type="text" name="phone" class="form-control" id="phone" value="{{ old('phone') }}" >
                @error('phone')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
                </div>

                <div class="form-control">
                    <label for="ward_id"> Wards </label>
                    <select name="ward_id" id="ward_id">
                    <option selected disabled> Select Ward  </option>
                    @foreach ($wards as $ward)
                        <option value="{{ $ward->id }}">{{ $ward->name }}</option>
                    @endforeach
                  </select>
                </div>
                  @error('ward_id')
                            <div class="alert alert-danger">
                                {{ $message }}
                            </div>
                        @enderror
                </div>

                <button type="submit" name="submit" class="btn btn-sm btn-primary mt-4">Submit</button>
            </form>

@endsection
