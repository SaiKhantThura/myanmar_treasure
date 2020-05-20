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
                "name"=> 'Things to do',
            ],
            [
                "name"=> 'Hotels',
            ],
            [
                "name"=> 'Burmese Traditional Curry',
            ],
            [
                "name"=> 'Noodles',
            ],
            [
                "name"=> 'Myanmar Snacks',
            ],
            [
                "name"=> 'Drinks',
            ],
            [
                "name"=> 'Desserts',
            ],
            
        ]);
    }
}
