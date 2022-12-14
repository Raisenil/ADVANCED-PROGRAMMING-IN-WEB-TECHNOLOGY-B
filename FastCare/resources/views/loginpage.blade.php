@extends('layouts.app')
@section('title')

    FastCare

@endsection
@section('phpempty')

@endsection
@section('contentlogin')
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
    <!-- Login section -->
    <section class="login">
    <div class="container">
            <h2 class="text-center">Log in</h2>
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
                    <label for="password">Password</label>
                </td>
                <td>
                    :<input id="password" type="password" name="password" value="">
                </td>
            </tr>
            <tr>
                <td><br>
                    <button class="btn btn-small btn-small-primary" type="submit" name="LogIn" value="LogIn">
                        Login
                    </button>
                </td>
                
                <td>
                    <br>
                    <a class="btn btn-red btn-red-primary" href="\register">
                        Register
                    </a>
                </td>
            </tr>
        </table>
        <br>
        <br>
        <div id="error"></div>
        </center>
        
    </section>
</body>
</html>
@endsection
