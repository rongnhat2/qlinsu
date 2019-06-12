<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Department;
use App\Models\Employee;
use App\Http\Requests\createEmployeeRequest;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    protected $employee;
    public function __construct(Employee $employee, Department $department) {
        $this->employee = $employee;
        $this->department = $department;
    }

    public function index()
    {

        $getDep = $this->department->getDepartment();
        $data = $this->employee->getEmployee();
        return view('employee.index',['employee' => $data, 'getDep' => $getDep]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $getDep = $this->department->getDepartment();
        return view('employee.create', ['getDep' => $getDep]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(createEmployeeRequest $request)
    {
        Employee::store($request->all());
        return redirect('employee');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // $getDep = $this->department->getDepartment();
        // return view('employee.edit', ['getDep' => $getDep]);
        $employee = Employee::find($id);
        return view('employee.edit', ['employee' => $employee]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(createEmployeeRequest $request, $id)
    {
        Employee::getSua($request->all(), $id);
        return redirect('employee');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $employee = Employee::find($id);
        $employee->delete();
        return redirect('employee');
    }
}
