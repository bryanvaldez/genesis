@extends('layout')
@section('content')

<<div class="cantainer">
	<h1>{{$category->name}}</h1>

	<table class="table table-striped">
		<tr>
			<th>Name/th>
			<th>Last Name</th>
			<th>Type</th>
			<th>Description</th>
			<th>View</th>
		</tr>
		@foreach($category->employees as $employee)
		<tr>
			<td>{{ $employee->user->name }}</td>
			<td>{{ $employee->user->last_name }}</td>
			<td>{{ $employee->job_type }}</td>
			<td>{{ $employee->description }}</td>
			<td width="50"><a href="{{ route('employee',[$employee->slug, $employee->id]) }}" class="btn btn-info">ver</a></td>
		</tr>		
		@endforeach
	</table>
	
</div>