@extends('layout')
@section('content')
<div class="container">
	<h1>{{ $employee->user->name}} {{ $employee->user->last_name}}</h1>
	<p>Category:<a href="{{route('category', [$employee->category->slug, $employee->category->id])}}">{{ $employee->category->name }}</a></p>
	<p>Type of work:{{ $employee->job_type }}</p>
	<p>Website:<a href="{{ $employee->website_url }}">{{ $employee->website_url }}</a></p>
	<p>Description:{{ $employee->description }}</p>
</div>
