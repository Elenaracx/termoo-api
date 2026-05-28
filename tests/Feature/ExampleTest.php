// Executa esta linha
<?php

// Executa esta linha
namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
// Executa esta linha
use Tests\TestCase;

// Define uma classe
class ExampleTest extends TestCase
// Executa esta linha
{
    // Executa esta linha
    /**
     // Executa esta linha
     * A basic test example.
     // Executa esta linha
     */
    // Define uma função
    public function test_the_application_returns_a_successful_response(): void
    // Executa esta linha
    {
        // Define ou atualiza uma variável
        $response = $this->get('/');

        // Executa esta linha
        $response->assertStatus(200);
    // Executa esta linha
    }
// Executa esta linha
}