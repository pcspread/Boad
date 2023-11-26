<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([        
            'name' => 'test1',
            'email' => 'test1@test.com',
            'password' => Hash::make('test1111'),
            'email_verified_at' => Carbon::now()->__toString(),
            'remember_token' => Hash::make(bin2hex(random_bytes(32))),
            'created_at' => Carbon::now()->__toString(),
            'updated_at' => Carbon::now()->__toString(),
        ]);
    }
}
