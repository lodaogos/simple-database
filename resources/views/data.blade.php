<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data</title>
</head>
<body>
    <h1>Test</h1>
    @foreach ($users as $user)
        <p>Name: {{ $user->name }}</p>
        <p>Email: {{ $user->email }}</p>
        <p>Color: {{ $user->color }}</p>
        <p>Age: {{ $user->age }}</p>
    @endforeach
</body>
</html>