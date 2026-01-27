<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SkillsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('skills')->insert([
            ['name' => 'HTML', 'level' => 'Beginner'],
            ['name' => 'CSS', 'level' => 'Beginner'],
            ['name' => 'JavaScript', 'level' => 'Beginner'],
            ['name' => 'PHP', 'level' => 'Beginner'],
            ['name' => 'Laravel', 'level' => 'Beginner'],
        ]);
    }
}
