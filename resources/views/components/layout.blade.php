<!doctype html>


<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.2/dist/alpine.min.js" defer></script>

<head>
    <style>
        #header {
            background: black;
            font-family: Arial, Helvetica, sans-serif;
            height: 55px;
        }
    </style>
</head>

<body>
<div class="items-center md:mt-0 text-right" id="header">
    @auth()
        <span class="font-bold uppercase text-right" style="color: white">Welcome, {{ auth()->user()->name }}!</span>
        <form method="post" action="/logout" class="font-semibold text-blue-500 ml-6">
            @csrf

            <button type="submit">Logout</button>

        </form>
    @else
        <br>
        <a href="/register" class="font-bold text-red-600 uppercase">Register</a>
        <a href="/login" class="font-bold ml-6 text-blue-600 uppercase mr-4">Login</a>
    @endauth
    {{ $slot }}
</div>

<x-flash/>
</body>
