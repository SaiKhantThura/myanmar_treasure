<?php

use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
                "name"=> 'Longyi',
                "price"=> '20000',
                "image"=> '/vegefoods/images/productss/Bagan-accessories/Men-Clothing/Longyi1.jpg',
                "description"=> 'Myin Phyu Longyi',
                "category_id"=> '1',
            ],
            [
                "name"=> 'Longyi 2',
                "price"=> '15000',
                "image"=> '/vegefoods/images/productss/Bagan-accessories/Men-Clothing/Longyi2.jpg',
                "description"=> 'Myin Phyu Longyi',
                "category_id"=> '1',
            ],

        ]);
    }
}
