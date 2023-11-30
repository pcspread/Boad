<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AccessTest extends TestCase
{
    use RefreshDatabase;

    /**
     * seeding実行
     */
    public function setup(): void
    {
        parent::setup();

        // seeding実行
        $this->artisan('db:seed');
    }

    /**
     * A basic feature test example.
     */
    public function test_example(): void
    {
        // view表示：top
        $response = $this->get('/');
        $response->assertStatus(200);

        // ログイン
        $user = User::find(1);
        $this->actingAs($user);
        $this->assertTrue(Auth::check());

        // view表示：図書一覧ページ
        $response = $this->get('/book');
        $response->assertStatus(200);

        // view表示：お気に入り一覧ページ
        $response = $this->get('/book/favorite');
        $response->assertStatus(200);

        // view表示：ランキングページ
        $response = $this->get('//book/rank');
        $response->assertStatus(200);

        // view表示：図書詳細ページ
        $response = $this->get('/book/detail/1');
        $response->assertStatus(200);

        // view表示：図書追加ページ
        $response = $this->get('/book/add')->assertOk();

        $response = $this->post('/book/add', [
            'title' => 'test',
            'author_id' => 1,
            'genre_id' => 1,
            'content' => 'test',
        ])->assertRedirect('/book');
        // $response->assertStatus(302);

        // view表示：図書編集ページ
        $response = $this->get('/book/edit/1');
        $response->assertStatus(200);

        // view表示：図書評価ページ
        $response = $this->get('/book/rate/1');
        $response->assertStatus(200);

        
        // 図書評価処理
        $response = $this->post('/book/rate/1', [
            'rate' => 5,
            'comment' => 'test',
        ])->assertRedirect('/book/detail/1');

        // 図書評価更新処理
        $response = $this->patch('/book/rate/1', [
            'rate' => 3,
            'comment' => 'test',
        ])->assertRedirect('/book/detail/1');

        // view表示：著者一覧ページ
        $response = $this->get('/author');
        $response->assertStatus(200);

        // view表示：著者編集ページ
        $response = $this->get('/author/1');
        $response->assertStatus(200);

        // 著者削除処理
        $response = $this->delete('/author/1');
        $response->assertStatus(302);

        // view表示：ジャンル一覧ページ
        $response = $this->get('/genre');
        $response->assertStatus(200);

        // view表示：ジャンル編集ページ
        $response = $this->get('/genre/1');
        $response->assertStatus(200);
    }
}