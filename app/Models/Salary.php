<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use DB;
use DateTime;

class Salary extends Model
{
    protected $table = 'salary';
    public function getSalary() {
    	return Salary::orderBy('fullname', 'ASC')->paginate(10);
    }

    public function timekeeping()
    {
        return $this->belongsTo('App\Models\Timekeeping','timekeeping_id','id');
    }

    public function bonus()
    {
        return $this->belongsTo('App\Models\Bonus','bonus_id','id');
    }

    public function diskeepline()
    {
        return $this->belongsTo('App\Models\Discipline','discipline_id','id');
    }
    public static function store($data) {
        $salary = new Salary();
        $salary->timekeeping_id = $data['timekeeping_id'];
        $salary->salary = $data['salary'];
        $salary->fullname = $data['salary'];

        $salary->standard_workday = DB::table('timekeeping')->where('id',$salary->timekeeping_id)->value('workday');
        $ngayOT =  DB::table('timekeeping')->where('id',$salary->timekeeping_id)->value('ot')/8;
        $salary->workday = $salary->standard_workday + $ngayOT;
        $salary->bonus_id = 0;
        $salary->discipline_id = 0;
        $salary->insurance = 8;
        $salary->tax_code_tax = 0;
        $salary->allowan = 0;


        $luongcoban = $salary->salary;
        $baohiem = $luongcoban*8/100;
        $salary->OT = $luongcoban*150/100/30*$ngayOT;
        $sum_salary1 = ($luongcoban/$salary->standard_workday)*$salary->workday + $salary->OT + $salary->bonus_id - $salary->discipline_id - $baohiem + $salary->allowan;
        if ($sum_salary1 < 9000000) {
            $salary->sum_salary =  $sum_salary1;
            $salary->tax_code_tax = 0;
        }else{
            $salary->tax_code_tax = 10;
            $salary->sum_salary = $sum_salary1 - $sum_salary1*10/100;
        }

        $salary->created_at = new DateTime();
        $salary->updated_at = new DateTime();
        $salary->save();

        return $salary;
    }

    public static function getSua($data, $id) {
        
        $salary = new Salary();
        $salary = $salary->find($id);

        $salary->salary = $data['salary'];
        // $salary->standard_workday = $data['standard_workday'];
        $salary->bonus_id = $data['bonus_id'];
        $salary->discipline_id = $data['discipline_id'];
        $salary->allowan = $data['allowan'];

        $ngayOT =  DB::table('timekeeping')->where('id',$salary->timekeeping_id)->value('ot')/8;
        $luongcoban = $salary->salary;
        $baohiem = $luongcoban*8/100;

        $salary->OT = $luongcoban*150/100/30*$ngayOT;
        $salary->workday = $salary->standard_workday + $ngayOT;

        $sum_salary1 = ($luongcoban/$salary->standard_workday)*$salary->workday + $salary->OT + $salary->bonus_id - $salary->discipline_id - $baohiem + $salary->allowan;
        if ($sum_salary1 < 9000000) {
            $salary->sum_salary =  $sum_salary1;
            $salary->tax_code_tax = 0;
        }else{
            $salary->tax_code_tax = 10;
            $salary->sum_salary = $sum_salary1 - $sum_salary1*10/100;
        }

        // echo $salary->OT;

        // // echo $salary->timekeeping_id;
        // // $salary->OT = $data['OT'];
        // $delta = DB::table('timekeeping')->where('id',$salary->timekeeping_id)->value('ot');
        // echo $delta;
        // // foreach ($delta as $value) {
        // //     # code...
        // //     echo $value, "<br>";
        // // }
        // die;

        $salary->created_at = new DateTime();
        $salary->updated_at = new DateTime();
        $salary->save();

        unset($data['_token']);
        unset($data['_method']);

        return $salary;
    }
}


