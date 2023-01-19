<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class EmployeeController extends Controller
{
    //
    public function show(){
        $data = Employee::all();
    return view('employeList',['employees'=>$data]);
    }

    function addData(Request $req){
        $employee = new Employee;
        $employee->name = $req->name;
        $employee->email = $req->email;
        $employee->address = $req->address;
        $employee->save();
        return redirect('employeList');
        
    }
    function destroy($id){
        //dd($emp_id);
         Employee::find($id)->delete();
        return redirect('employeList'); 
    }
    function showData($id){
        $data =  Employee::find($id);
        return view('updateEmploye',['data'=>$data]);
}
    function update( Request $req){
    $data = Employee::find($req->id);
    $data->name = $req->name;
    $data->email = $req->email;
    $data->address = $req->address;
    $data->save();
    return redirect('employeList'); 
    }
}
