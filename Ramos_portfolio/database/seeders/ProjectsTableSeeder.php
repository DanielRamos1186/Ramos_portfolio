<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('projects')->insert([
            ['title' => 'Halinaw', 'description' => 'A 2D rougelike game where in the player receives the blessings of the Visayan Gods to progress. ', 'tech_stack' => 'Unity, C#', 'year' => 2024],
            ['title' => 'When I grow up', 'description' => ' A 2D platformer game where in the Jorj must use his imagination to build platforms like magic', 'tech_stack' => 'Unity, C#', 'year' => 2025],
            ['title' => 'Continue?', 'description' => 'A 3D interactive story game where in a writer must pick between punctuation marks to determine the ending of their story.', 'tech_stack' => 'Unity, C#', 'year' => 2025],
            ['title' => 'Hadopelagic', 'description' => 'A 3D first-person horror game set in the abyssal ocean, where in the player must  clean trash while avoiding the danger below. ', 'tech_stack' => 'Unity, C#', 'year' => 2025],
        ]);
    }
}
