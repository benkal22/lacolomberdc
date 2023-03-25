<?php

namespace App\Http\Controllers;

use App\Models\Projet;
use Illuminate\Http\Request;

class ProjetController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // //On récupère tous les Projets
        $projets = Projet::latest()->get(); 

        return view('admin.projets.index', compact("projets"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.projets.create');
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
        ]);

        // ensure the request has a file before we attempt anything else.
        if ($request->hasFile('file')) {

            $request->validate([
                'image' => 'mimes:jpeg,bmp,png' // Only allow .jpg, .bmp and .png file types.
            ]);

            // Save the file locally in the storage/public/ folder under a new folder named /product
            $request->file->store('projet', 'public');

            // Store the record, using the new file hashname which will be it's new filename identity.
            $projet = new Projet([
                "title" => $request->get('title'),
                "picture" => $request->file->hashName(),
                "content" => $request->get('content')
            ]);
            $projet->save(); // Finally, save the record.
        }

        return view('admin.projets.create');
    }

    /**
     * Display the specified resource.
     */
    public function show(Projet $projet)
    {
        return view("admin.projets.show", compact("projet"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Projet $projet)
    {
        return view('admin.projets.edit', compact('projet'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Projet $projet)
    {
        $request->validate([
            'title' => 'required',
            'picture' => 'required',
            'content' => 'required',
        ]);
        
        $projet->fill($request->post())->save();

        return redirect()->route('admin_projets.index')->with('success','Projet modifié avec succès.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Projet $projet)
    {
        $projet->delete();
        return redirect()->route('admin_projets.index')->with('success','Projet supprimé avec succès.');
    }
}
