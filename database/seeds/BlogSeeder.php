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
            [
                "title"=> 'Take A Hot Air Balloon Ride',
                "description"=> 'If you want to see Bagan in all its glory then you really need to take to the air. With that in mind, consider signing up for an elegant balloon ride where you will soar into the sky and glide gracefully over the complex which offers you a completely different vantage point where you can look down on the glorious temples here.',
                "image"=> '/vegefoods/images/productss/thingstodo/hot air.jpg',
                "blog_category_id"=> '1',
            ],
            [
                "title"=> 'Buy Some Local Artworks',
                "description"=> 'Bagan is known for its art work and its local handicrafts so it makes a great place if you want to stock up on local souvenirs.
                Bagan is primarily famous for its ornate lacquer ware but you will also find local textiles as well as other pieces like traditional jewelry.
                Some of the quirkier finds here also include sand paintings which can be quite intricate and are a nice nod to the dusty plains on which Bagan sits.
                ',
                "image"=> '/vegefoods/images/productss/thingstodo/artwrok.jpg',
                "blog_category_id"=> '1',
            ],
            [
                "title"=> 'Take A Boat Trip',
                "description"=> 'If you want to watch the sunset in style in Bagan then consider renting your own private boat and floating down the river.
                You can easily charter a small local boat which will seat around four people and then go for a cruise that takes between one and two hours.
                Just head down to the central jetty in Bagan where you will find a number of vendors who will take you upriver.
                ',
                "image"=> '/vegefoods/images/productss/thingstodo/boattrip.jpg',
                "blog_category_id"=> '1',
            ],
        ]);
    }
}
