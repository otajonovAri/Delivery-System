<?php

namespace Database\Seeders;

use App\Models\Employee;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EmployeesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $employees = config('employees');

        foreach($employees as $employee) {
            $newEmployee = new Employee();
            $newEmployee->fill($employee);
            $newEmployee->save();
        }
    }
}
