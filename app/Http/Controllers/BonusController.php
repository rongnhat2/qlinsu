<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\createBonusRequest;
use App\Http\Controllers\Controller;
use App\Models\Bonus;
use App\Models\Employee;
use DB;

class BonusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    protected $bonus;
    protected $employee;
    public function __construct(Employee $employee, Bonus $bonus) {
        $this->employee = $employee;
        $this->bonus = $bonus;
    }

    public function index()
    {
        $getEmp = $this->employee->getEmployee();
        $data = $this->bonus->getBonus();
        return view('bonus.index',['bonus' => $data, 'getEmp' => $getEmp]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $bonus = new Bonus();
        return view('bonus.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(createBonusRequest $request)
    {
        Bonus::store($request->all());
        return redirect('bonus');
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
        $bonus = Bonus::find($id);
        return view('bonus.edit', ['bonus' => $bonus]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(createBonusRequest $request, $id)
    {
        Bonus::getSua($request->all(),$id);
        return redirect('bonus');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $bonus = Bonus::find($id);
        $bonus->delete();
        return redirect('bonus');
    }
}
