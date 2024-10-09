<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Employee;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Crear employees de prueba
        $user1 = User::where('email', 's@gmail.com')->first();
        $employee1 = new Employee();
        $employee1->first_name = 'Sebasthian';
        $employee1->last_name = 'Ramirez';
        $employee1->hire_date = now();
        $employee1->user_id = $user1->id;  // Asignar el ID de usuario
        $employee1->email = $user1->email; // Asignar el mismo email que el usuario
        $employee1->save();

        $user2 = User::where('email', 'e@gmail.com')->first();
        $employee2 = new Employee();
        $employee2->first_name = 'Estefani';
        $employee2->last_name = 'Huaman';
        $employee2->hire_date = now();
        $employee2->user_id = $user2->id;
        $employee2->email = $user2->email;
        $employee2->save();

        $user3 = User::where('email', 'a@gmail.com')->first();
        $employee3 = new Employee();
        $employee3->first_name = 'Aaron';
        $employee3->last_name = 'Mendez';
        $employee3->hire_date = now();
        $employee3->user_id = $user3->id;
        $employee3->email = $user3->email;
        $employee3->save();
    }
}
