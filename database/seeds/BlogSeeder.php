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
                "title"=> 'Check Out Shwesandaw Paya',
                "description"=> 'If you want to catch the best sunsets in Bagan then you need to head to Shwesandaw Paya which features a gorgeous pagoda built in the pyramid style out of white stone.
                There are steps cut into the temple which then lead up to five terraces which end at the top of a large stupa and from here you can experience panoramic views all over Bagan.
                Bear in mind that it gets crowded at sunset as it is known for its vistas, although the upper tier is quite spacious.
                If you want to check it out without the crowds however then just visit in the daytime when it experiences much less foot traffic.
                ',
                "image"=> '/vegefoods/images/productss/thingstodo/checkout.jpg',
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
            [
                "title"=> 'Tour The Archaeological Museum',
                "description"=> 'The Archaeological Museum is part of a large complex and is the best museum to visit in Bagan if you want to get a quick look at some of the background of this amazing sight in one go.
                You will also find a huge number of pieces taken from around Bagan such as Buddha images and stone with ornate inscriptions and you will also even find some modern paintings of the various temples.
                As well as antiques and art work, you will also be able to check out a range of textiles and even a gallery that features different ancient hair styles.
                ',
                "image"=> '/vegefoods/images/productss/thingstodo/arch.jpg',
                "blog_category_id"=> '1',
            ],
            [
                "title"=> 'Temporary Tattoo Painting',
                "description"=> 'Temporary tattoo shops near famous pagodas in the Bagan-NyaungU region have reported good earning during the holiday and pilgrimage seasons. Temporary tattoo artists said they have earned around K100,000 per day in season.
                Local pilgrims and tourists are interested in temporary tattoos which they find quite attractive, said tattoo artists. 
                The artists said they are inking floral motifs from the Bagan period, depicted on the walls of pagodas, on people’s arms, palms, fingers, and necks, and earning a good income. Skin tattoos last at least two to four days unless washed, according to local artists.
                ',
                "image"=> '/vegefoods/images/productss/thingstodo/tattoo.jpg',
                "blog_category_id"=> '1',
            ],
            

            [
                "title"=> 'Aureum Palace Hotel& Resort Bagan
                ',
                "description"=> 'Next to Bagan Nyaung Oo Golf Club, this upscale hotel with traditional Myanmar styling is 11 km from the 12th-century Ananda Temple, and 12 km from the Bu Paya riverside shrine. Nyaung-U Airport is 3 km away.
                Polished rooms with teak furnishings feature free Wi-Fi, flat-screen TVs and minibars, as well as tea and coffeemaking facilities. Villas add sitting areas and terraces; some have separate living rooms and kitchenettes. Upgraded villas include butler service and private pools.
                Amenities include 2 restaurants and 3 bars, plus an outdoor pool, a gym and a spa. Horse-drawn carriage rides, and airport transfers are available for a fee.
                ',
                "image"=> '/vegefoods/images/productss/Hotels/Aureum Palace Hotel& Resort Bagan.jpg',
                "blog_category_id"=> '2',
            ],
            [
                "title"=> 'Bagan Hotel River View',
                "description"=> "Set in a redbrick building with arched windows, this straightforward hotel lies 2 km from the 11th-century Manuha Temple and 3 km from the 12th-century Dhammayazika Pagoda. It's 10 km from Nyaung U Airport.
                Low-key rooms with hardwood floors offer free Wi-Fi, flat-screen TVs and desks, as well as minifridges, tea and coffeemakers, and dining areas. Kids age 6 and under stay at no extra charge when using existing bedding.
                Parking and breakfast are complimentary. Other amenities include a restaurant, a roof terrace with scenic views, and an interior courtyard. Bike rentals are available.
                ",
                "image"=> '/vegefoods/images/productss/Hotels/Bagan Hotel River View.jpg',
                "blog_category_id"=> '2',
            ],
            [
                "title"=> 'Bagan Hotel River View',
                "description"=> "Set on the banks of the Ayeyarwady River and surrounded by gardens, this laid-back hotel is a minute's walk from Bagan Archaeological Museum.
                Casual rooms with vintage-style furnishings feature balconies, plus TVs, minifridges, and tea and coffeemaking equipment. Suites are housed in private bungalows and add separate living/dining rooms. Some quarters provide river views. Room service is available.
                There's a restaurant with a wood-paneled dining room, as well as open-air seating. Other amenities include a poolside bar, a spa, an outdoor pool, a hot tub and gardens. Bike and boat rentals are available.
                ",
                "image"=> '/vegefoods/images/productss/Hotels/Bagan Thende Hotel(old bagan).jpg',
                "blog_category_id"=> '2',
            ],
            [
                "title"=> 'Bagan Wynn Hotel',
                "description"=> "Situated in Bagan, 2.2 km from Izza Gawna Pagoda, Bagan Wynn Hotel features accommodation with a restaurant, free private parking, an outdoor swimming pool and a fitness center. With a bar, the 3-star hotel has air-conditioned rooms with free Wi-Fi, each with a private bathroom. The accommodation offers a 24-hour front desk, room service and currency exchange for guests.

                At the hotel, rooms are fitted with a desk and a flat-screen TV. At Bagan Wynn Hotel every room comes with a seating area.
                
                The accommodation offers a buffet or American breakfast.
                
                Bagan Wynn Hotel offers a terrace.
                
                Nyaung U Market is 5 km from the hotel, while Shwezigon Pagoda is 6 km from the property. The nearest airport is Nyaung U, less than 1 km from Bagan Wynn Hotel, and the property offers a paid airport shuttle service.
                ",
                "image"=> '/vegefoods/images/productss/Hotels/Bagan Wynn Hotel.jpg',
                "blog_category_id"=> '2',
            ],
            [
                "title"=> 'Heritage Bagan Hotel',
                "description"=> "Less than a kilometer from Bagan Nyaung-U Airport, this upscale hotel in temple-style buildings is at around a lake. It's 3 km from the viewing platform at Bagan Nan Myint Tower and 6 km from the ornate Shwezigon Pagoda.
                Polished rooms include free Wi-Fi, flat-screen TVs and minifridges, as well as balconies. Suites, some bi-level, add living rooms and/or lake views. Kids age 5 and under (1 per room) stay at no extra cost with an adult.
                Amenities include a restaurant with a rooftop bar, as well as an outdoor pool, a hot tub and a poolside bar. There's also a spa and a fitness center.
                ",
                "image"=> '/vegefoods/images/productss/Hotels/Heritage Bagan Hotel.jpg',
                "blog_category_id"=> '2',
            ],
            [
                "title"=> 'Hotel Temple View Bagan',
                "description"=> "Hotel Temple View Bagan features air-conditioned rooms with satellite flat-screen TV in the New Bagan district of Bagan. Among the facilities of this property are a restaurant, a 24-hour front desk and room service, along with free Wi-Fi. There is free private parking and the property provides paid airport shuttle service.
                A buffet breakfast is available daily at the hotel.
                Dhammayazika Pagoda is 2.1 km from Hotel Temple View Bagan, while Manuha Temple is 4.2 km away. The nearest airport is Nyaung U Airport, 8 km from the accommodation.
                ",
                "image"=> '/vegefoods/images/productss/Hotels/Hotel Temple View Bagan.jpg',
                "blog_category_id"=> '2',
            ],


            [
                "title"=> 'Burmese Cuisine',
                "description"=> "The curry is a delicious meal to try with pork, fish, shrimp, beef or mutton. These include rice, a tart salad, a small dish of fried vegetables, a small bowl of soup and a large tray of fresh vegetables and herbs.",
                "image"=> '/vegefoods/images/productss/Myamar-food/Curry/Curry1.jpg',
                "blog_category_id"=> '3',
            ],
            [
                "title"=> 'Burmese Chicken Curry',
                "description"=> "A mildly spiced curry from Burma with a beautiful fish-infused sauce! Try it!!! Garam Masala can be found in most supermarkets in the spice section or from Asian supermarkets. You can also make your own pretty easily. This meal is excellent served with rice and Indian breads such as chapati, roti or naan.",
                "image"=> '/vegefoods/images/productss/Myamar-food/Curry/Curry3.jpg',
                "blog_category_id"=> '3',
            ],
            [
                "title"=> 'Burmese Pork Curry',
                "description"=> "This Burmese pork curry recipe is the perfect example of how slow-cooking meat can transform its texture and flavor. Giving the meat a rinse in vinegar was thought to help clean it, but gives it a nice tang that balances with the richness of the fat. This is a simple, delicious recipe that uses basic home ingredients, and you can have it on the table in two hours.",
                "image"=> '/vegefoods/images/productss/Myamar-food/Curry/Curry4.jpg',
                "blog_category_id"=> '3',
            ],


            [
                "title"=> 'A Kyaw Sone',
                "description"=> "These deep-fried snacks consist of leafy vegetables, onions, sweet potatoes, tofu and mock meat, served with a sweet and tangy sauce. It was a wonderful contrast of earthy, crisp and chewy.",
                "image"=> '/vegefoods/images/productss/Myamar-food/Snacks/a -kyaw-sone/akyaw 4.jpg',
                "blog_category_id"=> '4',
            ],
            [
                "title"=> 'Tea-Leaf-Salad',
                "description"=> "Lahpet is so important to the culture that when tea leaves are harvested, the best of the crop is set aside for fermenting, while the rest is dried and processed for drinking tea. The freshly harvested tea leaves are briefly steamed, then packed into bamboo vats and set in pits, pressed by heavy weights to encourage fermentation.",
                "image"=> '/vegefoods/images/productss/Myamar-food/Snacks/la-phat-toke/the-infamous-tea-leaf.jpg',
                "blog_category_id"=> '4',
            ],
            [
                "title"=> 'Mote-Lin-Mayar',
                "description"=> "Roughly translated as “husband and wife snacks,” these tiny bites are a visual delight. Dollops of rice flour batter are put in a large sizzling cast iron pan that resembles a muffin tin. Toppings such as quail eggs, scallions, or roasted chickpeas are added to half of the dollops, and then, like a husband and wife, the two halves are joined to make a little round cake. The quail egg versions are the perfect breakfast food, like eating half a dozen mini egg McMuffins.",
                "image"=> '/vegefoods/images/productss/Myamar-food/Snacks/Mote-Lin-Mayar/Mote-Lin-Mayar.jpg',
                "blog_category_id"=> '4',
            ],
            
        ]);
    }
}
