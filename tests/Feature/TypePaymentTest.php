<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class TypePaymentTest extends TestCase
{
    /**
     * @test
     * 
     * Test type payment creation
     *
     * @return void
     */
    public function testTypePaymentCreation()
    {
        $data = [
            'name'         => 'Dinheiro',
            'description'  => 'Pagamento à vista no dinheiro'
        ];
        $response = $this->postJson('/typePayment', $data);
        $response->assertStatus(201);
    }

    /**
     * @test
     * 
     * Test get all typePayment
     *
     * @return void
     */
    public function testGetAllTypePayment()
    {
        $response = $this->get('/typePayments');
        $response->assertStatus(200);
    }

    /**
     * @test
     * 
     * Test get typePayment by id
     *
     * @return void
     */
    public function testFindTypePaymentById()
    {
        $response = $this->json('GET', '/typePayment', ['id' => 1]);
        $response->assertStatus(200);
    }

    /**
     * @test
     * 
     * Test update typePayment by id
     *
     * @return void
     */
    public function testUpdateTypePayment()
    {
        $datas = [
            'id'           => 1,
            'name'         => 'Gasolina',
            'description'  => 'Gasolina para o carro',
        ];
        $response = $this->putJson('/typePayment', $datas);
        $response->assertStatus(200);
    }

    /**
     * @test
     * 
     * Test delete typePayment by id
     *
     * @return void
     */
    public function testDeleteTypePayment()
    {
        $response = $this->deleteJson('/typePayment', ['id' => 1]);
        $response->assertStatus(204);
    }
}
