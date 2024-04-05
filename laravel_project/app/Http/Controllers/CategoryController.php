<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    public function category(){
		return view('admin.category');
	}
	
	public function addcategory(Request $category){
		//dd($category->all());
		//$category = $category->input('category');
		// $image = $category->file('catimage');


		// upload multiplefile -----------

		$images = $category->file('catimage');

		$arr = [];

		foreach ($images as $image) {
            $categ = 'category';
			$rand = rand(1000, 9999);
			$catname = $categ.'-'.$rand.'.jpg';

            $uploadcatimg = $image->move(public_path('admin/category_images'), $catname);

            array_push($arr,$catname);
        }

		$join = implode(',', $arr);

		$data = [
			'category' => $category->category,
			'catimg' => $join,
			'created_at' => date('Y-m-d'),
			'updated_at' => date('Y-m-d'),
		]; 

		// upload multiplefile -----------


		
		//$image = $category->file('catimage');

		// $categ = 'category';
		// $rand = rand(1000, 9999);
		// $catname = $categ.'-'.$rand.'.jpg';
		// $uploadcatimg = $category->catimage->move(public_path('admin/category_images'),$catname);

		//$uploadcatimg = $image->move(public_path('admin/category_images'),$catname);

		// $data = [
			// 'category' => $category->category,
			// 'catimg' => $catname,
			// 'created_at' => date('Y-m-d'),
			// 'updated_at' => date('Y-m-d'),
		// ]; 

		$insert = DB::table('category')->insert($data);
		 if($insert){
        return redirect()->back()->with('success', 'Category added successfully.');
		} else {
			return redirect()->back()->with('error', 'Failed to add category. Please try again.');
		}
	}
	
	public function showcategory(){
		$showcategory['category'] = DB::table('category')->get();
		return view('admin.category_table', $showcategory);
	}
	
	public function editcat($id){
		$data['editcat'] = DB::table('category')->find($id);
		return view('admin.edit_category', $data);
	}
	
	public function updatecategory(Request $updatedcat){
		$id = $updatedcat->id;
		$image = $updatedcat->images;
		
		$editimage = $updatedcat->file('catimage');

		
		//for single image ------
        // $uploadcatimg = $editimage->move(public_path('admin/category_images'), $image,true);
		
		// $data = [
			// 'category' => $updatedcat->category,
			// 'catimg' => $image,
			// 'updated_at' => date('Y-m-d')
		// ];
		//for single image ------
		
		$explode = explode(',', $image);
		$arr = [];
		$count = 0;
		foreach ($editimage as $item){
			if(count($explode) == count($editimage)){
				$categ = 'category';
				$rand = rand(1000, 9999);
				$catname = $categ.'-'.$rand.'.jpg';
				
				$uploadcatimg = $item->move(public_path('admin/category_images',true), $catname);
				array_push($arr,$catname);
				
			}else{
				$expcount = $explode[$count];
				$uploadcatimg = $item->move(public_path('admin/category_images'), $expcount,true);
				$count++;
				array_push($arr,$expcount);
			}
		
		}
		
		$join = "";
		if(count($explode) < count($editimage)){
			$join = implode(',', $arr);
		}else{
			$join = implode(',', $explode);
		}
		
		$data = [
			'category' => $updatedcat->category,
			'catimg' => $join,
			'updated_at' => date('Y-m-d')
		];
		
		
		$update = DB::table('category')->where('id',$id)->update($data);
		if($update == 1){
			return redirect()->to('/showcategory');
		}
	}
	
	public function delcat($id){
		$delete = DB::table('category')->where('id',$id)->delete();
		if($delete == 1){
			return redirect()->to('/showcategory');
		}
	} 
	
	
}
