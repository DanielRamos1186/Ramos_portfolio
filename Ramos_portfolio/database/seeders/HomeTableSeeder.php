<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HomeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('profiles')->insert([
            [
                'full_name' => 'Daniel C. Ramos',
                'title' => 'Student',
                'bio' => 'A 3rd year computer science student currently majoring in game development',
                'email' => 's1717198@usls.edu.ph',
                'location' => 'Valladolid'
            ]
        ]);
    }
}
