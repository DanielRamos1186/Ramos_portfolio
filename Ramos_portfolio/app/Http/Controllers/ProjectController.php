<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;

class SkillController extends Controller
{
    public function index() 
    {
        $projects = Skill::all();
        
        return view('pages.projects', compact('projects'));
    }
}
