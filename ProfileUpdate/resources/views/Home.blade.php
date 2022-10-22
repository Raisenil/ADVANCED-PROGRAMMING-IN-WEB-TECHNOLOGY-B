@extends('layouts.app')
@section('title')

    Homepage

@endsection
@section('phpempty')

@endsection
@section('content')

<div class="container">
	<h2>Form LogIn</h2>
	
	<form method="POST" action="/home">
	@if(count($errors))
	
			<div class="alert alert-danger">
				<strong>Whoops!</strong> There were some problems with your input.
				<br/>
				<ul>
					@foreach($errors->all() as $error)
					<li>{{ $error }}</li>
					@endforeach
				</ul>
			</div>
	
		@endif

		<input type="hidden" name="_token" value="{{ csrf_token() }}">


		<div class="row">
			<div class="col-md-6">
				<div class="form-group2 {{ $errors->has('firstname') ? 'has-error' : '' }}">
					<label for="firstname">First Name:</label>
					<input type="text" id="firstname" name="firstname" class="form-control" placeholder="Enter First Name" value="{{ old('firstname') }}">
					
				</div>
			</div>
			


		<div class="row">
			<div class="col-md-6">
				<div class="form-group2 {{ $errors->has('password') ? 'has-error' : '' }}">
					<label for="password">Password:</label>
					<input type="password" id="password" name="password" class="form-control" placeholder="Enter Password" >
					
				</div>
			</div>
		


		<div class="form-group2">
		<input type="submit" value="LogIn" name="LogIn" class="btn btn-success">
		</div>


	</form>
</div>
   
@endsection