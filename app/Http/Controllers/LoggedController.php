<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;
use App\Location;

class LoggedController extends Controller
{
    public function __construct()
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
}
