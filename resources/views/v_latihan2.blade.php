<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$title}}</title>

    <link rel="stylesheet" href="{{ url('css/lat1.css') }}">

</head>
<body>
    <div class="nav">
        <a href="{{ url('/') }}">Home</a> <br/>
    </div>
    <h1>{{$title}}</h1>
    <table border="1">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Asal</th>
        </tr>
        @php $no = 1; @endphp
        @foreach ($daf_mhs as $mhs)
        <tr>
            <td>{{$no++}}</td>
            <td>{{$mhs['nama']}}</td>
            <td>{{$mhs['asal']}}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>