<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Role::create([
            'name' => 'Administrator'
        ]);

        Role::create([
            'name' => 'Default'
        ]);

        User::factory()->create([
            'fullname' => 'John Doe',
            'email' => 'john@dev.com',
            'role_id' => 1,
            'password' => bcrypt('john')
        ]);

        User::factory(5)->create([
            'role_id' => 2,
            'password' => null
        ]);
    }
}
