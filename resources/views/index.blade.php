<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sebuah website</title>

    <script src="{{ asset('js/app.js') }}" defer></script>
    
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    @vite(['resources/js/app.js', 'resources/sass/app.scss'])
</head>
<body>
    <div class="navbar navbar-expand-sm bg-dark">
        <ul class="navbar-nav">
            <li class="navbar-item">
                <a href=" {{ route('data') }} " class="nav-link text-white">Show</a>
            </li>
            <li class="navbar-item">
                <a href=" {{ route('form') }} " class="nav-link text-white">Create</a>
            </li>
        </ul>
    </div>

    <div class="container my-5">
        @yield('content')
    </div>

</body>
</html>