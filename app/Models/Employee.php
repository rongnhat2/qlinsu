<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use DB;
use App\Models\Timekeeping;
use DateTime;

class Employee extends Model
{
    protected $table = 'employee';

    public function getEmployee() {
        $employee = Employee::all();
        return $employee;
    }

    public function department()
    {
        return $this->belongsTo('App\Models\Department','dep_id','id');
    }

    public function bonus() {
        return $this->hasMany('App\Models\Bonus', 'id', 'emp_id');
    }

    public function discipline() {
        return $this->hasMany('App\Models\Discipline', 'id', 'emp_id');
    }

    public function timekeeping() {
        return $this->hasMany('App\Models\Timekeeping', 'id', 'emp_id');
    }

    

    public static function store($data) {
    	//sssdd($data);
    	$employee = new Employee();
        $employee->emp_code = $data['emp_code'];
    	$employee->fullname = $data['fullname'];
    	$employee->birthday = $data['birthday'];
    	$employee->gender = $data['gender'];
    	$employee->dep_id = $data['dep_id'];
    	$employee->hometown = $data['hometown'];
    	$employee->address = $data['address'];
    	$employee->level = $data['level'];
    	$employee->possition = $data['possition'];
    	$employee->phone = $data['phone'];
    	$employee->email = $data['email'];
    	$employee->tax_code = $data['tax_code'];
        $employee->created_at = new DateTime();
        $employee->updated_at = new DateTime();
        $employee->save();


        return $employee;
    }

    public static function getSua($data, $id) {
        $employee = new Employee();
        $employee = $employee->find($id);
        $employee->emp_code = $data['emp_code'];
        $employee->fullname = $data['fullname'];
        $employee->birthday = $data['birthday'];
        $employee->gender = $data['gender'];
        $employee->dep_id = $data['dep_id'];
        $employee->hometown = $data['hometown'];
        $employee->address = $data['address'];
        $employee->level = $data['level'];
        $employee->possition = $data['possition'];
        $employee->phone = $data['phone'];
        $employee->email = $data['email'];
        $employee->tax_code = $data['tax_code'];
        $employee->created_at = new DateTime();
        $employee->updated_at = new DateTime();
        $employee->save();
        unset($data['_token']);
        unset($data['_method']);
        return $employee;
    }
}




