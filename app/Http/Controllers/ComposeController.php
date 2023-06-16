<?php

namespace App\Http\Controllers;

use App\Models\compose;
use Illuminate\Http\Request;

class ComposeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('layouts.compose');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
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
    public function show(compose $compose)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(compose $compose)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, compose $compose)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(compose $compose)
    {
        //
    }
}
