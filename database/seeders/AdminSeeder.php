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
            'name'=>'Umut',
            'surname'=>'Çaylı',
            'username'=>'umutlion',
            'email'=>'umutcaayli@gmail.com',
            'password'=>bcrypt(123321),
            'twitter'=>'https://twitter.com/kafadanpilot',
            'github'=>'https://github.com/umutlion',
            'job'=>'Backend Developer',
            'ulke'=>'Turkiye',
            'sehir'=>'Istanbul',
            'hobileriniz'=>'Futbol maçı izlemek, kod yazmak bir hobi değildir ve bir sürü daha şey var.',
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);
    }
}
