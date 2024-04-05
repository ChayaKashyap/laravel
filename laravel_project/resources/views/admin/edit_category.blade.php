@extends('admin.layout')
@section('title','EditCategory')
@section('contents')
	<div class="category">
	<h2>Category Form</h2>
		<div class="card px-3 py-3 ">
			<form action="{{url('/updatecategory')}}" method="POST" enctype="multipart/form-data">
				@csrf
				  <div class="mb-3 mt-3">
					<input type="hidden" class="form-control" name="id" value="{{$editcat->id}}">
					<label for="category" class="form-label mb-2">Category Name:</label>
					<input type="text" class="form-control" id="category" name="category" value="{{$editcat->category}}">
					
					<label for="catimage" class="form-label mb-2">Category Name:</label>
					<!-- for single image <input type="file" class="form-control" id="catimage" name="catimage" value="{{$editcat->catimg}}" required multiple />-->
					
					<!-- for multiple images --><input type="file" class="form-control" id="catimage" name="catimage[]" value="{{$editcat->catimg}}" required multiple />
					
					<input type="hidden" class="form-control" id="images" name="images" value="{{$editcat->catimg}}">
					<div class="invalid-feedback">Please, select your category image!</div>

				  </div>
				  <button type="submit" class="btn btn-primary">Submit</button>
			</form>
		</div>
	</div>
@endsection
