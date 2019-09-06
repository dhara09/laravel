<title>View Details</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" media="screen"/>
<link rel="stylesheet" type="text/css" media="screen" href="css\stylesheet.css" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<body>
<form method="POST" action="">
<div class="container">
<center><h2>View Playlist Details</h2>
<p>Records</p> 
</div>
<div class="container">
<table class="table table-bordered">
    <thead>
        <tr>
            <th>song_name</th>
            <th>size_of_file</th>
            <th>movie_name</th>
        </tr>
    </thead>
  <!--   <tbody>
        @foreach($data as $value)
        <tr>
            <td>{{ $value->song_name }}</td>
            <td>{{ $value->size_of_file }}</td>
            <td>{{ $value->movie_name }}</td>
        </tr>
        @endforeach
    </tbody> -->
</table>
    <div class="form-group">
        <button type="button" class="viewbtn" onclick=window.location='http://local.demo.com'>Back</a>
    </div>
</div>
</form>