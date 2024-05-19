<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Document</title>
</head>

<body class="bg-slate-50">
    <nav class="bg-slate-100 shadow-md border-b-2 flex border-black py-5 flex-row items-center justify-between">
        <div class="text-2xl mx-5">
            <h1>Pole-IT</h1>
        </div>
        <div class="flex flex-row items-start justify-center align-baseline space-x-5 mx-5">
            <a href="" class="p-2">Home</a>
            <a href="" class="p-2">Product</a>
            <a href="" class="p-2">About</a>
            <a href="" class="p-2">Support</a>
            <a href="" class="p-2">Login</a>
            <a href="" class="bg-purple-600 text-white p-2 rounded">Register</a>
        </div>
    </nav>
    @yield('body')
</body>

</html>