<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <center>
        <h1>Table Pengguna</h1>
    <table border="1">
        <tr>

            <th>ID</th>
            <th>Nama</th>
            
        </tr>
        @foreach($Penggunas as $data)
        <tr>

            <td>{{$data->id}}</td>
            <td>{{$data->nama}}</td>
           
        </tr>
        @endforeach
    </table>
</center>
</body>
</html>