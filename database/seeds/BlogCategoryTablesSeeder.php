<?php

use Illuminate\Database\Seeder;

class BlogCategoryTablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('blog_categories')->insert([
            [
                "name"=> 'Thinks to do',
            ],
            [
                "name"=> 'Hotels',
            ],
            [
                "name"=> 'Traditional Curry',
            ],
            [
                "name"=> 'Myanmar Snacks',
            ],
        ]);
    }
}
