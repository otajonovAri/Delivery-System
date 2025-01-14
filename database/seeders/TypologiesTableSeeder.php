<?php

namespace Database\Seeders;

use App\Models\Typology;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TypologiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $types = [
            "Hamburgeria", "Pizzeria al taglio", "Focacceria", "Paninoteca", "Kebab",
            "Friggitoria", "Chicken Wings", "Fish & Chips", "Tacos", "Burritos",
            "Hot Dog", "Pizza al metro", "Poke Bowl", "Sushi Takeaway", "Cafeteria",
            "Gelateria", "Donuteria", "Sandwich Bar", "Salad Bar", "Street Food"
        ];

        $icons = [
            'https://cdn-icons-png.flaticon.com/128/3075/3075977.png', 'https://cdn-icons-png.flaticon.com/128/1404/1404945.png', 'https://cdn-icons-png.flaticon.com/128/4780/4780609.png', 'https://cdn-icons-png.flaticon.com/128/1625/1625062.png', 'https://cdn-icons-png.flaticon.com/128/6978/6978201.png', 'https://cdn-icons-png.flaticon.com/128/11941/11941744.png', 'https://cdn-icons-png.flaticon.com/128/1365/1365581.png', 'https://cdn-icons-png.flaticon.com/128/2515/2515297.png', 'https://cdn-icons-png.flaticon.com/128/537/537386.png', 'https://cdn-icons-png.flaticon.com/128/6121/6121488.png', 'https://cdn-icons-png.flaticon.com/128/2674/2674083.png', 'https://cdn-icons-png.flaticon.com/128/6978/6978255.png', 'https://cdn-icons-png.flaticon.com/128/4525/4525498.png', 'https://cdn-icons-png.flaticon.com/128/2252/2252075.png', 'https://cdn-icons-png.flaticon.com/128/4418/4418251.png', 'https://cdn-icons-png.flaticon.com/128/938/938063.png', 'https://cdn-icons-png.flaticon.com/128/926/926285.png', 'https://cdn-icons-png.flaticon.com/128/1033/1033228.png', 'https://cdn-icons-png.flaticon.com/128/8204/8204862.png', 'https://cdn-icons-png.flaticon.com/128/3259/3259025.png'
        ];

        for ($i = 0; $i < 20; $i++) {
            $type = $types[$i];
            $icon = $icons[$i];
            $newType = new Typology();
            $newType->name = $type;
            $newType->icon = $icon;
            $newType->save();
        }
    }
}
