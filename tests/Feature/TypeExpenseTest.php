<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class TypeExpenseTest extends TestCase
{
    /**
     * @test
     * 
     * Test product creation
     *
     * @return void
     */
    public function testTypeExpenseCreation()
    {
        $data = [
            'name'         => 'Gasolina',
            'description'  => 'Gasolina para o carro',
            'installments' => 0 
        ];
        $response = $this->postJson('/typeExpense', $data);
        $response->assertStatus(201);
    }
}
