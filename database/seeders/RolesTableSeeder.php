<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roles = [
            "Cameriere", "Chef", "Manager", "Barista", "Addetto alle pulizie",
            "Cassiere", "Cuoco", "Assistente Cuoco", "Responsabile di sala", "Pizzaiolo",
            "Lavapiatti", "Sommelier", "Addetto alla griglia", "Receptionist", "Magazziniere",
            "Addetto alle consegne", "Cuoco Pasticcere", "Responsabile Turni", "Addetto alle Ordinazioni", "Capo Sala", 'ADMIN'
        ];

        foreach ($roles as $role) {
            $newRole = new Role();
            $newRole->name = $role;
            $newRole->save();
        }
    }
}
