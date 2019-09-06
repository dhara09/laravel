<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css\stylesheet.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>
    <form method="POST" action ="">
    {{ csrf_field() }}
    <center><h3>Login Form </h3></center>  
            <div class="form-group">
                <label for="email"><b>Email:</b></label>
                <input type="text" name="email" placeholder="Enter Email">
            </div>

            <div class="form-group">
                <label for="password"><b>Password :</b></label>
                <input type="password" name="password" placeholder="Enter Password">
            </div>
            
            <div class="form-group">
                <input type="submit" name="submit" >  
                <button type="button" class="button" onclick=window.location='http://local.demo.com'>Back</a>
            </div>
            <div class="form-group">
            <a href="http://local.demo.com/forgotPassword">Forgot Password</a>
            </div>

         @include('layouts.errors')
    </form>
</body>
</html>