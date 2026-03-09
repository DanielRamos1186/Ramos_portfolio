<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ExperiencesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('experiences')->insert([
            ['role' => 'Lead Programmer and Project Manager', 'organization' => 'Halinaw', 'description' => 'Led programming and project management initiatives.', 'year' => 2024],
            ['role' => 'Lead Programmer', 'organization' => 'nagintralgkamiparasaplustwo', 'description' => 'Served as lead programmer on various projects.', 'year' => 2025],
            ['role' => 'Lead Programmer', 'organization' => 'Deep Sweep Co.', 'description' => 'Managed programming tasks and team coordination.', 'year' => 2025],
        ]);
    }
}
