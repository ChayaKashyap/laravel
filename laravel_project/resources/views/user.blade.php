<!DOCTYPE html>
<html>
<head>
	<title>Laravel</title>
	@include('include.head')
</head>
<body>

	<div>
		@if(session()->has('insertuser'))
		<div class="alert alert-success text-center" id="inserteduser">
				{{session('insertuser')}}
			<button type="button" class="btn-close float-end" data-bs-dismiss="alert"></button>
		</div>
		@endif
	</div>

	<div class="container" style="width:40%; margin-top:4rem;">
	<div class="card px-4 py-2">
	<h1 class="text-center">User Form</h1>
	<form  id="userForm" enctype="multiple/form-data">
	@csrf
	<!--<form action="{{url('/userinsert')}}" method="POST" enctype="multiple/form-data">
	@csrf-->
	<div class="mb-3 mt-3">
		<label for="email" class="form-label">Name:</label>
		<input type="text" class="form-control" id="name" placeholder="Enter name" name="name" value="{{old('name')}}">
		  <div id="valid_name"></div>
		@error('name')
			<span class="text-danger">{{$message}}</span>
		@enderror
	  </div>
	
	  <div class="mb-3 mt-3">
		<label for="email" class="form-label">Email:</label>
		<input type="email" class="form-control" id="email" placeholder="Enter email" name="email" value="{{old('email')}}">
		<div id="valid_email"></div>
		@error('email')
			<span class="text-danger">{{$message}}</span>
		@enderror
	  </div>
	  <div class="mb-3">
		<label for="pwd" class="form-label">Password:</label>
		<input type="password" class="form-control" id="password" placeholder="Enter password" name="password" value="{{old('password')}}">
		<div id="valid_password"></div>
		@error('password')
			<span class="text-danger">{{$message}}</span>
		@enderror
	  </div>
	  <div class="form-check mb-3  text-center">
		<label class="form-check-label">
		  <input class="form-check-input" type="checkbox" name="remember"> Remember me
		</label>
	  </div>
		<div class=" text-center">
			<button type="submit" class="btn btn-primary text-center">Submit</button>
		</div>
	</form>
	</div>
	</div>
	
	@include('include.foot')
	
	<script>
		$(document).ready(function(){
			
			$('#name, #email, #password').on('input', function() {
				$(this).closest('.mb-3').find('div').html('');
			});
			
			$('#userForm').on('submit', function(e){
            e.preventDefault(); // Prevent default form submission

            var name = $('#name').val();
            var email = $('#email').val();
            var password = $('#password').val();
			
			if(name == ''){
					$('#valid_name').html('Please enter your name').css("color","red");
					return false;
				}else if(email == ''){
					$('#valid_email').html('Please enter your email').css("color","red");
					return false;
				}else if(password == ''){
					$('#valid_password').html('Please enter your password').css("color","red");
					return false;
				}

            var obj = {
                name: name,
                email: email,
                password: password,
				_token: '{{ csrf_token() }}'
            };

            $.ajax({
                type: 'post',
                url: '{{ url("/userinsert") }}',
                data: obj,
                success: function(resp){
                    console.log(resp);
                },
                
            });
        });
			
			setTimeout(function(){
				$('#inserteduser').remove();
			},3000)
		})
	</script>
	
</body>
</html>