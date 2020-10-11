<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;

class GuestController extends Controller
{

    // questo controller per gli utenti guest non ha nulla di particolare. è accessibile a tutti e gestisce le rotte di index (lista employee) e di show del singolo employee
    public function index(){

        $employees = Employee::all();

        return view('employees.index', compact('employees'));
    }

    public function show($id){

        $employee = Employee::findOrFail($id);

        return view('employees.show', compact('employee'));
    }
}
