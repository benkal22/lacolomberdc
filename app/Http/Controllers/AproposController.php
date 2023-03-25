<?php

namespace App\Http\Controllers;

use App\Models\Apropos;
use Illuminate\Http\Request;
use Illuminate\View\View;

class AproposController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        return view('apropos.index');
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Apropos $apropos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Apropos $apropos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Apropos $apropos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Apropos $apropos)
    {
        //
    }
}
