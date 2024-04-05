<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class UserModel extends Model
{
    use HasFactory;
	
	public $table="user";
	public $timestamps=false;
	public $primaryKey="id";
	
	public function insertuser($data){
		$insert = DB::table('user')->insert($data);
		return $insert;
	}
	
}
