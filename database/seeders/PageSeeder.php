<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class PageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pages = ['Hakkimda', "Eğitim", "Hedef", "Teknolojiler", "Hedefler"];
        $count=0;
        foreach($pages as $page) {
            $count++;
            DB::table('pages')->insert([
                'title' => $page,
                'slug' => Str::slug($page, "-"),
                'image'=>'https://cdn.pixabay.com/photo/2016/11/18/22/31/animal-1837178_960_720.jpg',
                'content' => 'Lorem Ipsum dolot sit amet,',
                'order'=>$count,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
