@extends('admin.layout')
@section('title','Product')
@section('contents')
<div class="card">
   <div class="card-body">
      <h5 class="card-title">Add Cakes</h5>
	  <form class="row g-3" action="{{url('/admin/addproduct')}}" method="POST"  class="needs-validation" novalidate>
	  @csrf
		<div class="col-sm-10">
			<div class="weightcheckbox">
				@foreach($fetchweight as $weight)
				<div class="form-check">
				  <input class="form-check-input" type="checkbox" id="weight" name="weight[]"  value="{{$weight->id}}" required>
				  <label class="form-check-label" for="weight">
				  {{$weight->weight}}
				  </label>
				</div>
				@endforeach
			</div>
			<div class="invalid-feedback">Please, choose your weight!</div>
        </div>
		<div class="col-md-12">
		  <label for="category" class="form-label">Category</label>
		  <div class="col-sm-12">
			<select class="form-select" aria-label="Default select example" name="category" required>
			  <option selected>--select--</option>
			  @foreach($category as $category)
			  <option value="{{$category->id}}">{{$category->category}}</option>
			  @endforeach
			</select>
			<div class="invalid-feedback">Please, enter your select category!</div>
		  </div>
		</div>
		<div class="col-md-12">
		  <label class="col-sm-2 col-form-label">Select Flaovour</label>
		  <div class="col-sm-12">
			<select class="form-select" aria-label="Default select example" name="flavour" required>
			  <option selected>--select--</option>
			  <option value="Butterscotch">Butterscotch</option>
			  <option value="Blueberry">Blueberry</option>
			  <option value="Chocochip">Chocochip</option>
			  <option value="Choco vanilla">Choco vanilla</option>
			  <option value="Choco Truffle">Choco Truffle</option>
			  <option value="Choco chip">Choco chip</option>
			  <option value="German forest">German forest</option>
			  <option value="Oreo">Oreo</option>
			  <option value="Pineapple">Pineapple</option>
			</select>
			<div class="invalid-feedback">Please, enter your select flavour!</div>
		  </div>
        </div>
		<div class="col-md-6">
		  <label for="cakename" class="form-label">Cake Name</label>
		  <input type="text" class="form-control" id="cakename" name="cakename" required>
		  <div class="invalid-feedback">Please, enter your cakename!</div>
		</div>
		<div class="col-md-6">
		  <label for="validationCustom05" class="form-label">Price</label>
		  <input type="text" class="form-control" id="validationCustom05" name="price" required >
		  <div class="invalid-feedback">Please, enter your price!</div>
		</div>
		<div class="col-12">
			<label for="description">Description</label>
			<textarea class="form-control" id="description" style="height: 100px;" name="description" required></textarea>
			<div class="invalid-feedback">Please, enter your description!</div>
		</div>
		
		<div class="text-center">
		  <button type="submit" class="btn btn-primary">Submit</button>
		  <button type="reset" class="btn btn-secondary">Reset</button>
		</div>
	  </form>
	  
	</div>
</div>

@endsection

@push('css')
	<style>
	.weightcheckbox{
		display: flex;
		justify-content: space-between;
	}
	</style>
@endpush