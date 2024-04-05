@extends('admin.layout')
@section('title', 'Update Product')
@section('contents')
<div class="card">
   <div class="card-body">
      <h5 class="card-title">Update Cakes</h5>
	  <form class="row" action="{{url('/admin/updateproduct')}}" method="POST"  class="needs-validation" novalidate>
	  @csrf
		<div class="col-sm-12">
		<div class="weightcheckbox">
			@php
				$arrweight = json_decode($editpro->weight);
				$count = 0;
			@endphp

			@foreach($fetchweight as $weight)
				<div class="form-check mt-3">
					@php
						$isChecked = in_array($weight->id, $arrweight);
					@endphp
					<input class="form-check-input" type="checkbox" id="weight" name="weight[]" value="{{$weight->id}}" required {{ $isChecked ? 'checked' : '' }}>
					<label class="form-check-label" for="weight_{{$weight->id}}">
						{{ $weight->weight }}
					</label>
				</div>
				@php
					$count++;
				@endphp
			@endforeach
		</div>
		<div class="col-md-12 mt-3">
		  <label for="category" class="form-label">Category</label>
		  <div class="col-sm-12">
			<select class="form-select" aria-label="Default select example" name="category"  value="{{$editpro->cakename}}" required>
			  <option selected>--select--</option>
			  @foreach($category as $editcat)
					<option value="{{$editcat->category}}" name="{{$editcat->category}}" 
						{{ ($editpro->category == $editcat->id) ? 'selected' : '' }}
						>{{$editcat->category}}</option>
			  @endforeach
			</select>
		  </div>
		</div>
		<div class="col-md-12 mt-3">
		  <label class="col-sm-2 col-form-label">Select Flaovour</label>
		  <div class="col-sm-12">
			<select class="form-select" aria-label="Default select example" name="flavour" required>
			  <option selected>--select--</option>
			  <option value="Butterscotch" {{($editpro->flavour == 'Butterscotch') ? 'selected' : '' }}>Butterscotch</option>
			  <option value="Blueberry" {{($editpro->flavour == 'Blueberry') ? 'selected' : '' }}>Blueberry</option>
			  <option value="Chocochip" {{($editpro->flavour == 'Chocochip') ? 'selected' : '' }}>Chocochip</option>
			  <option value="Choco vanilla" {{($editpro->flavour == 'Choco vanilla') ? 'selected' : '' }}>Choco vanilla</option>
			  <option value="Choco Truffle" {{($editpro->flavour == 'Choco Truffle') ? 'selected' : '' }}>Choco Truffle</option>
			  <option value="Choco chip" {{($editpro->flavour == 'Choco chip') ? 'selected' : '' }}>Choco chip</option>
			  <option value="German forest" {{($editpro->flavour == 'German forest') ? 'selected' : '' }}>German forest</option>
			  <option value="Oreo" {{($editpro->flavour == 'Oreo') ? 'selected' : '' }}>Oreo</option>
			  <option value="Pineapple">Pineapple</option>
			</select>
		  </div>
        </div>
		<div class="row mt-3">
		<div class="col-md-6">
		  <label for="cakename" class="form-label">Cake Name</label>
		  <input type="text" class="form-control" id="cakename" name="cakename" value="{{$editpro->cakename}}" required>
		</div>
		<div class="col-md-6">
		  <label for="price" class="form-label">Price</label>
		  <input type="text" class="form-control" id="price" name="price"  value="{{$editpro->price}}" required>
		</div>
		</div>
		<div class="col-12 mt-3">
			<label for="description">Description</label>
			<textarea class="form-control" id="description" style="height: 100px;" name="description" required>{{$editpro->description}}</textarea>
		</div>
		<input type="hidden" class="form-control" id="id" name="id"  value="{{$editpro->id}}" >
		
		<div class="text-center mt-4">
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