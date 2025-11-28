<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    
    public function byId(){

        $employees = Employee::orderBy("emp_id","asc")->get();
        
        return view('employees.index',compact('employees'));


    }

    public function byLastName(){

        $employees = Employee::orderBy("emp_lastname","asc")->orderBy("emp_firstname","asc")->get();
        return view('employees.index',compact('employees'));
    }

    public function lastNameStartsWith(){

        $employees = Employee::where('emp_lastname', 'like', 'A%')->get();
        return view('employees.index',compact('employees'));

    }

    public function bornIn(){
        $employees = Employee::whereYear('emp_birth_date', '1990')->get();
        return view('employees.index',compact('employees'));

    }

}
