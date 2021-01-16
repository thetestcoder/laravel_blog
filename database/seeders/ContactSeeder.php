<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contacts')->insert([
            'name' => 'What is Lorem Ipsum?',
            'email' => 'umutcaayli@gmail.com',
            'message' => 'LOrem',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
