@extends('layouts.app')
@section('title')

    PaitientList

@endsection
@section('phpempty')

@endsection
@section('content')
<?php
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>FastCare</title>

	<!--linking css-->
	<link rel="stylesheet" href="/css/style.css" />
    <!--
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    -->
    <body>
    <a href="\requesthelp" class="floating-btn"><h3>Help</h3></a>
        <!--navbar start-->
        <form method="POST" action="logout">
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
<br>
</section>
</form>
<form action="" method="GET">
<section class="user-search text-center">
		<div class="container">
			<form action="" method="GET">
				<input type="search" name="search" placeholder="Search by Name or phone" value = "{{$search}}">
                <button class="btn btn-primary">Search</button>
			</form>
		</div>
</section>
</form>
		<div class="clearfix"></div>
	</section>
    <section class="allpaitient">
    <div class="container">
		<table class="table">
            <!--<pre>
                {{print_r($users)}}
            </pre>-->
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Location</th>
                    <th>Phone</th>
                    <th>Type</th>
                    <th>prescription</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                <tr>
                    <td>{{$user->r_id}}</td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->location}}</td>
                    <td>{{$user->phone}}</td>
                    <td>{{$user->type}}</td>
                    <td>{{$user->prescription}}</td>
                    <td>
                        <a href="{{url('/patient/delete/')}}/{{$user->r_id}}">
                        <button class ="btn btn-red btn-red-primary">Delete</button>
                        </a> 
                        <a href="{{url('/patient/edit/')}}/{{$user->r_id}}">
                        <button class ="btn btn-small btn-small-primary">Edit</button>
                        </a> 
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    <div class="clearfix"></div>
    </div>
</section>
    </body>
</html>
@endsection