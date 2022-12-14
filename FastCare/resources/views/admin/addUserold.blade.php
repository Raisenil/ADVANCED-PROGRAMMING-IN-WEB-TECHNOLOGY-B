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

    <!-- register section -->
    @section('contentregister')
    <section class="register">
    <div class="container">
            <h2 class="text-center">AddUser</h2>
            <center>
            <table>
            <tr>
                <td>
                    <label for="username">Username</label>
                </td>

                <td>
                    :<input id="username" type="text" name="username" value="">
                </td>
            </tr>
            <tr>
                <td>
                    <h6>
                        @if ($errors->has('username'))
                        <span class="">
                        <strong>
                        {{ $errors->first('username') }}
                        </strong>
                        </span>
                        @endif
                    </h6>
                </td>
            <tr>

                <td>
                    <label for="password">Password</label>
                </td>

                <td>
                    :<input id="text" type="password" name="password" value="">
                </td>
            </tr>
            <tr>
                <td>
                    <h6>
                        @if ($errors->has('password'))
                        <span class="">
                        <strong>
                        {{ $errors->first('password') }}
                        </strong>
                        </span>
                        @endif
                    </h6>
                </td>
            <tr>

            <tr>
                <td>
                    <label for="email">Email</label>
                </td>

                <td>
                    :<input id="email" type="text" name="email" value="">
                </td>
            </tr>
            <tr>
                <td>
                    <h6>
                        @if ($errors->has('email'))
                        <span class="">
                        <strong>
                        {{ $errors->first('email') }}
                        </strong>
                        </span>
                        @endif
                    </h6>
                </td>
            <tr>

            <tr>
                <td>
                    <label for="name">Name</label>
                </td>

                <td>
                    :<input id="name" type="text" name="name" value="">
                </td>
            </tr>
            <tr>
                <td>
                    <h6>
                        @if ($errors->has('name'))
                        <span class="">
                        <strong>
                        {{ $errors->first('name') }}
                        </strong>
                        </span>
                        @endif
                    </h6>
                </td>
            <tr>

            <tr>
                <td>
                    <label for="location">Location</label>
                </td>

                <td>
                    :<input id="location" type="text" name="location" value="">
                </td>
            </tr>
            <tr>
                <td>
                    <h6>
                        @if ($errors->has('location'))
                        <span class="">
                        <strong>
                        {{ $errors->first('location') }}
                        </strong>
                        </span>
                        @endif
                    </h6>
                </td>
            <tr>

            <tr>
                <td>
                    <label for="phone">Phone</label>
                </td>

                <td>
                    :<input id="phone" type="number" name="phone" value="">
                </td>
            </tr>
            <tr>
                <td>
                    <h6>
                        @if ($errors->has('phone'))
                        <span class="">
                        <strong>
                        {{ $errors->first('phone') }}
                        </strong>
                        </span>
                        @endif
                    </h6>
                </td>
            <tr>
            <tr>
                <td>
                    <label for="type">type</label>
                </td>
                
                <td>:
                <select name="type" required>
                    <option value="admin">Admin</option>
                    <option value="manager">Manager</option>
                    <option value="doctor">Doctor</option>
                    <option value="patient">Patient</option>
                </select>
                </td>
            </tr>
            <tr>
                <td>
                    <h6>
                        @if ($errors->has('type'))
                        <span class="">
                        <strong>
                        {{ $errors->first('type') }}
                        </strong>
                        </span>
                        @endif
                    </h6>
                </td>
            <tr>

            <tr>
                <td><br>
                <form method="POST" action="/addNewUser">
                    <button class="btn btn-small btn-small-primary" type="submit" name="Insert" value="Insert">
                        Register
                    </button>
                </form>
                
                </td>
            </tr>
        </table>
        </form>
        <br>
        <br>
        <div id="error"></div>
        </center>
        
    </section>
@endsection
