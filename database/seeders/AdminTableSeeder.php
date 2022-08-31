<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Seeder;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Admin::truncate();

        Admin::create([

            'name' => 'Startup Biz',
            'email' => 'admin@startupbiz.com',
            'role' => '1',
            'password' => bcrypt('password')
        ]);
    }
}
