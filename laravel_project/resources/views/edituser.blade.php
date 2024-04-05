<!DOCTYPE html>
<html>
<head>
	<title>Laravel</title>
	@include('include.head')
</head>
<body>
	<div class="container" style="width:40%; margin-top:4rem;">
	<div class="card px-4 py-2">
	<h1 class="text-center">User Form</h1>
	<form action="{{url('/userupdate').'/'.$editdata[0]->id}}" method="POST" enctype="multiple/form-data">
	@csrf
	<div class="mb-3 mt-3">
		<label for="email" class="form-label">Name:</label>
		<input type="text" class="form-control" id="name" placeholder="Enter name" name="name" value="{{$editdata[0]->name}}">
	  </div>
	  <div class="mb-3 mt-3">
		<label for="email" class="form-label">Email:</label>
		<input type="email" class="form-control" id="email" placeholder="Enter email" name="email" value="{{$editdata[0]->email}}">
	  </div>
	  <div class="form-check mb-3  text-center">
		<label class="form-check-label">
		  <input class="form-check-input" type="checkbox" name="remember"> Remember me
		</label>
	  </div>
		<div class=" text-center">
			<button type="submit" class="btn btn-primary text-center">Update</button>
		</div>
	</form>
	</div>
	</div>
	
	@include('include.foot')
</body>
</html>