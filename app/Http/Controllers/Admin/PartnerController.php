<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Partner;
use Illuminate\Http\Request;

class PartnerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->has('search')) {
        // Melakukan pencarian berdasarkan nama partner
        $partners = Partner::where('name', 'LIKE', '%' . $request->search . '%')->get();
        } else {
            $partners = Partner::all();
        }

        return view('admin.partners.index', compact('partners'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.partners.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
               'name' => 'required|string|max:255',
               'logo_url' => 'required|string|max:255',
               'link' => 'nullable|url|max:255',
           ]);

           Partner::create([
               'name' => $request->name,
               'logo_url' => $request->logo_url,
               'link' => $request->link,
           ]);

           return redirect()->route('admin.partners.index')->with('success', 'Data partner berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $partner = Partner::findOrFail($id);
           return view('admin.partners.edit', compact('partner'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $partner = Partner::findOrFail($id);

           $request->validate([
               'name' => 'required|string|max:255',
               'logo_url' => 'required|string|max:255',
               'link' => 'nullable|url|max:255',
           ]);

           $partner->update([
               'name' => $request->name,
               'logo_url' => $request->logo_url,
               'link' => $request->link,
           ]);

           return redirect()->route('admin.partners.index')->with('success', 'Data partner berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $partner = Partner::findOrFail($id);
        $partner->delete();
        return redirect()->route('admin.partners.index')->with('success', 'Data partner berhasil dihapus secara permanen.');
    }
}
