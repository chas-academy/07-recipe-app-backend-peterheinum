<?php
Route::group([
    'middleware' => 'api',
], function () {

    Route::post('login', 'AuthController@login');
    Route::post('signup', 'AuthController@signup');
    Route::post('logout', 'AuthController@logout');
    Route::post('refresh', 'AuthController@refresh');
    Route::post('me', 'AuthController@me');
    Route::post('saverecipe', 'RecipeController@store');
    Route::post('deleterecipe', 'RecipeController@deleteRecipe');

    Route::get('getSavedRecipes', 'RecipeController@getSavedRecipes');
    
});