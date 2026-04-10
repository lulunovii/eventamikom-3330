<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Praktikan</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <style>body { font-family: 'Inter', sans-serif; }</style>
</head>
<body class="bg-gradient-to-br from-indigo-50 via-white to-purple-50 min-h-screen">

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
                <a href="/profil" class="px-5 py-2.5 text-sm font-bold text-white bg-gradient-to-r from-indigo-600 to-purple-600 shadow-md shadow-indigo-200/50 rounded-full hover:shadow-lg hover:scale-105 transition-all">Profil</a>
                <a href="/katalog" class="px-5 py-2.5 text-sm font-semibold text-gray-600 hover:text-indigo-600 hover:bg-indigo-50 rounded-full transition-all">Katalog</a>
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

    <main class="max-w-2xl mx-auto px-6 py-16">
        <div class="bg-white rounded-3xl shadow-xl border border-gray-100 overflow-hidden text-center pb-12">
            <div class="h-32 bg-gradient-to-r from-indigo-500 to-purple-600 relative"></div>
            
            <div class="w-28 h-28 bg-white rounded-full flex items-center justify-center text-5xl font-bold text-indigo-600 shadow-lg border-4 border-white mx-auto -mt-14 relative z-10">
                LN
            </div>
            
            <div class="px-8 mt-6">
                <h1 class="text-3xl font-bold text-gray-800">Lulu Noviyanti</h1>
                <p class="text-gray-500 mt-1">Mahasiswa</p>
                
                <div class="mt-8 flex flex-col items-center space-y-3">
                    <div class="bg-indigo-50/50 hover:bg-indigo-50 transition-colors px-5 py-3 rounded-xl border border-indigo-100 w-full max-w-sm flex justify-between items-center">
                        <span class="text-gray-500 text-sm font-medium">NIM</span>
                        <span class="text-indigo-700 font-bold">24.12.3330</span>
                    </div>
                    
                    <div class="bg-indigo-50/50 hover:bg-indigo-50 transition-colors px-5 py-3 rounded-xl border border-indigo-100 w-full max-w-sm flex justify-between items-center">
                        <span class="text-gray-500 text-sm font-medium">Program Studi</span>
                        <span class="text-indigo-700 font-bold">S1 Sistem Informasi</span>
                    </div>
                    
                    <div class="bg-indigo-50/50 hover:bg-indigo-50 transition-colors px-5 py-3 rounded-xl border border-indigo-100 w-full max-w-sm flex justify-between items-center">
                        <span class="text-gray-500 text-sm font-medium">Kelas</span>
                        <span class="text-indigo-700 font-bold">24S1SI05</span>
                    </div>

                    <div class="bg-indigo-50/50 hover:bg-indigo-50 transition-colors px-5 py-3 rounded-xl border border-indigo-100 w-full max-w-sm flex justify-between items-center">
                        <span class="text-gray-500 text-sm font-medium">Universitas</span>
                        <span class="text-indigo-700 font-bold text-right">Universitas Amikom<br>Yogyakarta</span>
                    </div>
                </div>

                <div class="mt-10 pt-8 border-t border-gray-100">
                    <p class="text-sm font-semibold text-gray-400 uppercase tracking-wider mb-4">Hubungi Saya</p>
                    <div class="flex justify-center space-x-4">
                        
                        <a href="https://github.com/lulunovii/eventamikom-3330" target="_blank" class="w-12 h-12 rounded-full bg-slate-50 border border-slate-200 flex items-center justify-center text-slate-600 hover:bg-gray-800 
                        hover:border-gray-800 hover:text-white transition-all duration-300 shadow-sm hover:shadow-md" title="GitHub">
                            <svg viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6"><path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 
                            1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 
                            2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/></svg>
                        </a>

                        <a href="https://instagram.com/lulunovii" target="_blank" class="w-12 h-12 rounded-full bg-slate-50 border border-slate-200 flex items-center justify-center text-slate-600 
                        hover:bg-gradient-to-tr hover:from-yellow-400 hover:via-pink-500 hover:to-purple-600 hover:border-transparent hover:text-white transition-all duration-300 shadow-sm hover:shadow-md" title="Instagram">
                            <svg viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 
                            3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 
                            1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 
                            1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 
                            5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 
                            0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg>
                        </a>

                        <a href="https://wa.me/62895383081246" target="_blank" class="w-12 h-12 rounded-full bg-slate-50 border border-slate-200 flex items-center justify-center text-slate-600 
                        hover:bg-green-500 hover:border-green-500 hover:text-white transition-all duration-300 shadow-sm hover:shadow-md" title="WhatsApp">
                            <svg viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 
                            3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 
                            3.276 1.591 5.392 1.592 5.448 0 9.89-4.443 9.89-9.892 0-5.446-4.442-9.89-9.89-9.89-5.45 0-9.89 4.444-9.89 9.89 0 1.91.492 3.666 
                            1.42 5.249l-.916 3.344 3.404-.893zm11.282-7.391c-.281-.141-1.665-.823-1.923-.918-.258-.094-.446-.141-.634.141-.188.282-.729.918-.894 1.106-.165.188-.331.212-.612.071-.281-.141-1.189-.438-2.266-1.398-.838-.748-1.405-1.672-1.57-1.954-.165-.282-.018-.435.123-.576.126-.126.281-.329.423-.494.141-.165.188-.282.282-.471.094-.188.047-.353-.024-.494-.071-.141-.634-1.529-.869-2.094-.229-.553-.462-.478-.634-.487-.165-.008-.353-.008-.541-.008-.188 0-.494.071-.753.353-.258.282-.988.965-.988 
                            2.353s1.012 2.729 1.153 2.918c.141.188 1.988 3.035 4.812 4.259 2.824 1.224 2.824.824 3.388.776.565-.047 1.835-.753 2.094-1.482.259-.729.259-1.353.188-1.482-.071-.129-.259-.212-.541-.353z"/></svg>
                        </a>

                    </div>
                </div>

            </div>
        </div>
    </main>

</body>
</html>