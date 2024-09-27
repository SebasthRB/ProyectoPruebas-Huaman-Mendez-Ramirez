<?php

namespace Tests\Feature\Http\Controllers;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class PurchaseControllerTest extends TestCase
{
    /**
     * Prueba que los usuarios invitados no puedan acceder a la lista de compras.
     */
    public function test_guest_access_to_purchases()
    {
        $this->get('/purchases')
            ->assertStatus(302) // Código 302 indica redirección
            ->assertRedirect('/login'); // Verifica que redirige a /login
    }

    /**
     * Prueba que los usuarios invitados no puedan acceder a la página de creación de compras.
     */
    public function test_guest_access_to_create_purchase()
    {
        $this->get('/purchases/create')
            ->assertStatus(302)
            ->assertRedirect('/login');
    }

    /**
     * Prueba que los usuarios invitados no puedan acceder a la vista de una compra específica.
     */
    public function test_guest_access_to_show_purchase()
    {
        $this->get('/purchases/1') // Probar con un ID de compra existente o ficticio (ID probado: 1)
            ->assertStatus(302)
            ->assertRedirect('/login');
    }
}
