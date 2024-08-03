<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class CustomerController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->input('search');

        $customer = Customer::query()
            ->when($search, function ($query, $search) {
                return $query->where('name', 'like', "%{$search}%")
                    ->orWhere('kode', 'like', "%{$search}%");
            })
            ->paginate(10)
            ->appends(['search' => $search]);

        return view('customer.index', compact('customer', 'search'));
    }

    public function create()
    {
        return view('customer.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'kode' => ['required', 'string', 'max:10', 'unique:m_customer'],
            'name' => ['required', 'string', 'max:100'],
            'telp' => ['required', 'string', 'max:20'],
        ]);

        Customer::create($validated);

        return redirect()->route('customer.index')->with('success', 'Customer berhasil ditambahkan.');
    }

    public function edit(Customer $customer)
    {
        return view('customer.edit', compact('customer'));
    }

    public function update(Request $request, Customer $customer)
    {
        $validated = $request->validate([
            'kode' => ['required', 'string', 'max:10', Rule::unique('m_customer')->ignore($customer->id)],
            'name' => ['required', 'string', 'max:100'],
            'telp' => ['required', 'string', 'max:20'],
        ]);

        $customer->update($validated);

        return redirect()->route('customer.index')->with('success', 'Customer berhasil diupdate.');
    }

    public function destroy(Customer $customer)
    {
        $customer->delete();

        return redirect()->route('customer.index')->with('success', 'Customer berhasil dihapus.');
    }
}
