@extends('layouts.admin')

@section('content')
<!-- Header & Profil -->
<div class="flex justify-between items-center mb-10">
    <div>
        <h1 class="text-3xl font-bold text-slate-800 tracking-tight">Kelola Kategori</h1>
        <p class="text-slate-500 mt-1 font-medium">Buat dan atur kategori Anda di sini.</p>
    </div>
    
    <div class="flex items-center gap-4">
        <div class="text-right">
            <h6 class="text-sm font-bold text-slate-800">Admin Amikom</h6>
            <p class="text-xs text-slate-500 font-medium">Penyelenggara Utama</p>
        </div>
        <!-- Lingkaran Profil AA -->
        <div class="w-12 h-12 bg-indigo-50 text-indigo-600 border-2 border-indigo-200 rounded-full flex items-center justify-center font-bold text-lg">
            AA
        </div>
    </div>
</div>

<!-- Alert Success Notifikasi -->
@if(session('success'))
    <div class="bg-emerald-50 text-emerald-600 px-6 py-4 rounded-xl mb-6 font-semibold text-sm border border-emerald-100 shadow-sm">
        {{ session('success') }}
    </div>
@endif

<!-- Baris Form Pencarian & Tombol Tambah -->
<div class="flex justify-between items-center mb-6 gap-4">
    <!-- Form Search -->
    <form action="{{ route('admin.categories.index') }}" method="GET" class="flex items-center gap-2 w-full max-w-md">
        <input type="text" name="search" value="{{ request('search') }}" placeholder="Cari nama kategori..." class="w-full px-4 py-2.5 rounded-xl border border-slate-200 focus:outline-none focus:ring-2 focus:ring-indigo-500 text-sm">
        <button type="submit" class="bg-slate-100 hover:bg-slate-200 text-slate-600 px-4 py-2.5 rounded-xl font-bold text-sm transition">Cari</button>
        
        <!-- Tombol Reset akan muncul jika sedang melakukan pencarian -->
        @if(request('search'))
            <a href="{{ route('admin.categories.index') }}" class="bg-red-50 hover:bg-red-100 text-red-500 px-4 py-2.5 rounded-xl font-bold text-sm transition">Reset</a>
        @endif
    </form>

    <!-- Tombol Tambah Kategori -->
    <a href="{{ route('admin.categories.create') }}" class="bg-indigo-500 hover:bg-indigo-600 text-white px-6 py-3 rounded-full font-bold text-sm transition shadow-sm whitespace-nowrap">
        + Tambah Kategori Baru
    </a>
</div>

<!-- Tabel Data -->
<div class="bg-white rounded-2xl shadow-sm border border-slate-200 overflow-hidden">
    <table class="w-full text-left border-collapse">
        <thead>
            <tr class="border-b border-slate-100">
                <th class="py-4 px-6 text-xs font-bold text-slate-400 uppercase tracking-wider">NO</th>
                <th class="py-4 px-6 text-xs font-bold text-slate-400 uppercase tracking-wider">TITLE</th>
                <th class="py-4 px-6 text-xs font-bold text-slate-400 uppercase tracking-wider">SLUG</th>
                <th class="py-4 px-6 text-xs font-bold text-slate-400 uppercase tracking-wider text-center">AKSI</th>
            </tr>
        </thead>
        <tbody class="divide-y divide-slate-100">
            @forelse($categories as $index => $category)
            <tr class="hover:bg-slate-50 transition">
                <td class="py-4 px-6 text-slate-500 font-medium">{{ $index + 1 }}</td>
                <td class="py-4 px-6 text-slate-800 font-bold">{{ $category->name }}</td>
                <td class="py-4 px-6 text-slate-500 font-medium">{{ $category->slug }}</td>
                <td class="py-4 px-6 flex justify-center gap-2">
                    
                    <!-- Tombol Edit -->
                    <a href="{{ route('admin.categories.edit', $category->id) }}" class="w-8 h-8 rounded-lg bg-indigo-50 text-indigo-500 flex items-center justify-center hover:bg-indigo-100 transition">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-4 h-4">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L6.832 19.82a4.5 4.5 0 01-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 011.13-1.897L16.863 4.487zm0 0L19.5 7.125" />
                        </svg>
                    </a>
                    
                    <!-- Tombol Delete -->
                    <form action="{{ route('admin.categories.destroy', $category->id) }}" method="POST" class="inline" onsubmit="return confirm('Apakah Anda yakin ingin menghapus kategori ini?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="w-8 h-8 rounded-lg bg-red-50 text-red-500 flex items-center justify-center hover:bg-red-100 transition">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-4 h-4">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                            </svg>
                        </button>
                    </form>

                </td>
            </tr>
            @empty
            <tr>
                <td colspan="4" class="text-center py-8 text-slate-500 font-medium">Belum ada data kategori.</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection