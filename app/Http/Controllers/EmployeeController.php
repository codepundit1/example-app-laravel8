<?php

namespace App\Http\Controllers;
use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    //add
    function addEmployee(Request $req)
    {
        $employee = new Employee;
        $employee->username=$req->username;
        $employee->email=$req->email;
        $employee->password=$req->password;
        $employee->save();
        return redirect('employeeData');
    }

    //fetch
    public function index()
    {
        //fetch data from database
        $data = Employee::all();
        // $data = Employee::paginate(5); //>>>>>>>>>to see limit data
        return view('employee-data', ['employee_list'  => $data]);
    }

    //delete
    public function delete($id)
    {
        $data = Employee::find($id);
        $data -> delete();
        return redirect('employeeData');

    }

    //show data for update

    public function showData($id)
    {
        $data = Employee::find($id);
        return view('edit', ['data'=>$data]);
    }

    public function update(Request $req)
    {
        $data = Employee::find($req->id);
        $data->username=$req->username;
        $data->email=$req->email;
        $data->password=$req->password;
        $data->save();

        return redirect('employeeData');

    }

}
