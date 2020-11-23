<?php

namespace App\Http\Controllers;

use App\PetCategory;
use Illuminate\Http\Request;

class PetCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = PetCategory::all();

        return view('category/index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\PetCategory  $petCategory
     * @return \Illuminate\Http\Response
     */
    public function show(PetCategory $petCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\PetCategory  $petCategory
     * @return \Illuminate\Http\Response
     */
    public function edit(PetCategory $petCategory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\PetCategory  $petCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PetCategory $petCategory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\PetCategory  $petCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(PetCategory $petCategory)
    {
        //
    }
}
