<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Create user if none exists
        if (User::count() == 0) {
            $user = User::factory()->create([
                'name' => 'Admin',
                'email' => 'admin@admin.com',
            ]);
        } else {
            // Fetch the first user if already exists
            $user = User::first();
        }

        // Assign role to the user
        $user->assignRole('super_admin');
        
        // Call other seeders
        $this->call([
            FooterSeeder::class,
            PageConfigSeeder::class,
        ]);
    }
}