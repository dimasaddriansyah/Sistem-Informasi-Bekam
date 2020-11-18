<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    Data Pelanggan
    <table>
        <tr>
            <th>Nama Pelanggan</th>
            <th>Email Pelanggan</th>
        </tr>
        @foreach ($data as $item)
        <tr>
            <td>{{ $item->nama }}</td>
            <td>{{ $item->email }}</td>
        </tr>
        @endforeach
    </table>

</body>
</html>
