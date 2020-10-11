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
                            {{-- qua utilizzando le relazioni tra tabelle create utilizzando laravel (migrations e metodi nei model (hasMany ecc)) posso fare delle query con join tra tabelle semplicemente facendo -> location (prendo la riga nella tabella location con id corrispondente a quello della colonna location_id dell'employee) --}}
                            {{ $employee -> location -> name }}
                            ( {{ $employee -> location -> city }} )
                        </li>
                        <li>
                            Date of Birth: {{ $employee -> date_of_birth }}
                        </li>
                    </ul>
                    {{-- @auth è come fare un if (utente loggato). In questo caso se l'utente è loggato mostro i tasti edit e delete. altrimenti mostro un link alla pagina di login. Se togliessi questo auth e lasciassi i tasti anche ad utenti non loggati al clik di un utente non loggato sul tasto verrebbe comunque reiderizzato alla pagina di login. con l'auth è comunque più elegante --}}
                    @auth
                    <a class="btn btn-primary" href=" {{ route('employee-edit', $employee -> id) }} ">EDIT</a>
                    <a class="btn btn-danger" href=" {{ route('employee-destroy', $employee -> id) }} ">DELETE</a>
                    @else
                    <a href=" {{ url('/login') }} ">Log in to Edit/Update Employees</a>    
                    @endauth
                </div>
            </div>
        </div>
    </div>
</div>
@endsection