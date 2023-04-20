<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index():View
    {
        $news = News::orderBy('created_at', 'desc')->paginate(7);
        return view('admin.news.index', compact('news'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("admin.news.create"); 
    }

    /**
     * Store a nxewly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the inputs
        $request->validate([
            'title' => 'required',
            'domain' => 'required',
            'content' => 'required',
            'picture' => 'required|image|mimes:jpeg,bmp,png' // Only allow .jpg, .bmp and .png file types.
        ]);

        // ensure the request has a file before we attempt anything else.
        if ($request->hasFile('picture')) {

            // $request->validate([
            //     'picture' => 'required|image|mimes:jpeg,bmp,png' // Only allow .jpg, .bmp and .png file types.
            // ]);

            $picturePath = $request->file('picture')->store('news', 'public');

            $new = new News();
            $new->title = $request->title;
            $new->domain = $request->domain;
            $new->picture = $picturePath;
            $new->content = $request->content;
            $new->save();

            return redirect()->route('admin_actualites.index')
                ->with('success','actualite enregistré avec succès.');
                
        }else {
            return redirect()->route('admin_actualites.index')
                ->with('error',"Echec d'enregistrement.");
        }
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $new = News::findOrFail($id);
        return view("admin.news.show", compact('new'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $new = News::findOrFail($id);
        return view("admin.news.edit", compact('new'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
         // Validate the inputs
         $request->validate([
            'title' => 'required',
            'domain' => 'required',
            'content' => 'required',
        ]);

        // ensure the request has a file before we attempt anything else.
        if ($request->hasFile('picture')) {

            $request->validate([
                'picture' => 'required|image|mimes:jpeg,bmp,png' // Only allow .jpg, .bmp and .png file types.
            ]);
            
            $new = News::findOrFail($id);

            $picturePath = $request->file('picture')->store('news', 'public');
            
            $new->title = $request->get('title');
            $new->picture = $picturePath;

            $new->content = $request->get('content');
            $new->update();

            return redirect()->route('admin_actualites.index')
                ->with('success','actualite mis à jour avec succès.');
        }else {
            return redirect()->route('admin_actualites.index')
                ->with('error',"Echec de mise à jour.");
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $new = News::findOrFail($id);
        $new->delete();

        return redirect()->route('admin_actualites.index')
            ->with('success','actualite supprimé avec succès.');
    }
}
