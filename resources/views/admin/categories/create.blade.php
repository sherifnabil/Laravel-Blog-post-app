@extends('layouts.app')
@section('content')

@include('admin.includes.errors')


<div class="panel panel-default">
	<div class="panel-heading">
		Create a new Category
		
	</div>
	<div class="panel-body">
		<form action="{{ route('category.store') }}" method="post">
			{{csrf_field()}}
			<div class="form-group">
				<label for="name" >Name</label>
				<input type="text" name="name" class="form-control">
			</div>
			<div class="form-group text-center">
				<button class="btn btn-success" type="submit"> Store Category</button>
			</div>
			
		</form>
		
	</div>
	
</div>

@stop