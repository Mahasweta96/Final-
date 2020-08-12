<?php

use App\Goodie;
use Illuminate\Database\Seeder;

class GoodiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        Goodie::create([
        	'name' => 'Vanilla Cream Frappuccino',
        	'slug' => 'vanilla-cream-frappuccino',
        	'details' => 'creame vanilla essence',
        	'price' => 210,

        ]);

        Goodie::create([
        	'name' => 'Caramel Cream Frappuccino',
        	'slug' => 'caramel-cream-frappuccino',
        	'details' => 'creame Caramel essence',
        	'price' => 230,

        ]);

        Goodie::create([
        	'name' => 'Double Chocolate Cream Frappuccino',
        	'slug' => 'double-chocolate-cream-frappuccino',
        	'details' => 'creame Chocolatey essence',
        	'price' => 250,

        ]);

        Goodie::create([
        	'name' => 'White Cream Frappuccino',
        	'slug' => 'white-cream-frappuccino',
        	'details' => 'creame White-Chocolatey essence',
        	'price' => 250,

        ]);
        

        Goodie::create([
        	'name' => 'Cream Frappuccino',
        	'slug' => 'cream-frappuccino',
        	'details' => 'creame Chocolatey essence',
        	'price' => 270,

        ]);


        Goodie::create([
        	'name' => 'Chocolate Cream Frappuccino',
        	'slug' => 'chocolate-cream-frappuccino',
        	'details' => 'creamey essence',
        	'price' => 290,

        ]);

        Goodie::create([
        	'name' => 'Vanilla Velvet Latte',
        	'slug' => 'vanilla-velvet-latte',
        	'details' => 'Velvet essence',
        	'price' => 230,

        ]);

        Goodie::create([
        	'name' => 'Cream Caramel Mocchiato',
        	'slug' => 'cream-caramel-mocchiato',
        	'details' => 'Caramely essence',
        	'price' => 160,

        ]);

        Goodie::create([
        	'name' => 'Caramel Mocchiato',
        	'slug' => 'caramel-mocchiato',
        	'details' => 'Caramel essence',
        	'price' => 160,

        ]);

        Goodie::create([
        	'name' => 'Cocoa Cappuccino',
        	'slug' => 'cocoa-cappuccino',
        	'details' => 'Cocoa essence',
        	'price' => 170,

        ]);

        Goodie::create([
        	'name' => 'White Chocolate Mocha',
        	'slug' => 'white-chocolate-mocha',
        	'details' => 'White Chocolatey essence',
        	'price' => 350,

        ]);

        Goodie::create([
        	'name' => 'Hazelnut Latte',
        	'slug' => 'hazelnut-latte',
        	'details' => 'Hazelnut essence',
        	'price' => 320,

        ]);

        Goodie::create([
        	'name' => 'Iced Shaken Black Tea',
        	'slug' => 'iced-shaken-black-tea',
        	'details' => 'Black Tea essence',
        	'price' => 130,

        ]);

        Goodie::create([
        	'name' => 'Iced Shaken Green Tea',
        	'slug' => 'iced-shaken-green-tea',
        	'details' => 'Green Tea essence',
        	'price' => 120,

        ]);

        Goodie::create([
        	'name' => 'Iced Shaken Hibiscus & Passion Lemonade',
        	'slug' => 'iced-shaken-hibiscus-&-passion-lemonade',
        	'details' => 'Lemonade essence',
        	'price' => 130,

        ]);




    }
}
