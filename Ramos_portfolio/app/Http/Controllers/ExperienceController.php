<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Experience;

class SkillController extends Controller
{
    public function index() 
    {
        $experiences = Skill::all();
        
        return view('pages.experiences', compact('experiences'));
    }
}
