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
                "image"=> '/assets/img/Longyi3_1589550125.jpg',
                "description"=> 'Myin Phyu Longyi',
                "category_id"=> '1',
            ],

        ]);
    }
}
