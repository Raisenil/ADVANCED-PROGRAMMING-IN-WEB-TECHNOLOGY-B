@extends('layouts.app')
@section('title')

    Paitient List

@endsection
@section('phpempty')

@endsection<!--
@section('content')
@section('contentupdate')-->
<!DOCTYPE html>
<html lang="en">
<form method="POST" action="/logout">
    {{csrf_field()}}
<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>FastCare</title>

	<!--linking css-->
	<link rel="stylesheet" href="/css/style.css" />	
</head>

<body>
    <!--floating button-->
    <a href="\requesthelp" class="floating-btn"><h3>Help</h3></a>
    <!--floating button end-->
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
						<a href="\allpaitient">Patients</a>
					</li>
                    <li>
						<a href="alluser">Users</a>
					</li>
                    <li>
						<a href="adminprofile">{{ session()->get('username') }}</a>
					</li>
                    <li>
                    <button class ="btn btn-primary">Logout</button>
					</li>
				</ul>
			</div>
		</div>

		<div class="clearfix"></div>
	</section>
    </form>
	<!--navbar end-->
    @section('content')
    @section('contentpupdate')   
    <!-- register section -->
    <section class="register">
    <div class="container">
            <h2 class="text-center">Update</h2>
            <center>
            <table>
            <tr>
                <td>
                    <label for="r_id">Id</label>
                </td>

                <td>
                    :{{$user->r_id}}
                </td>
                <td><input type="hidden" name="id" value="{{$user->r_id}}"></td>

            <tr>
                <td>
                    <label for="name">Name</label>
                </td>

                <td>
                    :<input id="name" type="text" name="name" value="{{$user->name}}">
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
                    :<input id="location" type="text" name="location" value="{{$user->location}}">
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
            </tr>

            <tr>
                <td>
                    <label for="phone">Phone</label>
                </td>

                <td>
                    :<input id="phone" type="number" name="phone" value="{{$user->phone}}">
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
                    <option value="Isolation Ambulance">Isolation Ambulance</option>
                    <option value="First Responder Ambulance">First Responder Ambulance</option>
                    <option value="Advanced Life Support Ambulance">Advanced Life Support Ambulance</option>
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
            </tr>
            <tr>
                <td>
                    <label for="prescription">Prescription</label>
                </td>

                <td>
                    :<input id="prescription" type="text" name="prescription" value="{{$user->prescription}}">
                </td>
            </tr>
            <tr>
                <td>
                    <h6>
                        @if ($errors->has('prescription'))
                        <span class="">
                        <strong>
                        {{ $errors->first('prescription') }}
                        </strong>
                        </span>
                        @endif
                    </h6>
                </td>
            </tr>

            <tr>
                <td>
                    <button class ="btn btn-small btn-small-primary">Update
                    </button>
                </td>
            </tr>
        </table>
        <br>
        <br>
        <div id="error"></div>
        </center>
        
    </section>
@endsection
