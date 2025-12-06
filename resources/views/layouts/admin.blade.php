<!DOCTYPE html>
<html lang="en">
<head>
    <title>@yield('title')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100 min-h-screen">

    @yield('content')

</body>
</html>
