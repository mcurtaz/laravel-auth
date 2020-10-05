@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Employees</div>

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