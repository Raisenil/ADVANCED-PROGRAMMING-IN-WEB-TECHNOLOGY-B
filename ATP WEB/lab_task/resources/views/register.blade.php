<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
    font-family: Arial, Helvetica, sans-serif;
    background-color: wight;
}

* {
    box-sizing: border-box;
}

.container {
    padding: 16px;
    background-color: white;
}


input[type=text], input[type=password] {
    width: 100%;
    padding: 15px;
    margin: 5px 0 22px 0;
    display: inline-block;
    border: none;
    background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
    background-color: #ddd;
    outline: none;
}


hr {
    border: 1px solid #f1f1f1;
    margin-bottom: 25px;
}


.registerbtn {
    background-color: #4f04aa;
    color: white;
    padding: 16px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 50%;
    opacity: 0.9;
}

.registerbtn:hover {
    opacity: 1;
}


a {
    color: dodgerblue;
}


.signin {
    background-color: #f1f1f1;
    text-align: center;
}
</style>
</head>
<body>

<form action="/register" method="post">
    {{csrf_field()}}
<div class="container">
    <h1>Register</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>

    <label for="name"><b>Name</b></label>
    <input type="text" placeholder="Enter Name" name="name" id="name">
    @if($errors->has('name'))
    {{$errors->first('name')}}
    @endif
    <br>

    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" id="email">
    @if($errors->has('email'))
    {{$errors->first('email')}}
    @endif
    <br>

    <label for="phone"><b>Phone</b></label>
    <input type="text" placeholder="Enter PhoneNO" name="phone" id="phone">
    @if($errors->has('phone'))
    {{$errors->first('phone')}}
    @endif
    <br>
    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" id="psw">
    @if($errors->has('psw'))
    {{$errors->first('psw')}}
    @endif
    <hr>
    <center><button type="submit" class="registerbtn">Register</button></center>
</div>

<div class="container signin">
    <p>Already have an account? <a href="#">Sign in</a>.</p>
</div>
</form>

</body>
</html>
