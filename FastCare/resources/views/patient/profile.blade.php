@extends('layouts.app')
@section('title')

    Profilepage

@endsection
@section('phpempty')

@endsection
@section('content')

<h2>
{{ session()->get('username') }}
</h2>
<br>

<section class="userinfo">
    <div class="container">
		<center>
			<table >
				<tr>
					<td>Profile pic</td>
					<td></td>
				</tr>
				<tr>
					<td>id</td>
					<td>:</td>
					
				</tr>
				<tr>
					<td>username</td>
					<td>: {{ session()->get('username') }}</td>
				</tr>
				
				<tr>
					<td>password</td>
					<td>: </td>
				</tr>
				<tr>
					<td>email</td>
					<td>: </td>
				</tr>
				<tr>
					<td>user type</td>
					<td>: </td>
				</tr>
				<tr>
					<td>full name</td>
					<td>: </td>
				</tr>
				<tr>
					<td>location</td>
					<td>: </td>
				</tr>
				<tr>
					<td>phone</td>
					<td>: </td>
				</tr>
			</table>
		</center>
    <div class="clearfix"></div>
    </div>
</section>

@endsection

@section('contentlogout')

<input type="submit" name="logout" value="logout">

@endsection