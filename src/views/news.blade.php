<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table class="table">
        <tr>
            <th>Name</th>
            <th>Name</th>
            <th>Name</th>
            <th></th>
        </tr>
        @foreach($data as $new)
        <tr>
            <td>{{ $new->name }}</td>
            <td>{{ $new->title }}</td>
            <td>{{ $new->description }}</td>
            <td>
            <button type="submit">Them</button>
            <button type="submit">Sua</button>
            <button type="submit">Xoa</button></td>
        </tr>
        @endforeach
    </table>
</body>
</html>