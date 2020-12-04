<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Employee;


class EmployeeController extends Controller
{
    public function index()
    {
        $employees = Employee::all();
        return view('employees.index', compact('employees'));
    }

    public function show($id)
    {
        $employee = DB::select('call sp_getEmployeeFriends(?)',[$id]);
        $employee = Employee::hydrate($employee);
        dd($employee);
        return view('employees.show', compact('employee'));
    }
}
