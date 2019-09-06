<head>
    <title>Demo</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css\stylesheet.css" />
</head>
<body>
    <div class="container">
    <center> <h1> Creator !! </h1> 
    {{csrf_field()}}

        <button type="submit" onclick=window.location='http://local.demo.com/login'>Login</button> 
        <button type="submit" onclick=window.location='http://local.demo.com/register'>Register</button>
        <button type="submit" onclick=window.location='http://local.demo.com/registerview'>View Details</button>
        <button type="submit" onclick=window.location='http://local.demo.com/fetchPlaylist'>PlayList Data</button> 
    </center>
</div>
</body>
