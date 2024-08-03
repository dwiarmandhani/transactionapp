<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class BarangController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->input('search');

        $barang = Barang::query()
            ->when($search, function ($query, $search) {
                return $query->where('nama', 'like', "%{$search}%")
                    ->orWhere('kode', 'like', "%{$search}%");
            })
            ->paginate(10)
            ->appends(['search' => $search]);
        return view('barang.index', compact('barang', 'search'));
    }


    public function create()
    {
        return view('barang.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'kode' => ['required', 'string', 'max:10', 'unique:m_barang'],
            'nama' => ['required', 'string', 'max:100'],
            'harga' => ['required', 'numeric', 'min:0'],
        ]);

        Barang::create($validated);

        return redirect()->route('barang.index')->with('success', 'Barang berhasil ditambahkan.');
    }

    public function edit(Barang $barang)
    {
        return view('barang.edit', compact('barang'));
    }

    public function update(Request $request, Barang $barang)
    {
        $validated = $request->validate([
            'kode' => ['required', 'string', 'max:10', Rule::unique('m_barang')->ignore($barang->id)],
            'nama' => ['required', 'string', 'max:100'],
            'harga' => ['required', 'numeric', 'min:0'],
        ]);

        $barang->update($validated);

        return redirect()->route('barang.index')->with('success', 'Barang berhasil diupdate.');
    }

    public function destroy(Barang $barang)
    {
        $barang->delete();

        return redirect()->route('barang.index')->with('success', 'Barang berhasil dihapus.');
    }
}
