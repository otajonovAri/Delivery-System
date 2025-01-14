<?php

namespace Database\Seeders;

use App\Models\Dish;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DishesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $dishes = config('dishes');
        // dd($dishes);
        $dishes_restaura_1 = config('dishes_restaurant_1');
        $dishes_restaura_4 = config('dishes_restaurant_4');

        foreach($dishes as $dish) {
            $newDish = new Dish();
            $newDish->fill($dish);
            $newDish->save();
        }

        foreach($dishes_restaura_1 as $res1) {
            $newDish = new Dish();
            $newDish->fill($res1);
            $newDish->save();
        }

        foreach($dishes_restaura_4 as $res4) {
            $newDish = new Dish();
            $newDish->fill($res4);
            $newDish->save();
        }
    }
}
