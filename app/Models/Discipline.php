<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use DB;
use DateTime;

class Discipline extends Model
{
    protected $table = 'discipline';

    public function getDiscipline() {
    	return Discipline::orderBy('id', 'ASC')->paginate(10);
    }

    public function employee()
    {
        return $this->belongsTo('App\Models\employee','emp_id','id');
    }

    public function salary() {
        return $this->hasMany('App\Models\Discipline', 'id', 'discipline_id');
    }

    public static function store($data) {
    	$discipline = new Discipline();
    	$discipline->emp_id = $data['emp_id'];
    	// $discipline->fullname = $data['fullname'];
    	$discipline->cause_discipline = $data['cause_discipline'];
    	$discipline->describe = $data['describe'];
    	$discipline->money = $data['money'];
        $discipline->date_discipline = $data['date_discipline'];
    	$discipline->save();
    	return $discipline;
    }

    public static function getSua($data, $id) {
    	$discipline = new Discipline();
    	$discipline = $discipline->find($id);
    	$discipline->emp_id = $data['emp_id'];
        // $discipline->fullname = $data['fullname'];
        $discipline->cause_discipline = $data['cause_discipline'];
        $discipline->describe = $data['describe'];
        $discipline->money = $data['money'];
        $discipline->date_discipline = $data['date_discipline'];
    	$discipline->save();
    	unset($data['_token']);
        unset($data['_method']);
    	return $discipline;
    }
}
