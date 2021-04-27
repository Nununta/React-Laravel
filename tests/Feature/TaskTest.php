<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\Task;

class TaskTest extends TestCase
{
    use RefreshDatabase;
    
    /**
     *
     * @test
     */
    public function 取得一覧()
    {
        $response = $this->get('/');
        $tasks = Task::factory()->count(10)->create();
        // dd($tasks->toArray());

        // $response->assertStatus(200);
        //$response->assertOk(); assertStatus(200)と同じ効果
        $response = $this->getJson('api/tasks');
        // dd($response->json());

        $response 
        ->assertOk()
        ->assertJsonCount($tasks->count());
        //引数のカウントと合致しているかテスト
    }
}
