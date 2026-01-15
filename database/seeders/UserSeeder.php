<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'name' => 'Admin User',
                // 'email' => 'ai.lab@samdu.uz',
                // 'password' => Hash::make('12345678'),
                'email' => 'iqbolshoh@templates.uz',
                'password' => Hash::make('$qb01S7#o&05'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}
