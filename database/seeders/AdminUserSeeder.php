<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    /**
     * Create the default YCX admin user.
     */
    public function run(): void
    {
        // Prevent duplicate seeding
        if (DB::table('users')->where('email', 'admin@ycx.com')->exists()) {
            $this->command->info('Admin user already exists — skipping.');
            return;
        }

        DB::table('users')->insert([
            'name'       => 'YCX Admin',
            'email'      => 'admin@ycx.com',
            'password'   => Hash::make('Ycx@2026!'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        $this->command->info('Admin user created: admin@ycx.com / Ycx@2026!');
    }
}
