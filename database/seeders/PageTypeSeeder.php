<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\PageType;

class PageTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        PageType::create([
            'type_name' => 'Newsletter',
        ]);

        PageType::create([
            'type_name' => 'Report',
        ]);
        PageType::create([
            'type_name' => 'Case Study',
        ]);
    }
}
