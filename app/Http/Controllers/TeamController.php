<?php

namespace App\Http\Controllers;

use App\Models\Team;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $teams = Team::orderBy('id', 'asc')->paginate(7);
        return view('admin.team.index', compact('teams'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("admin.team.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the inputs
        $request->validate([
            'names' => 'required',
            'post' => 'required',
            'picture' => 'required|image|mimes:jpeg,bmp,png', // Only allow .jpg, .bmp and .png file types.
            'task' => 'required',
        ]);

        // ensure the request has a file before we attempt anything else.
        if ($request->hasFile('picture')) {
            $picturePath = $request->file('picture')->store('teams', 'public');

            $team = new Team();
            $team->names = $request->names;
            $team->post = $request->post;
            $team->picture = $picturePath;
            $team->task = $request->task;
            $team->link_twitter = $request->link_twitter;
            $team->link_facebook = $request->link_facebook;
            $team->link_linkedin = $request->link_linkedin;
            $team->save();

            return redirect()->route('admin_team.index')
                ->with('success','Membre enregistré avec succès.');
        }else {
            return redirect()->route('admin_apropos.index')
                ->with('error',"Echec d'enregistrement.");
        }
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $team = Team::findOrFail($id);
        return view("admin.team.show", compact('team'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $team = Team::findOrFail($id);
        return view("admin.team.edit", compact('team'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // Validate the inputs
        $request->validate([
            'names' => 'required',
            'post' => 'required',
            'picture' => 'required|image|mimes:jpeg,bmp,png', // Only allow .jpg, .bmp and .png file types.
            'task' => 'required',
        ]);

        // ensure the request has a file before we attempt anything else.
        if ($request->hasFile('picture')) {

            $team = Team::findOrFail($id);

            $picturePath = $request->file('picture')->store('team', 'public');

            $team->names = $request->get('names');
            $team->post = $request->get('post');
            $team->picture = $picturePath;
            $team->task = $request->get('task');
            $team->link_twitter = $request->get('link_twitter');
            $team->link_facebook = $request->get('link_facebook');
            $team->link_linkedin = $request->get('link_linkedin');

            $team->update();

            return redirect()->route('admin_apropos.index')
                ->with('success','Profil membre mis à jour avec succès.');
        }else {
            return redirect()->route('admin_team.index')
                ->with('error',"Echec de mise à jour.");
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $team = Team::findOrFail($id);
        $team->delete();

        return redirect()->route('admin_team.index')
            ->with('success','Profil Membre supprimé avec succès.');
    }
}
