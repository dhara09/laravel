<!DOCTYPE html>
<html>
<head>
    <title>Edit </title>
    <link rel="stylesheet" type="text/css" media="screen" href="css\stylesheet.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
  
<center><h2>Edit Details</h2></center>
    <form method="POST" action="">
    {{csrf_field()}}
            <input type="hidden" name="register_user_id" value="{{$regis->id}}">
            <div class="form-group">
                <label for="name"><b>Name :</b></label>
                <input type="text" class="form-control" name="name" value="{{$regis->name}}" required/>
            </div>

            <div class="form-group">
                <label for="email"><b>Email:</b></label>
                <input type="text" class="form-control" name="email" value="{{$regis->email}}" required/>
            </div>

            <div class="form-group">
                <label for="contact"><b>Contact :</b></label>
                <input type="text" class="form-control" name="contact" value="{{$regis->contact}}" required/>
            </div> 

            <div class="form-group">
                <label for="gender"><b>Gender: </b></label></br>
                <input type="radio" name="gender"<?php echo ($regis->gender =='female')? 'checked':'' ?> value="Female" >Female
                <input type="radio" name="gender"<?php echo ($regis->gender =='male')? 'checked':'' ?> value="Male" >Male
                <input type="radio" name="gender"<?php echo ($regis->gender =='other')? 'checked':'' ?> value="Other" >Other
            </div>

            <div class="form-group">
                <button type="save" class="viewbtn">Save</a></button>&nbsp&nbsp               
                <button type="button" class="viewbtn" onclick=window.location='http://local.demo.com/registerview'>Back</a>
            </div>   
            @include('layouts.errors')
    </form>      
</body>
</html>