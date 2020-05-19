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
                "name"=> 'Longyi 1',
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
            [
                "name"=> 'Longyi 1',
                "price"=> '20000',
                "image"=> '/vegefoods/images/productss/Bagan-accessories/Women Clothing/Longyi1.jpg',
                "description"=> 'Myin Phyu Longyi',
                "category_id"=> '2',
            ],
            [
                "name"=> 'Longyi 2',
                "price"=> '15000',
                "image"=> '/vegefoods/images/productss/Bagan-accessories/Women Clothing/Longyi4.jpg',
                "description"=> 'Myin Phyu Longyi',
                "category_id"=> '2',
            ],
            [
                "name"=> 'Pathein Umbrella',
                "price"=> '2000',
                "image"=> '/vegefoods/images/productss/Bagan-accessories/Accessories/Pathein Umbrella.jpg',
                "description"=> 'Our products are using with the best quality materials. All of our umbrella designs are own creation pattern and color.',
                "category_id"=> '3',
            ],
            [
                "name"=> 'Yun del Bowl',
                "price"=> '5000',
                "image"=> '/vegefoods/images/productss/Bagan-accessories/Accessories/Acc1.jpg',
                "description"=> 'Our products are using with the best quality materials. All of our umbrella designs are own creation pattern and color.',
                "category_id"=> '3',
            ],
            [
                "name"=> 'Water Pot',
                "price"=> '7000',
                "image"=> '/vegefoods/images/productss/Bagan-accessories/Accessories/water pot.jpg',
                "description"=> 'Our products are using with the best quality materials. All of our umbrella designs are own creation pattern and color.',
                "category_id"=> '3',
            ],
            [
                "name"=> 'Betel Box',
                "price"=> '2500',
                "image"=> '/vegefoods/images/productss/Bagan-accessories/Accessories/Acc2.jpg',
                "description"=> 'Our products are using with the best quality materials. All of our umbrella designs are own creation pattern and color.',
                "category_id"=> '3',
            ],

        ]);
    }
}
