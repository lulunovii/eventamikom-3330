<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Katalog Event - EventAmikom</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <style>body { font-family: 'Inter', sans-serif; }</style>
</head>
<body class="bg-gradient-to-br from-indigo-50 via-white to-purple-50 min-h-screen pb-20">

    <nav class="sticky top-0 z-50 backdrop-blur-xl bg-white/80 border-b border-gray-200 shadow-sm">
        <div class="max-w-6xl mx-auto px-6 py-4 flex justify-between items-center">
            
            <a href="/" class="flex items-center gap-3 group">
                <div class="bg-gradient-to-br from-indigo-500 to-purple-600 text-white p-2.5 rounded-xl group-hover:rotate-12 group-hover:scale-110 transition-all duration-300 shadow-md">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                    </svg>
                </div>
                <span class="text-2xl font-extrabold text-gray-800 tracking-tight group-hover:text-indigo-600 transition-colors duration-300">
                    Event<span class="text-transparent bg-clip-text bg-gradient-to-r from-indigo-600 to-purple-600">Amikom</span>
                </span>
            </a>

            <div class="hidden md:flex items-center space-x-1 sm:space-x-3">
                <a href="/" class="px-5 py-2.5 text-sm font-semibold text-gray-600 hover:text-indigo-600 hover:bg-indigo-50 rounded-full transition-all">Home</a>
                <a href="/profil" class="px-5 py-2.5 text-sm font-semibold text-gray-600 hover:text-indigo-600 hover:bg-indigo-50 rounded-full transition-all">Profil</a>
                <a href="/katalog" class="px-5 py-2.5 text-sm font-bold text-white bg-gradient-to-r from-indigo-600 to-purple-600 shadow-md shadow-indigo-200/50 rounded-full hover:shadow-lg hover:scale-105 transition-all">Katalog</a>
                <a href="/bantuan" class="px-5 py-2.5 text-sm font-semibold text-gray-600 hover:text-indigo-600 hover:bg-indigo-50 rounded-full transition-all">Bantuan</a>
            </div>

            <div class="md:hidden flex items-center">
                <button class="text-gray-600 hover:text-indigo-600 focus:outline-none p-2 bg-indigo-50 rounded-lg">
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
            </div>
            
        </div>
    </nav>

    <main class="max-w-6xl mx-auto px-6 py-12">
        <div class="text-center mb-12">
            <h1 class="text-4xl font-bold text-gray-800 tracking-tight">Katalog Event Kampus</h1>
            <p class="text-gray-500 mt-2">Pilih dan daftarkan diri Anda pada event yang tersedia bulan ini.</p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="bg-white rounded-2xl shadow-sm hover:shadow-xl transition-all duration-300 border border-gray-100 overflow-hidden flex flex-col group">
                <div class="h-48 bg-indigo-100 relative overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1581291518857-4e27b48ff24e?auto=format&fit=crop&w=600&q=80" alt="Seminar UI/UX" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                    <div class="absolute top-4 right-4 bg-white/90 backdrop-blur text-indigo-600 text-xs font-bold px-3 py-1 rounded-full shadow-sm">
                        Seminar
                    </div>
                </div>
                <div class="p-6 flex-1 flex flex-col">
                    <h2 class="text-xl font-bold text-gray-800 mb-2">Seminar UI/UX Design</h2>
                    <p class="text-gray-500 text-sm mb-4 flex-1">Pelajari dasar-dasar perancangan antarmuka aplikasi yang user-friendly dan estetis untuk meningkatkan pengalaman pengguna.</p>
                    <button class="w-full bg-indigo-50 text-indigo-600 font-semibold py-2.5 rounded-xl hover:bg-indigo-600 hover:text-white transition-colors">Daftar Event</button>
                </div>
            </div>
            
            <div class="bg-white rounded-2xl shadow-sm hover:shadow-xl transition-all duration-300 border border-gray-100 overflow-hidden flex flex-col group">
                <div class="h-48 bg-purple-100 relative overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1633356122544-f134324a6cee?auto=format&fit=crop&w=600&q=80" alt="Workshop" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                    <div class="absolute top-4 right-4 bg-white/90 backdrop-blur text-purple-600 text-xs font-bold px-3 py-1 rounded-full shadow-sm">
                        Workshop
                    </div>
                </div>
                <div class="p-6 flex-1 flex flex-col">
                    <h2 class="text-xl font-bold text-gray-800 mb-2">Web Development: Laravel 12</h2>
                    <p class="text-gray-500 text-sm mb-4 flex-1">Workshop interaktif membangun aplikasi web modern menggunakan framework PHP terpopuler dari nol hingga deploy.</p>
                    <button class="w-full bg-indigo-50 text-indigo-600 font-semibold py-2.5 rounded-xl hover:bg-indigo-600 hover:text-white transition-colors">Daftar Event</button>
                </div>
            </div>

            <div class="bg-white rounded-2xl shadow-sm hover:shadow-xl transition-all duration-300 border border-gray-100 overflow-hidden flex flex-col group">
                <div class="h-48 bg-pink-100 relative overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1555066931-4365d14bab8c?auto=format&fit=crop&w=600&q=80" alt="Kompetisi" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                    <div class="absolute top-4 right-4 bg-white/90 backdrop-blur text-pink-600 text-xs font-bold px-3 py-1 rounded-full shadow-sm">
                        Kompetisi
                    </div>
                </div>
                <div class="p-6 flex-1 flex flex-col">
                    <h2 class="text-xl font-bold text-gray-800 mb-2">Kompetisi Inovasi Aplikasi</h2>
                    <p class="text-gray-500 text-sm mb-4 flex-1">Ajang unjuk gigi bagi mahasiswa untuk mempresentasikan ide startup dan aplikasi revolusioner (seperti manajemen food waste, dll).</p>
                    <button class="w-full bg-indigo-50 text-indigo-600 font-semibold py-2.5 rounded-xl hover:bg-indigo-600 hover:text-white transition-colors">Daftar Event</button>
                </div>
            </div>
        </div>
    </