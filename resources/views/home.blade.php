<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Home - AmikomEventHub</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gradient-to-r from-red-900 via-red-800 to-red-700 min-h-screen flex flex-col">

    <!-- Navbar -->
    <nav class="bg-white shadow-md p-4 flex justify-center gap-4">
        <a href="/" class="bg-red-800 text-white px-4 py-2 rounded-lg hover:bg-red-900 transition">Home</a>
        <a href="/profil" class="bg-red-700 text-white px-4 py-2 rounded-lg hover:bg-red-800 transition">Profil</a>
        <a href="/katalog" class="bg-red-600 text-white px-4 py-2 rounded-lg hover:bg-red-700 transition">Katalog</a>
        <a href="/bantuan" class="bg-red-500 text-white px-4 py-2 rounded-lg hover:bg-red-600 transition">Bantuan</a>
    </nav>

    <!-- Hero Section -->
    <div class="flex flex-col items-center justify-center text-center flex-grow px-6">

        <div class="bg-white p-8 rounded-2xl shadow-2xl max-w-xl w-full">
            <h1 class="text-3xl font-bold text-red-800 mb-4">
                Selamat Datang di AmikomEventHub ❤️
            </h1>

            <p class="text-gray-600 mb-6">
                Platform sederhana untuk melihat berbagai event menarik dari Amikom.
                Jelajahi katalog event, lihat profil praktikan, atau temukan bantuan yang kamu butuhkan.
            </p>

            <!-- Button Section -->
            <div class="flex flex-col gap-3">
                <a href="/katalog" class="bg-red-600 text-white py-2 rounded-lg hover:bg-red-700 transition">
                    Lihat Katalog Event
                </a>

                <a href="/profil" class="bg-red-700 text-white py-2 rounded-lg hover:bg-red-800 transition">
                    Lihat Profil
                </a>

                <a href="/bantuan" class="bg-red-500 text-white py-2 rounded-lg hover:bg-red-600 transition">
                    Bantuan / FAQ
                </a>
            </div>
        </div>

    </div>

    <!-- Footer -->
    <footer class="text-center text-white p-4 text-sm">
        © 2026 AmikomEventHub | Praktikum Laravel
    </footer>

</body>
</html>