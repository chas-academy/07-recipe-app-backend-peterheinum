<?php

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\facade\DB;

class RecipeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('recipes-table')->insert([
            'label' => "Test",
            'uri' => 'UriTest',
            'imgUrl' => 'imgUrlTEST'
        ]);
    }
}

