<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sebuah website</title>
</head>
<body>
    <div class="navbar">
        <a href=" {{ route('data') }} ">Show</a>
        <a href=" {{ route('form') }} ">Create</a>
    </div>
    @yield('content')
</body>
</html>