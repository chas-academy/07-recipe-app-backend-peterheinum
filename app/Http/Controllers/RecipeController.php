<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Recipe;
use App\Http\Resources\RecipeResource;

class RecipeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api')->except(['get', 'store', 'getSavedRecipes']);
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

    public function getSavedRecipes($urlParams)
    {
        $email = $urlParams['email'];
        $collection = RecipeResource::collection(Recipe::all());
        foreach ($collection as $key => $value) {
            if($key == $email){
                
            }
        }
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
