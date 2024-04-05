@extends('admin.layout')
@section('title','weight table')
@section('contents')		
    <section class="section">
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Weight</h5>
				<table class="table datatable">
					<thead>
					  <tr>
						<th scope="col">Id</th>
						<th scope="col">Weight</th>
						<th scope="col">Created date</th>
						<th scope="col">Updated date</th>
						<th scope="col">Update</th>
						<th scope="col">Delete</th>
					  </tr>
					</thead>
					<tbody>
					@foreach($weightget as $weight)
					  <tr>
						<th scope="row">{{$loop->iteration}}</th>
						<td>{{$weight->weight}}</td>
						<td>{{$weight->created_at}}</td>
						<td>{{$weight->updated_at}}</td>
						<td><a href="{{url('/admin/editweight').'/'.$weight->id}}">Edit</a></td>
						<td><a href="{{url('/admin/delweight').'/'.$weight->id}}">Delete</a></td>
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
