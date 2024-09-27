<?php

namespace Tests\Feature\Http\Controllers;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class EmployeeControllerTest extends TestCase
{
    /**
     * Prueba que los usuarios invitados no puedan acceder a la lista de empleados.
     */
    public function test_guest_access_to_employees()
    {
        $this->get('/employees')
            ->assertStatus(302) // Código 302 indica redirección
            ->assertRedirect('/login'); // Verifica que redirige a /login
    }

    /**
     * Prueba que los usuarios invitados no puedan acceder a la página de creación de empleados.
     */
    public function test_guest_access_to_create_employee()
    {
        $this->get('/employees/create')
            ->assertStatus(302)
            ->assertRedirect('/login');
    }

    /**
     * Prueba que los usuarios invitados no puedan acceder a la vista de un empleado específico.
     */
    public function test_guest_access_to_show_employee()
    {
        $this->get('/employees/1') // Probar con un ID de empleado existente o ficticio (ID probado: 1)
            ->assertStatus(302)
            ->assertRedirect('/login');
    }
}
