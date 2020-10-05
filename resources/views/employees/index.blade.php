@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card container">
                <div class="card-header row">
                    <div class="col my-auto">
                        <h4>Employees</h4>
                    </div>
                    <div class="col text-right pr-2">
                        <a class="btn btn-primary" href=" {{ route('employee-create') }} ">New Employee</a>
                    </div>
                </div>

                <div class="card-body">
                    <ul>
                        @foreach ($employees as $employee)
                        <li>
                            <a href=" {{ route('employee-show', $employee -> id) }} ">
                                {{ $employee -> name }}
                                {{ $employee -> lastname }}    
                            </a>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection