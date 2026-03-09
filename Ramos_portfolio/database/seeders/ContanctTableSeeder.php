<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContanctTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('contacts')->insert([
            [
                'email' => 's1717198@usls.edu.ph',
                'linkedin' => 'https://www.linkedin.com/in/daniel-ramos-3b909a29b',
                'github' => 'https://github.com/DanielRamos1186',
            ],
        ]);
    }
}
