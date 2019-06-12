<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use DB;
use DateTime;

class Department extends Model
{
    protected $table = 'department';
    protected $fillable = [
        'id',
        'dep_code',
        'dep_name',
        'dep_manager',
        'dep_emp_total',
        'created_at',
        'updated_at'
    ];

    public function employee() {
        return $this->hasMany('App\Models\Employee', 'id', 'dep_id');
    }
    
    public function getDepartment() {
        $department = Department::all();
        return $department;
    	// return department::orderBy('dep_name', 'ASC')->paginate(10);
    }

    public static function store($data) {
    	$department = new Department();
        $department->dep_code = $data['dep_code'];
    	$department->dep_name = $data['dep_name'];
    	$department->dep_manager = $data['dep_manager'];
    	$department->dep_emp_total = $data['dep_emp_total'];
        $department->created_at = new DateTime();
        $department->updated_at = new DateTime();
        $department->save();
        return $department;
    }

    public static function getSua($data, $id) {
    	$department = new Department();
    	$department = $department->find($id);
        $department->dep_code = $data['dep_code'];
    	$department->dep_name = $data['dep_name'];
    	$department->dep_manager = $data['dep_manager'];
    	$department->dep_emp_total = $data['dep_emp_total'];
        $department->created_at = new DateTime();
        $department->updated_at = new DateTime();
        $department->save();
        unset($data['_token']);
        unset($data['_method']);
        return $department;
    }
}



