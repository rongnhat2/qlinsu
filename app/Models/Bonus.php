<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use DB;
use DateTime;

class Bonus extends Model
{
    protected $table = 'bonus';

    public function getBonus() {
    	return Bonus::orderBy('id', 'ASC')->paginate(10);
    }

    public function employee()
    {
        return $this->belongsTo('App\Models\employee','emp_id','id');
    }

    public function salary() {
        return $this->hasMany('App\Models\Bonus', 'id', 'bonus_id');
    }

    public static function store($data) {
    	$bonus = new Bonus();
    	$bonus->emp_id = $data['emp_id'];
    	// $bonus->fullname = $data['fullname'];
    	$bonus->cause_bonus = $data['cause_bonus'];
    	$bonus->describe = $data['describe'];
    	$bonus->money = $data['money'];
        $bonus->date_bonus = $data['date_bonus'];
    	$bonus->save();
    	return $bonus;
    }

    public static function getSua($data, $id) {
    	$bonus = new Bonus();
    	$bonus = $bonus->find($id);
        $bonus->emp_id = $data['emp_id'];
        // $bonus->fullname = $data['fullname'];
        $bonus->cause_bonus = $data['cause_bonus'];
        $bonus->describe = $data['describe'];
        $bonus->money = $data['money'];
        $bonus->date_bonus = $data['date_bonus'];
    	$bonus->save();
    	unset($data['_token']);
        unset($data['_method']);
    	return $bonus;
    }
}
