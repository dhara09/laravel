<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Registration Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css\stylesheet.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>
<center> <h3> Registration Form </h3> </center>
<div class="container">
    <form method="POST" action="{{ url('/register') }}">
    {{ csrf_field() }}
            <div class="form-group">
                <label for="name"><b>Name :</b></label>
                <input type="text" name="name" placeholder="Enter Name">
            </div>

            <div class="form-group">
                <label for="email"><b>Email:</b></label>
                <input type="text" name="email" placeholder="Enter Email">
            </div>

            <div class="form-group">
                <label for="contact"><b>Contact :</b></label>
                <input type="text" name="contact" placeholder="Enter Contact">
            </div>  

            <div class ="form-group">
                <label for="qualifications"><b>Qualifications : </b></label>
                <input type="text" name="qualifications">
            </div>

            <div class="form-group">
                <label for="password"><b>Password :</b></label>
                <input type="password" name="password" placeholder="Enter Password">
            </div>

            <div class="form-group">
                <label for="confpass"><b>Confirm Password :</b></label>
                <input type="password" name="conf_password" placeholder="Enter ConfirmPasword">
            </div>

            <div class="form-group">
            <label for="gender"><b>Gender :</b></label>
                <input type="radio" name="gender" value="female">Female
                <input type="radio" name="gender" value="male">Male
                <input type="radio" name="gender" value="other">Other
            </div>

            <div class="form-group"><center>
                <input type="submit" name="submit">
                <button type="button" class="button" onclick=window.location='http://local.demo.com'>Back</a>
               </center>
            </div>
            </form>
        @include('layouts.errors')
    </div>
</body>
</html>