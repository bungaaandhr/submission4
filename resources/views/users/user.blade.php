<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial=scale=1.0">
    <meta http-equiv="X-US-Compatible" content="ie=edge">
    <title>Index User</title>
</head>
<body>
    <h1>Data User</h1>
    <input type="text" value={{ $id }}>

    @foreach ($data as $u)
    <ul>
        <li>{{  $u['nama'] }}</li>
        <li>{{  $u['email'] }}</li>
        <li>{{  $u['telp'] }}</li>
        <li>{{  $u['alamat']['street'], $u['alamat']['postcode'] }}</li>
    </ul>
    @endforeach
</body>
</html
