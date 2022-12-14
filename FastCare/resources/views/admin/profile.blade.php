@extends('layouts.app')
@section('title')

    Profilepage

@endsection
@section('phpempty')

@endsection
@section('content')

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>FastCare</title>

	<!--linking css-->
	<link rel="stylesheet" href="/css/style.css" />	
</head>

<body>
<a href="\requesthelp" class="floating-btn"><h3>Help</h3></a>
	<!--navbar start-->
	<form method="POST" action="/logout">
    {{csrf_field()}}
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
						<a href="#">{{ session()->get('username') }}</a>
					</li>
                    <li>
					<button class ="btn btn-primary"><b>Logout</b></button>
					</li>
				</ul>
			</div>
		</div>

		<div class="clearfix"></div>
	</section>
</form>
<br>
<!--
<div id= "example">
    
</div>

<script src="{{asset('js/app.js')}}" defer></script>
-->

<section class="userinfo">
    <div class="container">
	<h2 class="text-center">User Info</h2>
		<center>
			<table >
				<tr>
					<td>id</td>
					<td>:{{session()->get('user_id')}}</td>
					<td><input type="hidden" name="id" value="{{session()->get('user_id')}}"></td>
				</tr>
				<tr>
					<td>username</td>
					<td>: {{ session()->get('username') }}</td>
					<td><input type="hidden" name="username" value="{{session()->get('username')}}"></td>
				</tr>
				
				<tr>
					<td>password</td>
					<td>: {{ session()->get('password') }}</td>
					<td><input type="hidden" name="password" value="{{session()->get('password')}}"></td>
				</tr>
				<tr>
					<td>email</td>
					<td>: {{ session()->get('email') }}</td>
					<td><input type="hidden" name="email" value="{{session()->get('email')}}"></td>
				</tr>
				<tr>
					<td>user type</td>
					<td>: {{ session()->get('type') }}</td>
					<td><input type="hidden" name="type" value="{{session()->get('type')}}"></td>
				</tr>
				<tr>
					<td>full name</td>
					<td>: {{ session()->get('name') }} </td>
					<td><input type="hidden" name="name" value="{{session()->get('name')}}"></td>
				</tr>
				<tr>
					<td>location</td>
					<td>: {{ session()->get('location') }}</td>
					<td><input type="hidden" name="location" value="{{session()->get('location')}}"></td>
				</tr>
				<tr>
					<td>phone</td>
					<td>: {{ session()->get('phone') }}</td>
					<td><input type="hidden" name="phone" value="{{session()->get('phone')}}"></td>
				</tr>
				<tr>
					<td></td>
					<td></td>
					<td>
						<a href="{{url('/user/edit/')}}/{{session()->get('user_id')}}">
							<button class ="btn btn-small btn-small-primary">Update</button>
                        </a>
					</td>
				</tr>
			</table>
		</center>
    <div class="clearfix"></div>
    </div>
</section>