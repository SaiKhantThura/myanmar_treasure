<?php

use Illuminate\Database\Seeder;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('blogs')->insert([
            [
                "title"=> 'Architecture',
                "description"=> 'You can learn various Bagan era Architecture (AD-1044 ~ AD-1256) from various pagodas that were built throughout the entire Bagan region.',
                "image"=> '/vegefoods/images/productss/thingstodo/arch.jpg',
                "blog_category_id"=> '1',
            ],

        ]);
    }
}
