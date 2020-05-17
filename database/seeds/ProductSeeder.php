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
            [
                "name"=> 'Mote late pyar',
                "price"=> '200',
                "image"=> '/vegefoods/images/productss/Myamar-food/Snacks/mote late pyar/snack1.jpg',
                "description"=> 'Myanmar Traditional Thanatkhar from local Thanatkhar Tree. It is good for skin.',
                "category_id"=> '3',
            ],
            [
                "name"=> 'La Phat Toke',
                "price"=> '500',
                "image"=> '/vegefoods/images/productss/Myamar-food/Snacks/la-phat-toke/the-infamous-tea-leaf.jpg',
                "description"=> 'Traditional Myanmar Salad make with tea leaf and fried beans',
                "category_id"=> '3',
            ],
            [
                "name"=> 'Khaung Yay',
                "price"=> '500',
                "image"=> '/vegefoods/images/productss/Myamar-food/Drinks/khaung yay/khaung yay.jpg',
                "description"=> 'Traditional Myanmar Salad make with tea leaf and fried beans',
                "category_id"=> '4',
            ],

        ]);
    }
}
