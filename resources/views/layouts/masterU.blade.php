<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css"  rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>
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