<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RestaurantTypologyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $restaurantsTypologies = config('restaurant_typology');

        foreach($restaurantsTypologies as $restaurantTypology) {
            DB::table('restaurant_typology')->insert([
                'restaurant_id' => $restaurantTypology["restaurant_id"],
                'typology_id' => $restaurantTypology["typology_id"]
            ]);
        }
    }
}
