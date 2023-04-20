<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $projects['projects'] = Project::orderBy('id', 'asc')->paginate(10);
        return view('admin.projects.index', $projects);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("admin.projects.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the inputs
        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'picture' => 'required|image|mimes:jpeg,bmp,png' // Only allow .jpg, .bmp and .png file types.
        ]);

        // ensure the request has a file before we attempt anything else.
        if ($request->hasFile('picture')) {

            $request->validate([
                'picture' => 'required|image|mimes:jpeg,bmp,png' // Only allow .jpg, .bmp and .png file types.
            ]);

            // Storage::disk('public')->put('projets', $request->file('picture'));

            $picturePath = $request->file('picture')->store('projects', 'public');

            $project = new Project;
            $project->title = $request->title;
            $project->picture = $picturePath;
            $project->content = $request->content;
            $project->save();

            return redirect()->route('admin_projets.index')
                ->with('success','Projet enregistré avec succès.');
        }else {
            return redirect()->route('admin_projets.index')
                ->with('error',"Echec d'enregistrement.");
        }
    }

    /**
     * Display the specified resource.
     */
    public function show($id):View
    {
        $project = Project::findOrFail($id);
        return view("admin.projects.show", compact('project'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $project = Project::findOrFail($id);
        return view("admin.projects.edit", compact('project'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // Validate the inputs
        $request->validate([
            'title' => 'required',
            'content' => 'required',
        ]);

        // ensure the request has a file before we attempt anything else.
        if ($request->hasFile('picture')) {

            $request->validate([
                'picture' => 'required|image|mimes:jpeg,bmp,png' // Only allow .jpg, .bmp and .png file types.
            ]);

            $project = Project::findOrFail($id);

            $picturePath = $request->file('picture')->store('projects', 'public');
            // dd($picturePath);
            $project->title = $request->get('title');
            $project->picture = $picturePath;
            // $project->picture = "projects/ItBJiYsKLHjCCanz7NEQvKKijDWEvkzIi5wsDIZe.jpg";
            $project->content = $request->get('content');
            $project->update();

            return redirect()->route('admin_projets.index')
                ->with('success','Projet mis à jour avec succès.');
        }else {
            return redirect()->route('admin_projets.index')
                ->with('error',"Echec de mise à jour.");
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $project = Project::findOrFail($id);
        $project->delete();

        return redirect()->route('admin_projets.index')
            ->with('success','Projet mis à jour avec succès.');
    }
}
