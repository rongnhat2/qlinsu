<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\createSalaryRequest;
use App\Http\Controllers\Controller;
use App\Models\Salary;
use App\Models\Timekeeping;
use DB;


class SalaryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    protected $salary;
    protected $timekeeping;
    function __construct (Salary $salary, Timekeeping $timekeeping){
        $this->timekeeping = $timekeeping;
        $this->salary = $salary;
    }

    public function index()
    {
        $getTime = $this->timekeeping->getTimekeeping();
        $data = $this->salary->getSalary();
        return view('salary.index',['salary' => $data, 'getTime' => $getTime]);
    }
      
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $salary = new Salary();
        return view('salary.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        Salary::store($request->all());
        return redirect('salary');
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
        //
        $salary = Salary::find($id);
        return view('salary.edit', ['salary' => $salary]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        Salary::getSua($request->all(),$id);
        return redirect('salary');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $salary = Salary::find($id);
        $salary->delete();
        return redirect('salary');
    }
}
