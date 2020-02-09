<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To Do</title>
    <link rel="stylesheet" href="{{ asset('public/bootstrap/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{ asset('public/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('public/css/style.css')}}">
    <script src="https://kit.fontawesome.com/ef853d47d1.js" crossorigin="anonymous"></script>
</head>

<body>
    @include('sections.sidebar')
    <div class="content">
        @yield('main')
        @include('sections.front')
    </div>

    </div>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="{{ asset('public/bootstrap/js/bootstrap.js')}}"></script>
    <script src="{{ asset('public/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('public/js/custom.js')}}"></script>

</body>

</html>
