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
        <footer>
            @include('components.footer')
        </footer>
    </div>
</body>

</html>
