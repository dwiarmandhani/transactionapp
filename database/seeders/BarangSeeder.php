<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class BarangSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        for ($i = 0; $i < 25; $i++) {
            DB::table('m_barang')->insert([
                'kode' => $faker->unique()->lexify('BRG???'),
                'nama' => $faker->word(),
                'harga' => $faker->randomFloat(2, 1000, 100000),
            ]);
        }
    }
}
