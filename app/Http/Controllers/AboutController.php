<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Http\Controllers\Controller;
use App\Models\Team;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $abouts = About::orderBy('id', 'asc')->paginate(7);
        $teams = Team::orderBy('id', 'asc')->paginate(7);
        return view('admin.about.index', compact(['abouts', 'teams']));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("admin.about.create"); 
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the inputs
        $val = $request->validate([
            'main_goal' => 'required',
            // 'spec_goal' => 'required',
            // 'mission' => 'required',
            // 'vision' => 'required',
            // 'values' => 'required',
        ]);
       
        $about = new About();
        $about->main_goal = $request->main_goal;
        $about->spec_goal = $request->spec_goal;
        $about->mission = $request->mission;
        $about->vision = $request->vision;
        $about->values = $request->values;
        $about->save();

        return redirect()->route('admin_apropos.index')
            ->with('success',"Définition de l'identité avec succès.");
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $about = About::findOrFail($id);
        return view("admin.about.show", compact('about'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $about = About::findOrFail($id);
        return view("admin.about.edit", compact('about'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // Validate the inputs
        $val = $request->validate([
            'main_goal' => 'required',
            // 'spec_goal' => 'required',
            // 'mission' => 'required',
            // 'vision' => 'required',
            // 'values' => 'required',
        ]);

        $about = About::findOrFail($id);

        $about->main_goal = $request->get('main_goal');
        $about->spec_goal = $request->get('spec_goal');
        $about->mission = $request->get('mission');
        $about->vision = $request->get('vision');
        $about->values = $request->get('values');

        $about->update();

        return redirect()->route('admin_apropos.index')
            ->with('success','Identité mise à jour avec succès.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $about = About::findOrFail($id);
        $about->delete();

        return redirect()->route('admin_apropos.index')
            ->with('success','identité supprimée avec succès.');
    }
}
