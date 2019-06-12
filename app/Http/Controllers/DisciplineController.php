<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\createDisciplineRequest;
use App\Http\Controllers\Controller;
use App\Models\Discipline;
use App\Models\Employee;
use DB;

class DisciplineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    protected $discipline;
    protected $employee;
    function __construct(Discipline $discipline, Employee $employee) {
        $this->discipline = $discipline;
        $this->employee = $employee;
    }

    public function index()
    {
        $getEmp = $this->employee->getEmployee();
        $data = $this->discipline->getDiscipline();
        return view('discipline.index',['discipline' => $data, 'getEmp' => $getEmp]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $discipline = new Discipline();
        return view('discipline.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(createDisciplineRequest $request)
    {
        Discipline::store($request->all());
        return redirect('discipline');
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
        $discipline = Discipline::find($id);
        return view('discipline.edit', ['discipline' => $discipline]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(createDisciplineRequest $request, $id)
    {
        Discipline::getSua($request->all(),$id);
        return redirect('discipline');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $discipline = Discipline::find($id);
        $discipline->delete();
        return redirect('discipline');
    }
}
