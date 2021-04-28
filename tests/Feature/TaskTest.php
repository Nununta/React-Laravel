<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\Task;

use function PHPUnit\Framework\assertJson;

class TaskTest extends TestCase
{
    use RefreshDatabase;
    
    /**
     *
     * @test
     */
    // public function 取得一覧()
    // {
        // $response = $this->get('/');
        // $tasks = Task::factory()->count(10)->create();
        // dd($tasks->toArray());

        // $response->assertStatus(200);
        //$response->assertOk(); assertStatus(200)と同じ効果
        // $response = $this->getJson('api/tasks');
        // dd($response->json());

        // $response 
        // ->assertOk()
        // ->assertJsonCount($tasks->count());
        //引数のカウントと合致しているかテスト
    // }

    /**
     *
     * @test
     */
    // public function データ登録テスト() {
    //     $data = [
    //         'title' => 'テスト投稿'
    //     ];
        
    //     $response = $this->postJson('api/tasks',$data);
        // dd($response->json());
        
        // $response
        // ->assertStatus(201)
        // ->assertCreated();と記載してもok
        // ->assertJsonFragment($data);
        //レスポンスJSONに引数の値を含んでいるか
    // }

     /**
     *
     * @test
     */
    // public function データ更新テスト() {
    //     $task = Task::factory()->create();
    //     $task->title = "書き換え";
        // dd($task);

        // $response = $this->patchJson("api/tasks/{$task->id}",$task->toArray());
        // dd($response->json());

        // $response
        // ->assertOk()
        // ->assertJsonFragment($task->toArray());

    // }

     /**
     *
     * @test
     */
    // public function 削除することが出来る(){
    //    $tasks = Task::factory()->count(10)->create();
    //    $response = $this->deleteJson("api/tasks/1");
    //    $response->assertOk();
       
    //    $response = $this->getJson("api/tasks");
    //    $response->assertJsonCount($tasks->count() -1);
       //assertJsonCount削除後にデータが9になっているか確認。引数には期待する数を入力する。
    // }

    /**
     *
     * @test
     */
    // public function 空のデータ登録テスト() {
    //     $data = [
    //         'title' => ''
    //     ];
        
    //     $response = $this->postJson("api/tasks",$data);
    //     // dd($response->json());
        
    //     $response
    //     ->assertStatus(422)//バリデーションチェック
    //     ->assertJsonValidationErrors([
    //         'title' => 'タイトルは、必ず指定してください。' 
    //     ]);
    // }

    public function 最大文字数255テスト() {
        $data = [
            'title' => str_repeat('あ',256)
        ];
        
        $response = $this->postJson("api/tasks",$data);
        // dd($response->json());
        
        $response
        ->assertStatus(422)//バリデーションチェック
        ->assertJsonValidationErrors([
            'title' => 'タイトルは、255文字以下にしてください。' 
        ]);
    }
    
}
