<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;

class GuestController extends Controller
{
    public function index(){

        $employees = Employee::all();

        return view('employees.index', compact('employees'));
    }

    public function show($id){

        $employee = Employee::findOrFail($id);

        return view('employees.show', compact('employee'));
    }
}
