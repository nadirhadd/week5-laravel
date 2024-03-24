<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 1</title>

    <link rel="stylesheet" href="{{ url('css/lat1.css') }}">
</head>
<body>
    <div class="nav">
        <a href="{{ url('/') }}">Home</a> <br/>
    </div>
    <div class="content">
        <img src="{{url('../images/me.jpg')}}">
        <div class="task">
            <h2>{{$nama}}</h2>
            <h2>{{$asal}}</h2>
            <h2>{{$prodi}}</h2>
        </div>
    </div>
    
</body>
</html>