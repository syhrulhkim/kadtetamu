<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Check if admin user already exists
        $adminExists = User::where('email', 'admin@example.com')->first();

        if (!$adminExists) {
            User::create([
                'name' => 'Administrator',
                'email' => 'admin@example.com',
                'email_verified_at' => now(),
                'password' => Hash::make('password'),
            ]);

            $this->command->info('Admin user created successfully!');
            $this->command->line('Email: admin@example.com');
            $this->command->line('Password: password');
            $this->command->warn('Please change the admin password after first login!');
        } else {
            $this->command->info('Admin user already exists. Skipping...');
        }
    }
}
