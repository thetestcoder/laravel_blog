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
        $pages = ['Hakkimda'];
        $count=0;
        foreach($pages as $page) {
            $count++;
            DB::table('pages')->insert([
                'title' => $page,
                'slug' => Str::slug($page, "-"),
                'image'=>'https://mcdn.wallpapersafari.com/medium/22/65/lgp7aU.jpg',
                'image2'=>'https://cdn.wallpapersafari.com/65/17/TFG1Wx.jpg',
                'bg'=>'https://c.wallhere.com/photos/11/98/2000x1333_px_Processed_With_VSCO_With_A9_Preset-1334203.jpg!d',
                'hakkimda' => 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.',
                'hedef1'=>'The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested.',
                'uzmanlik'=>'Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum"',
                'egitim'=>'23 nisan iöo',
                'egitimContent'=>'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which dont look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isnt anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.',
                'order'=>$count,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
