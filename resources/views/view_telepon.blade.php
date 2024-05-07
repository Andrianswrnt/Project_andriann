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
        <h1>Table Post</h1>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>No Telepon</th>
            <th>ID Pengguna</th>
        </tr>
        @foreach($Telepons as $data)
        <tr>
            <td>{{$data->id}}</td>
            <td>{{$data->No_Telepon}}</td>
            <td>{{$data->Pengguna_id}}</td>
        </tr>
        @endforeach
    </table>
</center>
</body>
</html>