<!DOCTYPE html>
<html>
<head>
    <title>Katalog</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-red-100 min-h-screen flex items-center justify-center">

    <div class="bg-white p-8 rounded-2xl shadow-2xl max-w-2xl w-full border border-red-200">

        <h1 class="text-3xl font-bold mb-6 text-red-800">Katalog Event</h1>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div class="bg-red-50 p-4 rounded-xl shadow hover:shadow-lg transition">
                <h2 class="font-semibold text-red-700">Event 1</h2>
                <p class="text-sm text-gray-600">Deskripsi event</p>
            </div>

            <div class="bg-red-50 p-4 rounded-xl shadow hover:shadow-lg transition">
                <h2 class="font-semibold text-red-700">Event 2</h2>
                <p class="text-sm text-gray-600">Deskripsi event</p>
            </div>
        </div>

        <div class="mt-6 flex gap-3">
            <a href="/" class="bg-red-600 text-white px-4 py-2 rounded-lg hover:bg-red-800 transition">Home</a>
            <a href="/profil" class="bg-red-500 text-white px-4 py-2 rounded-lg hover:bg-red-700 transition">Profil</a>
            <a href="/bantuan" class="bg-red-400 text-white px-4 py-2 rounded-lg hover:bg-red-600 transition">Bantuan</a>
        </div>

    </div>

</body>
</html>