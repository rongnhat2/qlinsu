<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use DB;
use DateTime;

class User extends Model
{
	protected $table = 'users';

    public function getUser()
    {
        return User::orderBy('username', 'ASC')->paginate(10);
    }

    public static function store($data) {
    	$user = new User();
    	// $user->id = $data['id'];
    	$user->email= $data['email'];
        $user->password = bcrypt($data['password']);
        $user->username = $data['username'];
        $user->role_id =  $data['role_id'];
        $user->created_at = new DateTime();
        $user->updated_at = new DateTime();
        $user->save();
        return $user;
    }

    public static function getSua($data, $id) {
        
    }

    
}
