<!DOCTYPE html>
<html>
<head>
	<title>Laravel</title>
	@include('include.head')
</head>
<body>
	
	<div class="container">
		<div>
			 <table class="table table-hover">
				<thead>
				  <tr>
					<th>index</th>
					<th>first</th>
					<th>last</th>
					<th>iteration</th>
					<th>remaining</th>
					<th>count</th>
					<th>even</th>
					<th>odd</th>
					<th>depth</th>
					<th>parent</th>
					<th>Name</th>
					<th>EDIT</th>
					<th>DELETE</th>
				  </tr>
				</thead>
				<tbody>
				@foreach($userdata as $data)
				  <tr>
					<td>{{$loop->index}}</td>
					<td>{{$loop->first}}</td>
					<td>{{$loop->last}}</td>
					<td>{{$loop->iteration}}</td>
					<td>{{$loop->remaining}}</td>
					<td>{{$loop->count}}</td>
					<td>{{$loop->even}}</td>
					<td>{{$loop->odd}}</td>
					<td>{{$loop->depth}}</td>
					<td>{{$loop->parent}}</td>
					<td>{{$data->name}}</td>
					<td><a href="{{url('/edit').'/'.$data->id}}">Edit</a></td>
					<td><a href="{{url('/delete').'/'.$data->id}}">Delete</a></td>
				  </tr>
				 @endforeach
				</tbody>
			  </table>
		</div>
	</div>
	
	@include('include.foot')
</body>
</html>