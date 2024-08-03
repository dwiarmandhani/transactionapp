<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CustomerSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $data = [];

        for ($i = 1; $i <= 26; $i++) {
            $data[] = [
                'kode' => 'CUST' . str_pad($i, 3, '0', STR_PAD_LEFT),
                'name' => 'Customer ' . $i,
                'telp' => '0812-3456-78' . str_pad($i, 2, '0', STR_PAD_LEFT),
                'created_at' => now(),
                'updated_at' => now(),
            ];
        }

        DB::table('m_customer')->insert($data);
    }
}
