<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RecipeController extends Controller
{
   public function __construct()
   {
       $this->middleware('auth:api')->except(['index', 'show', 'get']);
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

   /*

       public function store(Request $request)
       {
           $recipe = Recipe::create(
               [
               'user_id' => $request->user()->id,
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

       public function update(Request $request, Recipe $recipe)
       {
           // check if currently authenticated user is the owner of the book
           if ($request->user()->id !== $recipe->user_id) {
               return response()->json(['error' => 'You can only edit your own books.'], 403);
           }

           $recipe->update($request->only(['label', 'ingredientLines']));

           return new RecipeResource($recipe);
       }

       public function destroy(Recipe $recipe)
       {
           $recipe->delete();

           return response()->json(null, 204);
       }
       */
}