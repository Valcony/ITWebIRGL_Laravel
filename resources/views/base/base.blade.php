<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>VPT | Test Page</title>
</head>
<style>
    body {
        margin: 0;
        padding: 0;
        font-family: Arial, sans-serif;
        display: flex;
        min-height: 100vh;
        background: radial-gradient(ellipse at bottom, #0d1d31 0%, #0c0d13 100%);
    }
</style>
<body>
    <div class="row w-full">
        <div>
            @include('include.navbar')
        </div>
        <div>
            @yield('content')
    </div>
    @include('include.footer')
</body>
</html>
