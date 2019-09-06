<title>View Details</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" media="screen"/>
<link rel="stylesheet" type="text/css" media="screen" href="css\stylesheet.css" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<body>
<form method="POST" action="">
{{csrf_field()}}
{{method_field('DELETE')}}
<div class="container">
<center><h2>View Details</h2>

<!-- @if(auth()->check())
        <a href="/registerview"> Welcome {{ auth()->name }}</a>
@endif
        <a class="log" href="/logout">Log Out</a> -->

<p>Records of the Registered Users</p> 
</div>
<div class="container">
<table class="table table-bordered">
    <thead>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Email</th>
            <th>Contact</th>
            <th>Gender</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($regis as $value)
        <tr>
            <td>{{ $value->id }}</td>
            <td>{{ $value->name }}</td>
            <td>{{ $value->email }}</td>
            <td>{{ $value->contact }}</td>
            <td>{{ $value->gender }}</td>
            <td>
            <a href="<?php echo url('/edit/'.$value->id) ?>">Edit</a>
            &nbsp&nbsp&nbsp
            <a href="<?php echo url('/delete/'.$value->id)?>" onclick="return confirm('Are you sure you want to delete?')" >Delete</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
    <div class="form-group">
        <button type="button" class="viewbtn" onclick=window.location='http://local.demo.com'>Back</a>
    </div>
</div>
</form>