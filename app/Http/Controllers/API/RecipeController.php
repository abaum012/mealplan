<?php

namespace App\Http\Controllers\API;

use App\Models\Recipe;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class RecipeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Recipe[]
     */
    public function index()
    {
        return Recipe::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $attributes = $request->request->all();
        $attributes['slug'] = Str::slug($attributes['title']);

        $recipe = Recipe::create($attributes);

        return response(['success' => true, 'message' => $recipe->title . ' created!']);
    }

    /**
     * Display the specified resource.
     *
     * @param   Recipe $recipe
     * @return  Recipe
     */
    public function show(Recipe $recipe)
    {
        return $recipe;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Recipe  $recipe
     * @return \Illuminate\Http\Response
     */
    public function destroy(Recipe $recipe)
    {
        $recipe->delete();
        return response(['success' => true, 'message' => $recipe->title . ' removed!']);
    }
}
