@extends('admin.layout')
@section('title','category')
@section('contents')
	<div class="category">
	<h2>Category Form</h2>
		<div class="card px-3 py-3 ">
			<form action="{{url('/addcategory')}}" method="POST" class="needs-validation" enctype="multipart/form-data"  novalidate>
				@csrf
				  <div class="mb-3 mt-3">
					<label for="category" class="form-label mb-2">Category Name:</label>
					<input type="text" class="form-control" id="category" name="category" required />
					<div class="invalid-feedback">Please, enter your category name!</div>

					<label for="catimage" class="form-label mb-2">Category Name:</label>
					<!--<input type="file" class="form-control" id="catimage" name="catimage" required />-->
					<input type="file" class="form-control" id="catimage" name="catimage[]" required multiple />
					<div class="invalid-feedback">Please, select your category image!</div>
				  </div>
				  <button type="submit" class="btn btn-primary">Submit</button>
			</form>
		</div>
	</div>
	
        <!--<div class="col-lg-6">
          <div class="card">
            <div class="card-body">  
              <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#loginmodal">
                Login
              </button>
              <div class="modal fade" id="loginmodal" tabindex="-1">
                <div class="modal-dialog modal-dialog-centered" style="width: 100%; max-width: 28%;">
                  <div class="modal-content">
				  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"style="font-size:30px;"></button>
                    <div class="modal-header" style="border: none;">
                       <div class="text-center w-100">
							<h5>Login to Your Account</h5>
							<p class="small">Enter your username & password to login</p>
						</div>
                    </div>
                    <div class="modal-body">
                       <form class="row g-3 needs-validation" novalidate>

						<div class="col-12">
						  <label for="yourUsername" class="form-label">Username</label>
						  <div class="input-group has-validation">
							<input type="text" name="username" class="form-control" id="yourUsername" required>
							<div class="invalid-feedback">Please enter your username.</div>
						  </div>
						</div>

						<div class="col-12">
						  <label for="yourPassword" class="form-label">Password</label>
						  <input type="password" name="password" class="form-control" id="yourPassword" required>
						  <div class="invalid-feedback">Please enter your password!</div>
						</div>

						<div class="col-12">
						  <div class="form-check">
							<input class="form-check-input" type="checkbox" name="remember" value="true" id="rememberMe">
							<label class="form-check-label" for="rememberMe">Remember me</label>
						  </div>
						</div>
						<div class="col-12">
						  <button class="btn btn-primary w-100" type="submit">Login</button>
						</div>
						<div class="col-12">
						  <p class="small mb-0 text-center">Don't have account? <a href="pages-register.html">Create an account</a></p>
						</div>
					  </form>
                    </div>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>-->
     
@endsection

@push('js')
	<script>
		$(window).on('load',function(){
			
		});
	</script>
@endpush

@push('css')
	<style>
		.category{
			margin-top:3rem;
		}
	</style>
@endpush