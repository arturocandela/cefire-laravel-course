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

}
