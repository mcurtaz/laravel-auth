@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    {{ $employee -> name }}
                    {{ $employee -> lastname }}    
                </div>

                <div class="card-body">
                    <ul>
                        <li>
                            Location: 
                            {{ $employee -> location -> name }}
                            ( {{ $employee -> location -> city }} )
                        </li>
                        <li>
                            Date of Birth: {{ $employee -> date_of_birth }}
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection