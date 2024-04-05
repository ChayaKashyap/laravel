<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\WeightModel;

class WeightController extends Controller
{
    public function weight(){
		return view('admin.weight');
	}
	
	public function addweight(Request $req){
		//dd($req->all());
		$data = [
		'weight' => $req->weight,
		'created_at' => date('Y-m-d'),
		'updated_at' => date('Y-m-d')
		];
		$insert = DB::table('weight')->insert($data);
		if($insert == 1){
			return redirect()->back();
		}
	}
	
	public function showweight(){
		$getweight['weightget'] = DB::table('weight')->get();
		return view('admin.weight_table', $getweight);
	}
	
	public function editweight($id){
		$edit['editweight'] = DB::table('weight')->find($id);
		return view('admin.edit_weight', $edit);
	}
	
	public function updateweight(Request $updatedweight){
		$id = $updatedweight->id;
		$data = [
			'weight' => $updatedweight->weight,
			'updated_at' => date('Y-m-d')
		];
		$update = DB::table('weight')->where('id',$id)->update($data);
		if($update == 1){
			return redirect()->to('/admin/showweight');
		}
	}
	
	public function delweight($id){
		$delete = DB::table('weight')->where('id', $id)->delete();
		if($delete == 1){
			return redirect()->back();
		}
	}
	
}
