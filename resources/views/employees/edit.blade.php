@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"> {{ $employee -> name }} {{ $employee -> lastname }} </div>

                <div class="card-body">
                    <form method="POST" action="{{ route('employee-update', $employee -> id) }}">
                        @csrf
                        @method('POST')

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right"> Name:</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="name" value="{{ $employee -> name }}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="lastname" class="col-md-4 col-form-label text-md-right">Lastname:</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="lastname" value="{{ $employee -> lastname }}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="Date_of_birth" class="col-md-4 col-form-label text-md-right"> Date of Birth:</label>
                            <div class="col-md-6">
                                <input type="date" class="form-control" name="date_of_birth" value="{{ $employee -> date_of_birth }}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="location_id" class="col-md-4 col-form-label text-md-right"> Location:</label>
                            <div class="col-md-6">
                                <select name="location_id" class="form-control">
                                    @foreach ($locations as $location)
                                        <option 
                                        @if ($location -> id == $employee -> location_id)
                                            selected
                                        @endif
                                        value=" {{ $location -> id }} "> {{ $location -> name }} </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">SAVE</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
