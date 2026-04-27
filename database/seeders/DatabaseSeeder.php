<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // 1. Akun Admin Utama
        \App\Models\User::create([
            'name' => 'Admin Amikom',
            'email' => 'admin@amikom.ac.id',
            'password' => bcrypt('password'),
            'role' => 'admin',
        ]);

        // 2. Insert Kategori Event
        $category = \App\Models\Category::create([
            'name' => 'Seminar IT',
            'slug' => 'seminar-it',
        ]);

        $category2 = \App\Models\Category::firstOrCreate([
            'name' => 'Entertainment',
            'slug' => 'entertainment',
        ]);

        $category3 = \App\Models\Category::create([
            'name' => 'Business & Startup',
            'slug' => 'business-startup',
        ]);

        // 3. Insert Sample Events

        // Event 1
        \App\Models\Event::create([
            'category_id' => $category2->id,
            'title' => 'Jazz Night 2026',
            'description' => 'Nikmati malam yang indah dengan alunan musik jazz live, suasana santai, dan penampilan spesial dari musisi lokal terbaik.',
            'date' => '2026-05-10 19:00:00',
            'location' => 'Amikom Baru',
            'price' => 50000,
            'stock' => 100,
            'poster_path' => 'posters/event-1.png',
        ]);

        // Event 2
        \App\Models\Event::create([
            'category_id' => $category->id,
            'title' => 'AI Summit & Expo 2026',
            'description' => 'Jelajahi tren terkini dalam bidang Artificial Intelligence, networking dengan praktisi industri, dan demo teknologi terbaru.',
            'date' => '2026-05-01 13:00:00',
            'location' => 'Ruang Cinema',
            'price' => 45000,
            'stock' => 150,
            'poster_path' => 'posters/event-2.png',
        ]);

        // Event 3
        \App\Models\Event::create([
            'category_id' => $category->id,
            'title' => 'Cyber Security Workshop',
            'description' => 'Pelatihan dasar keamanan sistem dan cara melindungi data dari serangan cyber di era digital.',
            'date' => '2026-05-03 09:00:00',
            'location' => 'Amikom Kampus 2',
            'price' => 60000,
            'stock' => 80,
            'poster_path' => 'posters/event-3.png',
        ]);

        // Event 4
        \App\Models\Event::create([
            'category_id' => $category2->id,
            'title' => 'E-Sport Campus Championship',
            'description' => 'Kompetisi e-sport antar mahasiswa dengan berbagai game populer dan hadiah jutaan rupiah.',
            'date' => '2026-05-05 13:00:00',
            'location' => 'Amikom Kampus 1',
            'price' => 30000,
            'stock' => 200,
            'poster_path' => 'posters/event-4.png',
        ]);

        // Event 5
      \App\Models\Event::create([
        'category_id' => $category3->id,
         'title' => 'Business Model Canvas Training',
         'description' => 'Workshop interaktif untuk mahasiswa dalam mengembangkan ide bisnis sederhana menjadi model bisnis yang siap dijalankan.',
         'date' => '2026-05-07 10:00:00',
         'location' => 'Amikom Kampus 2',
         'price' => 40000,
         'stock' => 60,
         'poster_path' => 'posters/event-5.png',
         ]);

        // Event 6
        \App\Models\Event::create([
            'category_id' => $category3->id,
            'title' => 'Digital Marketing Masterclass',
            'description' => 'Belajar strategi pemasaran digital mulai dari social media, SEO, hingga ads.',
            'date' => '2026-05-09 09:00:00',
            'location' => 'Amikom Kampus 2',
            'price' => 65000,
            'stock' => 90,
            'poster_path' => 'posters/event-6.png',
        ]);
    }
}