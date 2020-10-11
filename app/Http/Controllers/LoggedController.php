<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee; // tiriamo dentro i model di employee e location che serviranno dopo
use App\Location;

class LoggedController extends Controller
{
    public function __construct() // questa modifica al contruct è fondamentale perche fa capire a laravel che le rotte di questo controller sono accessibili solo ad utenti registrati. Il resto del controller non ha alterazioni. è da tener presente che un utente non registrato non ha accesso a queste rotte. Un middleware è una specie di funzione di filtro che regola chi può accere. Approfondimento sulla documentazione laravel https://laravel.com/docs/7.x/middleware


    // Attenzione: è possibile creare diverse categorie di utenti con accessi a diverse rotte. Es. lo sviluppatore potrebbe essere un utente god che fa tutto mentre un user utente registrato al sito farne solo alcune/altre
    {
        $this->middleware('auth');
    }

    public function destroy($id){

        $employee = Employee::findOrFail($id);

        $employee -> delete();

        return redirect() -> route('employee-index');
    }

    public function edit($id){

        $employee = Employee::findOrFail($id);

        $locations = Location::all();

        return view('employees.edit', compact('employee', 'locations'));
    }

    public function update(Request $request, $id){

        $employee = Employee::findOrFail($id);

        $data = $request -> all();

        $employee -> update($data);

        return redirect() -> route('employee-index');
    }

    public function create(){

        $locations = Location::all();

        return view('employees.create', compact('locations'));
    }

    public function store(Request $request){

        $data = $request -> all();

        Employee::create($data);

        return redirect() -> route('employee-index');

    }
}
