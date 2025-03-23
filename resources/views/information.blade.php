<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Xin chào</h1>
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Địa chỉ</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($information as $item)
                <tr>
                    <td>{{$item['age']}}</td>
                    <td>{{$item['name']}}</td>
                    <td>{{$item['address']}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>