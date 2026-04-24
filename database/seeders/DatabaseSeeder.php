<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    
    public function run(): void
    {
        //1. Akun Admin Utama
        \App\Models\User::create([
            'name' => 'Admin Amikom',
            'email' => 'admin@amikom.ac.id',
            'password' => bcrypt('password'),
            'role' => 'admin',
        ]);

        //2. Insert Kategori Event
        $category = \App\Models\Category::create([
            'name' => 'Seminar IT',
            'slug' => 'seminar-it',
        ]);

        $category2 = \App\Models\Category::create([
            'name' => 'Entertaiment',
            'slug' => 'entertaiment',
        ]);

        //Latihan atau Tugas eksperimen database seeder
        $category3 = \App\Models\Category::create([
            'name' => 'E-Sport U-Champ',
            'slug' => 'e-sport-u-champ',
        ]);

        $category4 = \App\Models\Category::create([
            'name' => 'Business & Startup',
            'slug' => 'business-startup',
        ]);

        $category5 = \App\Models\Category::create([
            'name' => 'Public Speaking',
            'slug' => 'public-speaking',
        ]);

        //3. Insert Sampel Events
        \App\Models\Event::create([
            'category_id' => $category2->id,
            'title' => 'Jazz Night 2025',
            'description' => 'Nikmati malam yang indah dengan alunan musik jazz yang merdu.',
            'date' => '2026-05-10 19:00:00',
            'location' => 'Amikom Baru',
            'price' => 50000,
            'stock' => 100,
            'poster_path' => 'posters/event-1.png',
        ]);

        \App\Models\Event::create([
            'category_id' => $category->id,
            'title' => 'Hackaton - Unleash Your Inner Developer',
            'description' => 'Ayo asah skill coding kamu dan ciptakan solusi inovatif untuk tantangan masa depan!',
            'date' => '2026-05-05 10:00:00',
            'location' => 'Inkubator Amikom',
            'price' => 50000,
            'stock' => 100,
            'poster_path' => 'posters/event-2.png',
        ]);

        \App\Models\Event::create([
        'category_id' => $category->id, 
        'title' => 'AI & FUTURE TECH SUMMIT 2026' , 
        'description' => 'Jelajahi tren terkini dalam kecerdasan buatan dan teknologi masa depan bersama para ahli di bidangnya.' ,
        'date' => '2026-05-01 13:00:00' ,
        'location' => 'Cinema Unit 6' ,
        'price' => 50000 ,
        'stock' => 100 ,
        'poster_path' => 'posters/event-3.png' ,
        ]);

        //Latihan experimen database seeder
        \App\Models\Event::create([
            'category_id' => $category3->id, 
            'title' => 'Mobile Legends Campus Championship', 
            'description' => 'Turnamen tingkat kampus untuk mencari tim MLBB terbaik. Buktikan skill mekanik tim kamu di sini!',
            'date' => '2026-06-15 10:00:00',
            'location' => 'Ruang Citra 2',
            'price' => 75000,
            'stock' => 32, // Kuota tim
            'poster_path' => 'posters/event-4.png',
        ]);

        \App\Models\Event::create([
            'category_id' => $category3->id, 
            'title' => 'Valorant Amikom Battle Arena', 
            'description' => 'Siapkan aim terbaikmu! Turnamen Valorant paling bergengsi semester ini.',
            'date' => '2026-06-20 09:00:00',
            'location' => 'Lab Komputer 4',
            'price' => 100000,
            'stock' => 16,
            'poster_path' => 'posters/event-5.png',
        ]);

        \App\Models\Event::create([
            'category_id' => $category2->id, 
            'title' => 'Stand Up Comedy Campus Tour', 
            'description' => 'Malam penuh tawa bersama komika-komika ternama tanah air.',
            'date' => '2026-07-05 19:30:00',
            'location' => 'Auditorium Amikom',
            'price' => 60000,
            'stock' => 200,
            'poster_path' => 'posters/event-6.png',
        ]);

        \App\Models\Event::create([
            'category_id' => $category4->id, 
            'title' => 'ZeroMeal Business Pitching', 
            'description' => 'Kompetisi presentasi rancangan konsep bisnis dan inovasi desain aplikasi untuk mengurangi food waste.',
            'date' => '2026-06-25 09:00:00',
            'location' => 'Inkubator Amikom',
            'price' => 30000,
            'stock' => 50,
            'poster_path' => 'posters/event-7.png',
        ]);

        \App\Models\Event::create([
            'category_id' => $category5->id, 
            'title' => 'Master of Ceremony (MC) 101', 
            'description' => 'Workshop seru buat kamu yang ingin belajar nge-MC pakai script kasual di depan ratusan orang.',
            'date' => '2026-07-25 10:00:00',
            'location' => 'Lab Komputer 4',
            'price' => 40000,
            'stock' => 35,
            'poster_path' => 'posters/event-8.png',
        ]);

    }
}
