<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class TypeExpenseTest extends TestCase
{
    /**
     * @test
     * 
     * Test typeExpense creation
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

    /**
     * @test
     * 
     * Test get all typeExpenses
     *
     * @return void
     */
    public function testGetAllTypeExpenses()
    {
        $response = $this->get('/typeExpenses');
        $response->assertStatus(200);
    }

    /**
     * @test
     * 
     * Test get typeExpense by id
     *
     * @return void
     */
    public function testFindTypeExpenseById()
    {
        $response = $this->json('GET', '/typeExpense', ['id' => 1]);
        $response->assertStatus(200);
    }

    /**
     * @test
     * 
     * Test update typeExpense by id
     *
     * @return void
     */
    public function testUpdateTypeExpense()
    {
        $datas = [
            'id'           => 1,
            'name'         => 'Gasolina',
            'description'  => 'Gasolina para o carro',
            'installments' => false
            
        ];
        $response = $this->putJson('/typeExpense', $datas);
        $response->assertStatus(200);
    }

    /**
     * @test
     * 
     * Test delete typeExpense by id
     *
     * @return void
     */
    public function testDeleteTypeExpense()
    {
        $response = $this->deleteJson('/typeExpense', ['id' => 1]);
        $response->assertStatus(204);
    }
}
