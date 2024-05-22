<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Mainmenu;

class MainMenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['menu_title' => 'OFFERING'],
            ['menu_title' => 'INDUSTRY'],
            ['menu_title' => 'EXPERT'],
            ['menu_title' => 'RESOURCE'],
            ['menu_title' => 'About Us'],
            ['menu_title' => 'EXPERT BASED CONSULTING'],
            ['menu_title' => 'PRODUCT'],
            ['menu_title' => 'PROFESSIONAL'],
            ['menu_title' => 'WHO ARE WE'],
            ['menu_title' => 'LEGAL'],
            // Add more arrays as needed
        ];
        foreach ($data as $record) {
            Mainmenu::create($record);
        }
    }
}
