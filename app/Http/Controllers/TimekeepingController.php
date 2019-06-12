<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\createTimekeepingRequest;
use App\Http\Controllers\Controller;
use App\Models\Timekeeping;
use App\Models\Employee;
use DB; 

class TimekeepingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    protected $employee;
    public function __construct(Employee $employee, Timekeeping $timekeeping) {
        $this->employee = $employee;
        $this->timekeeping = $timekeeping;
    }

    public function index()
    {
        $getEmp = $this->employee->getEmployee();
        $data = $this->timekeeping->getTimekeeping();
        return view('users.timekeeping.index',['timekeeping' => $data, 'getEmp' => $getEmp]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $timekeeping = new Timekeeping();
        return view('users.timekeeping.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(createTimekeepingRequest $request)
    {
        Timekeeping::store($request->all());
        return redirect('timekeeping');
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
        $timekeeping = Timekeeping::find($id);
        return view('users.timekeeping.edit', ['timekeeping' => $timekeeping]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(createTimekeepingRequest $request, $id)
    {
        Timekeeping::getSua($request->all(),$id);
        return redirect('timekeeping');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $timekeeping = Timekeeping::find($id);
        $timekeeping->delete();
        return redirect('timekeeping');
    }
}

// $table->bigIncrements('id');
//             $table->bigInteger('user_code');
//             $table->string('password', 255);
//             $table->string('username', 50);
//             $table->bigInteger('role_id')->unsigned();
//             $table->foreign('role_id')->references('id')->on('role');
//             $table->bigInteger('emp_id')->unsigned();
//             $table->foreign('emp_id')->references('id')->on('employee');
//             $table->timestamps();
//             $table->softDeletes();
