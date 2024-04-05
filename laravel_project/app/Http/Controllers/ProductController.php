<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\ProductModel;

class ProductController extends Controller
{
    public function addcakes(){
		$array['category'] = DB::table('category')->get();
		
		$array['fetchweight'] = DB::table('weight')->get();
		return view('admin.addcakes', $array);
		
		return view('admin.addcakes',$getallweight);
	}
	
	public function addproduct(Request $req){
		$weight = json_encode($req->weight);
		$data = [
		'weight' => $weight,
		'category' => $req->category,
		'flavour' => $req->flavour,
		'cakename' => $req->cakename,
		'price' => $req->price,
		'description' => $req->description,
		'created_at' => date('Y-m-d'),
		'updated_at' => date('Y-m-d')
		];
		$insert = DB::table('product')->insert($data);
		if($insert){
			return redirect()->back();
		}
	}
	
	public function showproduct(){
		$getproduct['getproducts'] = DB::table('product')->get();
		return view('/admin/product_table',$getproduct);
	}
	
	public function editproduct($id){
		$array['editpro'] = DB::table('product')->find($id);
		$array['category'] = DB::table('category')->get();
		$array['fetchweight'] = DB::table('weight')->get();
		// $count = 0;
		// foreach($array['category'] as $item){
			// if($item->id == $array['editpro']->category){
				// $array['category'][$count]->selected = true;
			// }else{
				// $array['category'][$count]->selected = false;
			// }
			// $count++;
		// }
		
		return view('/admin/edit_product',$array);
		
	}	
	
	public function updatepro(Request $req){
		$id = $req->id;
		$weight = json_encode($req->weight);
		$data = [
		'weight' => $weight,
		'category' => $req->category,
		'flavour' => $req->flavour,
		'cakename' => $req->cakename,
		'price' => $req->price,
		'description' => $req->description,
		'updated_at' => date('Y-m-d')
		];
		$update = DB::table('product')->where('id',$id)->update($data);
		if($update){
			return redirect()->to('/admin/showproduct');
		}
	}
	
}
