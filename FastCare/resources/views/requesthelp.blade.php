@extends('layouts.app')
@section('title')

    FastCare

@endsection
@section('phpempty')

@endsection
@section('contentRequest')
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
						<a href="\index">Home</a>
					</li>
					<li>
						<a href="\loginpage">Account</a>
					</li>
				</ul>
			</div>
		</div>

		<div class="clearfix"></div>
	</section>
	<!--navbar end-->

    <!--info slide start-->
    <section class="register">
    <div class="container">
            <h2 class="text-center">Call Ambulance</h2>
            <center>
            <table>
            <tr>
                <td>
                    <label for="name">Name</label>
                </td>

                <td>
                    :<input id="name" type="text" name="name" value="{{ session()->get('username') }}">
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
                <td>
                    <label for="phone">Phone</label>
                </td>

                <td>
                    :<input id="phone" type="number" name="phone" value="{{ session()->get('phone') }}">
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
            </tr>
            <tr>
                <td>
                    <label for="type">Ambulance type</label>
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
            <tr>
            <tr>
                <td><br>
                    <button class="btn btn-small btn-small-primary" type="submit" name="Req" value="Req">
                        Request
                    </button>
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