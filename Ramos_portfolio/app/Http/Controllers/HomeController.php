<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Home;

class SkillController extends Controller
{
    public function index() 
    {
        $home = Skill::all();
        
        return view('pages.home', compact('home'));
    }
}
