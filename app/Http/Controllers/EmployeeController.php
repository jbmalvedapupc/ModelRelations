<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
        $employee = Employee::with('profile')->findOrFail($id);
        // Uncomment next line to show relationship.
        // dd($employee)
        return view('employees.show', compact('employee'));
    }
}
