@extends('layouts.admin')

@section('content')
<div class="mb-10">
    <div class="flex items-center gap-4 mb-2">
        <a href="{{ route('admin.categories.index') }}" class="w-10 h-10 bg-white border border-slate-200 rounded-full flex items-center justify-center text-slate-500 hover:bg-slate-50 transition shadow-sm">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-5 h-5">
                <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5L3 12m0 0l7.5-7.5M3 12h18" />
            </svg>
        </a>
        <h1 class="text-3xl font-bold text-slate-800 tracking-tight">Tambah Kategori Baru</h1>
    </div>
    <p class="text-slate-500 font-medium ml-14">Tambahkan data kategori event baru ke dalam sistem.</p>
</div>

<div class="bg-white rounded-2xl shadow-sm border border-slate-200 overflow-hidden max-w-2xl">
    <div class="p-8">
        <!-- Perhatikan action mengarah ke route store -->
        <form action="{{ route('admin.categories.store') }}" method="POST">
            @csrf
            
            <div class="mb-6">
                <label for="name" class="block text-sm font-bold text-slate-700 mb-2">Nama Kategori</label>
                <input type="text" name="name" id="name" class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition" placeholder="Contoh: Workshop, Seminar IT, Entertainment" required>
                <!-- Menampilkan pesan error validasi jika ada -->
                @error('name')
                    <p class="text-red-500 text-xs mt-2 font-medium">{{ $message }}</p>
                @enderror
            </div>

            <div class="flex justify-end gap-3 mt-8">
                <a href="{{ route('admin.categories.index') }}" class="px-6 py-3 rounded-xl font-bold text-slate-600 bg-slate-100 hover:bg-slate-200 transition">Batal</a>
                <button type="submit" class="px-6 py-3 rounded-xl font-bold text-white bg-indigo-600 hover:bg-indigo-700 transition shadow-sm">Simpan Kategori</button>
            </div>
        </form>
    </div>
</div>
@endsection