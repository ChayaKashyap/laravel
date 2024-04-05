@extends('admin.layout')
@section('title','CategoryTable')
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
						<th scope="col">Image</th>
						<th scope="col">Category Name</th>
						<th scope="col">Created date</th>
						<th scope="col">Updated date</th>
						<th scope="col">Update</th>
						<th scope="col">Delete</th>
					  </tr>
					</thead>
					<tbody>
					@foreach($category as $category)
					  <tr>
						<td scope="row">{{$loop->iteration}}</td>
						<td>
							@php
								$explode = $category->catimg;
								$expcatimg = explode(',',$explode);
							@endphp
							
							@foreach($expcatimg as $item)
								<img src="{{url('admin/category_images/').'/'.$item}}" width="50px" height="50px" style="border: 1px solid black; margin:10px; display:flex"/>
							@endforeach
						</td>
						
						<td>{{$category->category}}</td>
						<td>{{$category->created_at}}</td>
						<td>{{$category->updated_at}}</td>
						<td><a href="{{url('/editcat').'/'.$category->id}}">Edit</a></td>
						<td><a href="{{url('/delcat').'/'.$category->id}}">Delete</a></td>
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