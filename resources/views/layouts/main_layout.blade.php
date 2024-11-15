<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NOTES</title>
    <link rel="stylesheet" href="{{ asset('bootstrap/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('fontawesome/css/all.min.css') }}">
    <link rel="shortcut icon"href="{{ asset('images/favicon.png') }}" type="image/png">
</head>

<body>
    {{-- Header --}}

    @yield('content')

    {{-- Footer --}}
    <script src="{{ asset('bootstrap/bootstrap.bundle.min.js') }}"></script>
</body>

</html>
