<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class InputTest extends TestCase
{
    /**
     * @test
     * 
     * Test input creation
     *
     * @return void
     */
    public function testInputCreation()
    {
        $data = [
            'source'      => 'Lucas',
            'description' => 'pix do rolê',
            'value'       =>  15.60,
            'inputDate'   =>  '2021/12/12'
        ];
        $response = $this->postJson('/input', $data);
        $response->assertStatus(201);
    }

    /**
     * @test
     * 
     * Test get all inputs
     *
     * @return void
     */
    public function testGetAllInputs()
    {
        $response = $this->get('/inputs');
        $response->assertStatus(200);
    }

    /**
     * @test
     * 
     * Test get input by id
     *
     * @return void
     */
    public function testFindInputById()
    {
        $response = $this->json('GET', '/input', ['id' => 1]);
        $response->assertStatus(200);
    }

    /**
     * @test
     * 
     * Test update input by id
     *
     * @return void
     */
    public function testUpdateInput()
    {
        $datas = [
            'id'          => 1,
            'source'      => 'Lucas teste update',
            'description' => 'pix do rolê',
            'value'       =>  15.60,
            'inputDate'   =>  '2021/12/12'
        ];
        $response = $this->putJson('/input', $datas);
        $response->assertStatus(200);
    }

    /**
     * @test
     * 
     * Test update input by id
     *
     * @return void
     */
    public function testDeleteInput()
    {
        $response = $this->deleteJson('/input', ['id' => 1]);
        $response->assertStatus(200);
    }
}
