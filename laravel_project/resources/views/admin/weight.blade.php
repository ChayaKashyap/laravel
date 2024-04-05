@extends('admin.layout')
@section('title','weight')
@section('contents')
	<div class="weight">
	<h2>Weight Form</h2>
		<div class="card px-3 py-3 ">
			<form action="{{url('/admin/addweight')}}" method="POST" class="needs-validation" novalidate>
				@csrf
				  <div class="mb-3 mt-3">
					<label for="weight" class="form-label mb-2">Weight</label>
					<input type="text" class="form-control" id="weight" name="weight" required autocomplete="off">
					<div class="invalid-feedback">Please, enter your Product weight!</div>
				  </div>
				  <button type="submit" class="btn btn-primary">Submit</button>
			</form>
		</div>
	</div>
@endsection

@push('css')
	<style>
		.weight{
			margin-top:3rem;
		}
	</style>
@endpush
	