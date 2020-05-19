<?php

use Illuminate\Database\Seeder;

class ProductCategoryTablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            [
                "name"=> 'Men Clothings',
            ],
            [
                "name"=> 'Women Clothings',
            ],
            [
                "name"=> 'Accessories',
            ],

        ]);
    }
}
