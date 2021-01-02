<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admin')->insert([
           'name'=>'Umut Çaylı',
            'email'=>'umutcaayli@gmail.com',
            'password'=>bcrypt(123321),
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);
    }
}
