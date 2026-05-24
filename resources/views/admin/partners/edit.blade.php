@extends('layouts.admin')

@section('content')
<div class="mb-10">
    <h1 class="text-3xl font-bold text-slate-800 tracking-tight">Edit Partner</h1>
</div>

<div class="bg-white rounded-2xl shadow-sm border border-slate-200 overflow-hidden max-w-2xl">
    <div class="p-8">
        <form action="{{ route('admin.partners.update', $partner->id) }}" method="POST">
            @csrf
            @method('PUT')
            
            <div class="mb-6">
                <label for="name" class="block text-sm font-bold text-slate-700 mb-2">Nama Partner</label>
                <input type="text" name="name" id="name" value="{{ old('name', $partner->name) }}" class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:outline-none focus:ring-2 focus:ring-indigo-500" required>
            </div>

            <div class="mb-6">
                <label for="logo_url" class="block text-sm font-bold text-slate-700 mb-2">URL Logo Partner</label>
                <input type="text" name="logo_url" id="logo_url" value="{{ old('logo_url', $partner->logo_url) }}" class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:outline-none focus:ring-2 focus:ring-indigo-500" required>
            </div>

            <div class="mb-6">
                <label for="link" class="block text-sm font-bold text-slate-700 mb-2">Link Sponsorship (IG / Web)</label>
                <input type="url" name="link" id="link" value="{{ old('link', $partner->link) }}" class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:outline-none focus:ring-2 focus:ring-indigo-500">
            </div>

            <div class="flex justify-end gap-3 mt-8">
                <a href="{{ route('admin.partners.index') }}" class="px-6 py-3 rounded-xl font-bold text-slate-600 bg-slate-100 hover:bg-slate-200">Batal</a>
                <button type="submit" class="px-6 py-3 rounded-xl font-bold text-white bg-indigo-600 hover:bg-indigo-700">Update Partner</button>
            </div>
        </form>
    </div>
</div>
@endsection