<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Salary;
use DB;
use DateTime;

class Timekeeping extends Model
{
    protected $table = 'timekeeping';

    public function getTimekeeping() {
    	return Timekeeping::orderBy('id', 'ASC')->paginate(10);
    }

    public function employee()
    {
        return $this->belongsTo('App\Models\Employee','emp_id','id');
    }

    public function salary() {
        return $this->hasMany('App\Models\Timekeeping', 'id', 'timekeeping_id');
    }

    public static function store($data) {
    	$timekeeping = new Timekeeping();
    	$timekeeping->emp_id = $data['emp_id'];
        $timekeeping->emp_code = $data['emp_id'];
    	// $timekeeping->fullname = $data['fullname'];
    	$timekeeping->workday = $data['workday'];
    	$timekeeping->OT = $data['OT'];
    	$timekeeping->created_at = new DateTime();
        $timekeeping->updated_at = new DateTime();
    	$timekeeping->save();

    	return $timekeeping;
    }

    public static function getSua($data, $id) {
    	$timekeeping = new Timekeeping();
    	$timekeeping = $timekeeping->find($id);
    	$timekeeping->emp_id = $data['emp_id'];
    	// $timekeeping->fullname = $data['fullname'];
    	$timekeeping->workday = $data['workday'];
    	$timekeeping->OT = $data['OT'];
    	$timekeeping->created_at = new DateTime();
        $timekeeping->updated_at = new DateTime();
        $timekeeping->save();
        unset($data['_token']);
        unset($data['_method']);
        return $timekeeping;
    }
}
