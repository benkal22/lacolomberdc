<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\News;
use App\Models\Project;
use App\Models\Team;
use Illuminate\Http\Request;

class HomeController extends Controller
{
   
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $abouts = About::all()->first();
        $teams = Team::all();
        $projects = Project::all();
        $news = News::all();
        return view('home', compact(['abouts', 'teams', 'projects', 'news']));
    }
   
}
