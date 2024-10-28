<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rajeendra Fawaz Majiid Anthuryo - Portfolio</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="{{ asset('asset/css/style.css') }}">
</head>
<body class="bg-gray-100 text-gray-800">
    <div class="container mx-auto max-w-6xl px-4">
        <header class="text-center py-8 bg-black">
            <nav>
                <ul>
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li><a href="{{ route('about') }}">About</a></li>
                    <li><a href="{{ route('login') }}">Login</a></li>
                </ul>
            </nav>
            <img src="asset/img/Ryo Matsumura.jpg" alt="Profile Picture"
                 class="rounded-full mx-auto mb-4 w-32 h-32 object-cover bg-black">
            <h1 class="text-3xl font-bold">Rajeendra Fawaz Majiid Anthuryo</h1>
            <p class="text-gray-600">SMK PPLG Student | Web Developer</p>
        </header>

        <main class="w-full"> 
            <section class="bg-white rounded-lg shadow-md p-6 mb-6">
                <h2 class="text-2xl font-semibold mb-4">Contact</h2>
                <p class="text-gray-700"><strong>Full Name:</strong> {{ $name }}</p>
                <p class="text-gray-700"><strong>Address:</strong> {{ $address }}</p>
                <p class="text-gray-700"><strong>Email:</strong> {{ $email }}</p>
            </section>
        </main>

        <footer class="text-center py-4 mt-8 text-sm text-gray-600 bg-black">
            © 2024 Rajeendra Fawaz Majiid Anthuryo. All Rights Reserved.
        </footer>
    </div>
</body>
</html>
