<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
         \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
             'user_id' => '328773',
             'lastname' => 'Mustermann',
             'firstname' => 'Max',
             'department' => 'IT',
             'company' => 'Musterfirma',
             'email' => 'max.mustermann@example.com',
             'email_verified_at' => now(),
             'password' =>  bcrypt('passwort'),
             'user_hash' => 'abcd1234',
             'remember_token' => Str::random(10),
             'created_at' => now(),
             'updated_at' => now(),
         ]);
    }
}
