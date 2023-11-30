<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;

class DatabaseTest extends TestCase
{
    use RefreshDatabase;

    /**
     * A basic feature test example.
     */
    public function test_example(): void
    {
        User::factory()->create([
            'name' => 'test1',
            'email' => 'test1@test.com',
        ]);

        $this->assertDatabaseCount('users', 1);

        $this->assertDatabaseHas('users', [
            'name' => 'test1',
            'email' => 'test1@test.com',
        ]);
    }
}
