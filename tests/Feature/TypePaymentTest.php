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
}
