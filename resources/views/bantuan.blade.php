<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pusat Bantuan - EventAmikom</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Inter', sans-serif; }
        /* Menyembunyikan icon default pada tag summary */
        details > summary { list-style: none; }
        details > summary::-webkit-details-marker { display: none; }
        
        /* Animasi mulus untuk accordion */
        details[open] summary ~ * {
            animation: slideDown 0.3s ease-in-out;
        }
        @keyframes slideDown {
            from { opacity: 0; transform: translateY(-10px); }
            to { opacity: 1; transform: translateY(0); }
        }
    </style>
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
                <a href="/katalog" class="px-5 py-2.5 text-sm font-semibold text-gray-600 hover:text-indigo-600 hover:bg-indigo-50 rounded-full transition-all">Katalog</a>
                <a href="/bantuan" class="px-5 py-2.5 text-sm font-bold text-white bg-gradient-to-r from-indigo-600 to-purple-600 shadow-md shadow-indigo-200/50 rounded-full hover:shadow-lg hover:scale-105 transition-all">Bantuan</a>
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

    <main class="max-w-3xl mx-auto px-6 py-12">
        
        <div class="text-center mb-12">
            <h1 class="text-4xl font-extrabold text-gray-800 tracking-tight mb-4">Halo, ada yang bisa kami bantu?</h1>
            <p class="text-gray-500 mb-8">Temukan jawaban cepat untuk pertanyaan seputar event, akun, dan sertifikat di bawah ini.</p>
            
            <div class="relative max-w-xl mx-auto shadow-lg rounded-full">
                <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                    <svg class="h-5 w-5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                    </svg>
                </div>
                <input type="text" class="block w-full pl-12 pr-4 py-4 rounded-full border-gray-200 focus:ring-indigo-500 focus:border-indigo-500 text-gray-700 bg-white shadow-sm outline-none transition-all focus:shadow-md" placeholder="Cari topik bantuan (contoh: sertifikat, cara daftar)...">
                <button class="absolute inset-y-1 right-1 bg-indigo-600 hover:bg-indigo-700 text-white font-semibold py-2 px-6 rounded-full transition-colors">
                    Cari
                </button>
            </div>
        </div>

        <div class="mb-10">
            <h2 class="text-xl font-bold text-gray-800 mb-4 flex items-center">
                <span class="bg-indigo-100 text-indigo-600 p-2 rounded-lg mr-3">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                </span>
                Pendaftaran & Keikutsertaan
            </h2>
            <div class="space-y-3">
                <details class="group bg-white p-5 rounded-2xl shadow-sm border border-gray-100 cursor-pointer hover:border-indigo-200 transition-colors">
                    <summary class="flex justify-between items-center font-semibold text-gray-800">
                        Bagaimana cara mendaftar event?
                        <span class="transition group-open:rotate-180 text-indigo-500">
                            <svg fill="none" height="24" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" width="24"><path d="M19 9l-7 7-7-7"></path></svg>
                        </span>
                    </summary>
                    <p class="text-gray-500 mt-4 leading-relaxed text-sm border-t border-gray-50 pt-3">
                        Buka halaman <strong>Katalog</strong>, pilih event yang diminati, lalu klik tombol "Daftar Event". Pastikan Anda sudah login menggunakan email student Amikom Anda sebelum mendaftar.
                    </p>
                </details>

                <details class="group bg-white p-5 rounded-2xl shadow-sm border border-gray-100 cursor-pointer hover:border-indigo-200 transition-colors">
                    <summary class="flex justify-between items-center font-semibold text-gray-800">
                        Apakah semua event di sini gratis?
                        <span class="transition group-open:rotate-180 text-indigo-500">
                            <svg fill="none" height="24" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" width="24"><path d="M19 9l-7 7-7-7"></path></svg>
                        </span>
                    </summary>
                    <p class="text-gray-500 mt-4 leading-relaxed text-sm border-t border-gray-50 pt-3">
                        Sebagian besar event dari AMIKOM bersifat gratis untuk mahasiswa aktif. Namun, beberapa workshop atau sertifikasi mungkin memungut biaya pendaftaran. Status berbayar/gratis selalu tertera di detail event.
                    </p>
                </details>

                <details class="group bg-white p-5 rounded-2xl shadow-sm border border-gray-100 cursor-pointer hover:border-indigo-200 transition-colors">
                    <summary class="flex justify-between items-center font-semibold text-gray-800">
                        Bisakah saya membatalkan pendaftaran event?
                        <span class="transition group-open:rotate-180 text-indigo-500">
                            <svg fill="none" height="24" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" width="24"><path d="M19 9l-7 7-7-7"></path></svg>
                        </span>
                    </summary>
                    <p class="text-gray-500 mt-4 leading-relaxed text-sm border-t border-gray-50 pt-3">
                        Bisa. Anda dapat membatalkan pendaftaran melalui halaman dashboard profil Anda maksimal 1x24 jam sebelum event dimulai, agar kuota Anda dapat diberikan kepada mahasiswa lain.
                    </p>
                </details>
            </div>
        </div>

        <div class="mb-10">
            <h2 class="text-xl font-bold text-gray-800 mb-4 flex items-center">
                <span class="bg-purple-100 text-purple-600 p-2 rounded-lg mr-3">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"></path></svg>
                </span>
                Sertifikat & Benefit
            </h2>
            <div class="space-y-3">
                <details class="group bg-white p-5 rounded-2xl shadow-sm border border-gray-100 cursor-pointer hover:border-purple-200 transition-colors">
                    <summary class="flex justify-between items-center font-semibold text-gray-800">
                        Kapan saya akan mendapatkan e-sertifikat?
                        <span class="transition group-open:rotate-180 text-purple-500">
                            <svg fill="none" height="24" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" width="24"><path d="M19 9l-7 7-7-7"></path></svg>
                        </span>
                    </summary>
                    <p class="text-gray-500 mt-4 leading-relaxed text-sm border-t border-gray-50 pt-3">
                        E-sertifikat biasanya dikirimkan melalui email atau dapat diunduh di halaman dashboard Anda maksimal H+7 setelah event selesai, dengan syarat Anda telah mengisi form presensi dan evaluasi acara.
                    </p>
                </details>
                <details class="group bg-white p-5 rounded-2xl shadow-sm border border-gray-100 cursor-pointer hover:border-purple-200 transition-colors">
                    <summary class="flex justify-between items-center font-semibold text-gray-800">
                        Apakah sertifikat ini diakui untuk poin kemahasiswaan?
                        <span class="transition group-open:rotate-180 text-purple-500">
                            <svg fill="none" height="24" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" width="24"><path d="M19 9l-7 7-7-7"></path></svg>
                        </span>
                    </summary>
                    <p class="text-gray-500 mt-4 leading-relaxed text-sm border-t border-gray-50 pt-3">
                        Ya, seluruh event resmi yang terdaftar pada platform EventAmikom memiliki bobot poin aktivitas mahasiswa yang dapat diklaim ke bagian kemahasiswaan Universitas Amikom.
                    </p>
                </details>
            </div>
        </div>

        <div>
            <h2 class="text-xl font-bold text-gray-800 mb-4 flex items-center">
                <span class="bg-pink-100 text-pink-600 p-2 rounded-lg mr-3">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                </span>
                Akun & Teknis
            </h2>
            <div class="space-y-3">
                <details class="group bg-white p-5 rounded-2xl shadow-sm border border-gray-100 cursor-pointer hover:border-pink-200 transition-colors">
                    <summary class="flex justify-between items-center font-semibold text-gray-800">
                        Bagaimana jika saya lupa password akun?
                        <span class="transition group-open:rotate-180 text-pink-500">
                            <svg fill="none" height="24" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" width="24"><path d="M19 9l-7 7-7-7"></path></svg>
                        </span>
                    </summary>
                    <p class="text-gray-500 mt-4 leading-relaxed text-sm border-t border-gray-50 pt-3">
                        Gunakan fitur "Lupa Password" di halaman login. Sistem akan mengirimkan tautan reset password ke email student Anda (contoh: nama@students.amikom.ac.id).
                    </p>
                </details>
                <details class="group bg-white p-5 rounded-2xl shadow-sm border border-gray-100 cursor-pointer hover:border-pink-200 transition-colors">
                    <summary class="flex justify-between items-center font-semibold text-gray-800">
                        Ke mana saya harus melapor jika ada error pada web?
                        <span class="transition group-open:rotate-180 text-pink-500">
                            <svg fill="none" height="24" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" width="24"><path d="M19 9l-7 7-7-7"></path></svg>
                        </span>
                    </summary>
                    <p class="text-gray-500 mt-4 leading-relaxed text-sm border-t border-gray-50 pt-3">
                        Anda dapat melapor ke tim IT Support dengan mengirimkan email ke <em>support@amikomeventhub.com</em> atau menghubungi admin via WhatsApp dengan melampirkan screenshot pesan error yang muncul.
                    </p>
                </details>
            </div>
        </div>

    </main>

</body>
</html>