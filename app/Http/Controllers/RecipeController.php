<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Recipe;
use App\Http\Resources\RecipeResource;

class RecipeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api')->except(['get', 'store', 'getSavedRecipes', 'deleteRecipe', 'updateRecipe']);
    }

    public function index()
    {
        return 'hello';
        //RecipeResource::collection(Recipe::all());
    }

    public function get()
    {
        return 'hello';
    }

    public function deleteRecipe(Request $request)
    {
        Recipe::where('id', $request->id)->delete();
        return RecipeResource::collection(Recipe::all());
    }

    public function getSavedRecipes()
    {
        return RecipeResource::collection(Recipe::all());
    }

    public function updateRecipe(Request $request)
    {
        $recipe = Recipe::find($request->id);
        $recipe->label = $request->label;
        $recipe->save();
        return RecipeResource::collection(Recipe::all());
    }
    public function store(Request $request)
    {
        $recipe = Recipe::create(
               [
               'email' => $request->email,
               'label' => $request->label,
               'image' => $request->image,
               'calories' => $request->calories,
               'healthLabels' => $request->healthLabels,
               'ingredientLines' => $request->ingredientLines
               ]
           );
        return new RecipeResource($recipe);
    }

    public function show(Recipe $recipe)
    {
        return new RecipeResource($recipe);
    }


   
}
