<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('assets/stylesheets/style.css') }}">
</head>
<body>
    @include('partials.sidebar')
    <main class="main-content">
        <h1 class="cumbs">@yield('cumbs')</h1>
        @yield('content')
    </main>
    @stack('scripts')
</body>
</html>