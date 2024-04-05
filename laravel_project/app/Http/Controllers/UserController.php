<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserModel;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function user(){
		return view('user');
	}
	
	public function __construct(){
		$this->usermodel = new UserModel();
	}
	
	public function userinsert(Request $req){
		
		//FORM'S VALIDATION
		$req->validate([
			'name' => 'required',
			'email' => 'required|email',
			'password' => 'required'
		]);
		
		//DATA INSERT USING MODEL 
		
		/*dd($req->all());
		$usermodel = new UserModel;
		$usermodel->name = $req->name;
		$usermodel->email = $req->email;
		$usermodel->password = md5($req->password);
		$usermodel->save();*/
		
			
		
		$data = [
			'name' => $req->name,
			'email' => $req->email,
			'password' => md5($req->password)//md5 is used for encrypt password save in database
		];
		
		//DATA INSERT USING QUERY BUILDER
			// $insert = DB::table('user')->insert($data);
		
		$insert = $this->usermodel->insertuser($data);
		
		if($insert == 1){
			return redirect('/user')->with('insertuser','User Inserted Successfully');
		}
		
		
		
		
		
	}
	
	public function show(){
		
		//DATA GET USING MODEL
		
		// $usermodel = new UserModel;
		// $show['userdata'] = $usermodel->get();
		
		
		//DATA GET USING QUERY BUILDER
		
		$show['userdata'] = DB::table('user')->get();
		// $show['userdata'] = DB::table('user')->select('id','name')->where('id', 6)->get();
		//$show['userdata'] = DB::table('user')->select('id','name')->whereIn('id', [1,5])->get();
		//$show['userdata'] = DB::table('user')->select('id','name')->whereNotIn('id', [7,8])->get();
		//$show['userdata'] = DB::table('user')->select('id','name')->whereBetween('id', [1,4])->get();
		//$show['userdata'] = DB::table('user')->select('id','name')->where('id', 1)->orwhere('id', 7)->get();
		//$show['userdata'] = DB::table('user')->select('id','name')->where('id', 1)->orwhere(function($query){$query->where('name','anjali')->where('email','anjali@gmail.com');})->get();
		return view('user_table',$show);
	}
	
	public function edit($id){
		//$edit['editdata'] =  DB::select('select * from user where id = '.$id);
		//$edit['editdata'] =  DB::table('user')->find($id);
		$edit['editdata'] = DB::table('user')->where('id', $id)->get();
		return view('edituser', $edit);
		
	}
	
	public function userupdate(Request $request, $id){
		$data = [
			'name' => $request->name,
			'email' => $request->email,
		];
		
		$update = DB::table('user')->where('id', $id)->update($data);
		if($update == 1){
			return redirect('/user');
		}	
	}
	
	public function del($id){
		
		$deleted = DB::table('user')->where('id', $id)->delete();
		if($deleted == 1){
			return redirect('/usershow');
		}
	}
	
}
