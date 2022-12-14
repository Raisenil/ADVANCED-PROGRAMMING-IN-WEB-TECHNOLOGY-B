@extends('layouts.app')
@section('title')

    Add User

@endsection
@section('content')

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Add User</title>

	<!--linking css-->
	<link rel="stylesheet" href="/css/style.css" />	
</head>

<body>
    <!--floating button-->
    <a href="\requesthelp" class="floating-btn"><h3>Help</h3></a>
    <!--floating button end-->
	<form method="POST" action="/logout">
    {{csrf_field()}}
    <!--navbar start-->
	<section class="navbar">
		<div class="container">
        <div class="logo">
				<a href="\index" title="logo">
                <h2>FastCare</h2>
				</a>
			</div>
        <div class="menu text-right">
				<ul>
                    <li>
						<a href="allpaitient">Patients</a>
					</li>
                    <li>
						<a href="alluser">Users</a>
					</li>
                    <li>
						<a href="adminprofile">{{ session()->get('username') }}</a>
					</li>
                    <li>
                    <a class="btn btn-primary" href="/logout">Logout</a>
					</li>
				</ul>
			</div>
		</div>
		<div class="clearfix"></div>
	</section>
</form>
	<!--navbar end-->
    
<!-- React root DOM -->

    <div id="axiopostuser">

    </div>

<!-- React JS -->

<script src="{{ asset('js/app.js') }}" defer></script>

</script>
    
    </section>
@endsection
