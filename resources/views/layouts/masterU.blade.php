<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Discover World | @yield('title')</title>
</head>
<body>
    @include('partials.UserNav')
    <main>
        @yield('main')
    </main>
    @include('partials.footer')
    
</body>
</html>