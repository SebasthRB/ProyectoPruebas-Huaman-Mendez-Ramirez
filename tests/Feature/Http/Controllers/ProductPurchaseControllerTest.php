<?php

namespace Tests\Feature\Http\Controllers;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ProductPurchaseControllerTest extends TestCase
{
    /**
     * Prueba que los usuarios invitados no puedan acceder a la lista de relaciones productos -> compras.
     */
    public function test_guest_access_to_productsPurchases()
    {
        $this->get('/productsPurchases')
            ->assertStatus(302) // Código 302 indica redirección
            ->assertRedirect('/login'); // Verifica que redirige a /login
    }

    /**
     * Prueba que los usuarios invitados no puedan acceder a la página de creación de relaciones productos -> compras.
     */
    public function test_guest_access_to_create_productPurchase()
    {
        $this->get('/productsPurchases/create')
            ->assertStatus(302)
            ->assertRedirect('/login');
    }

    /**
     * Prueba que los usuarios invitados no puedan acceder a la vista de una relación productos -> compras específico.
     */
    public function test_guest_access_to_show_productPurchase()
    {
        $this->get('/productsPurchases/1') // Probar con un ID de relación productos -> compras existente o ficticio (ID probado: 1)
            ->assertStatus(302)
            ->assertRedirect('/login');
    }
}
