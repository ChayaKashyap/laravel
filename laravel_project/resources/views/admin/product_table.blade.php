@extends('admin.layout')
@section('title','ProductTable')
@section('contents')		
    <section class="section">
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Categories</h5>
				<table class="table datatable">
					<thead>
					  <tr>
						<th scope="col">Id</th>
						<th scope="col">Weight</th>
						<th scope="col">Category</th>
						<th scope="col">Flavour</th>
						<th scope="col">Cakename</th>
						<th scope="col">Price</th>
						<th scope="col">Description</th>
						<th scope="col">Created date</th>
						<th scope="col">Updated date</th>
						<th scope="col">Update</th>
						<th scope="col">Delete</th>
					  </tr>
					</thead>
					<tbody>
					@foreach($getproducts as $getproducts)
					  <tr>
						<th scope="row">{{$loop->iteration}}</th>
						<td>{{$getproducts->weight}}</td>
						<td>{{$getproducts->category}}</td>
						<td>{{$getproducts->flavour}}</td>
						<td>{{$getproducts->cakename}}</td>
						<td>{{$getproducts->price}}</td>
						<td>{{$getproducts->description}}</td>
						<td>{{$getproducts->created_at}}</td>
						<td>{{$getproducts->updated_at}}</td>
						<td><a href="{{url('/admin/editproduct').'/'.$getproducts->id}}">Edit</a></td>
						<td><a href="{{url('/admin/delproduct').'/'.$getproducts->id}}">Delete</a></td>
					  </tr>
					@endforeach
					</tbody>
				</table>
            </div>
          </div>
        </div>
      </div>
    </section>
@endsection