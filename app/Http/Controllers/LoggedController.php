<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;

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
}
