<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class MembersSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('members')->insert([
            [
                'name' => 'John Doe',
                'email' => 'johndoe@example.com',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Jane Smith',
                'email' => 'janesmith@example.com',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Albert Einstein',
                'email' => 'albert.e@example.com',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
