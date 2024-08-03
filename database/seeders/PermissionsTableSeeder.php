<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Permission;

class PermissionsTableSeeder extends Seeder
{
    public function run()
    {
        Permission::create(['name' => 'view']);
        Permission::create(['name' => 'edit']);
    }
}
