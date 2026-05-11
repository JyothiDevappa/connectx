<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

<!DOCTYPE html>
<html lang="en">

@include('layout.header')

<body>

    @include('layout.navbar')

    <main class="main">
        @yield('content')
    </main>

    @include('layout.footer')

</body>
</html>