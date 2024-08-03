<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\Barang;
use App\Models\Sales;

class DashboardController extends Controller
{
    public function show()
    {
        $totalCustomers = Customer::count();
        $totalBarang = Barang::count();
        $totalSales = Sales::count();

        return view('dashboard', [
            'totalCustomers' => $totalCustomers,
            'totalBarang' => $totalBarang,
            'totalSales' => $totalSales,
        ]);
    }
}
