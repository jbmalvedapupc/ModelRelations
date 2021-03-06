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
        // Hahanapin sa database ang employee KASAMA ang profile at friends.
        $employee = Employee::with(['profile', 'friends'])->findOrFail($id);
        // Uncomment next line para makita ang laman ng $employee variable.
        // dd($employee);
        return view('employees.show', compact('employee'));
    }
}
