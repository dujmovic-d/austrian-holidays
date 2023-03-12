<!doctype html>
<html>

<head>
    @include('components.head')
</head>

<body class="bg-dark text-white">
    <div class="container-fluid col-8">
    <header>
        @include('components.header')
    </header>
        @yield('content')
    </div>
    <footer>
        @include('components.footer')
    </footer>
</body>

</html>
