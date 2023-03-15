<?php

namespace App\Http\Controllers;

use App\Models\EmpAllowanceDetails;
use App\Models\Employee;
use Illuminate\Http\Request;

class GenEmpSalaryController extends Controller
{
    public function genform()
    {
        $data = [];
        return view('admin.Salary.GenSalaryForm', compact('data'));
    }
    public function emp_list(Request $request)
    {
        $month = $request->input('month');
        $year = $request->input('year');
        $data = Employee::with('user')->get();
        $data = [
            'month' => $month,
            'year' => $year,
            'data' => $data
        ];
        return view('admin.Salary.GenSalaryForm', compact('data'));
    }
    public function gensalary(Request $request)
    {
        $emp_id = $request->input('emp_id');
        $data = Employee::with('user', 'emp_allowance')->whereIn('id', $emp_id)->get();
        //$emp_allowance=EmpAllowanceDetails::where('')->get();
        return $data[0]->emp_allowance;
    }
}
