<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PublicationCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            [
                'name' => 'Agro',
            ],
            [
                'name' => 'Trade',
            ]
        ];

        foreach ($categories as $category) {
            \App\Models\PublicationCategory::updateOrCreate([
                'name' => $category['name'],
            ], $category);
        }
    }
}
