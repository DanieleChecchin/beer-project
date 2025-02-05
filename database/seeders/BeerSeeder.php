<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Beer;

class BeerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $beers = [
            [
                'name' => 'Pale Ale',
                'description' => 'Una birra amara con un aroma di luppolo fresco e una finitura secca.',
                'type' => 'Ale',
                'price' => 5.50,
                'alcohol_content' => 5.6,
                'capacity' => 500,
                'img' => 'pale.jpg'
            ],
            [
                'name' => 'Lager',
                'description' => 'Birra chiara e rinfrescante con un gusto equilibrato.',
                'type' => 'Lager',
                'price' => 3.75,
                'alcohol_content' => 4.5,
                'capacity' => 330,
                'img' => 'lager.jpg'
            ],
            [
                'name' => 'IPA',
                'description' => 'Birra con un sapore intenso di luppolo, agrumi e una leggera amarezza.',
                'type' => 'IPA',
                'price' => 6.20,
                'alcohol_content' => 6.8,
                'capacity' => 440,
                'img' => 'ipa.jpg'
            ],
            [
                'name' => 'Stout',
                'description' => 'Birra scura con note di caffè, cioccolato e un corpo robusto.',
                'type' => 'Stout',
                'price' => 7.00,
                'alcohol_content' => 5.9,
                'capacity' => 500,
                'img' => 'stout.jpg'
            ],
            [
                'name' => 'Wheat Beer',
                'description' => 'Birra di frumento, leggera e rinfrescante, con un leggero gusto di spezie.',
                'type' => 'Wheat Beer',
                'price' => 4.50,
                'alcohol_content' => 5.2,
                'capacity' => 500,
                'img' => 'wheat.jpg'
            ],
            [
                'name' => 'Blonde Ale',
                'description' => 'Una birra chiara e morbida con una bassa amarezza e un finale pulito.',
                'type' => 'Ale',
                'price' => 5.00,
                'alcohol_content' => 4.8,
                'capacity' => 330,
                'img' => 'blonde.jpg'
            ],
            [
                'name' => 'Guinness Draught',
                'description' => 'Iconica birra stout irlandese con note di caffè e cioccolato, caratterizzata dalla sua cremosità.',
                'type' => 'Stout',
                'price' => 6.50,
                'alcohol_content' => 4.2,
                'capacity' => 500,
                'img' => 'guinness.jpg'
            ],
            [
                'name' => 'Heineken',
                'description' => 'Birra lager olandese famosa per il suo sapore equilibrato e la freschezza.',
                'type' => 'Lager',
                'price' => 4.00,
                'alcohol_content' => 5.0,
                'capacity' => 330,
                'img' => 'heineken.jpg'
            ],
            [
                'name' => 'Duvel',
                'description' => 'Strong Ale belga con un sapore fruttato, secco e una schiuma abbondante.',
                'type' => 'Belgian Strong Ale',
                'price' => 7.50,
                'alcohol_content' => 8.5,
                'capacity' => 330,
                'img' => 'duvel.jpg'
            ],
            [
                'name' => 'Pilsner Urquell',
                'description' => 'Pilsner ceca con un gusto distintivo di malto dolce e un finale amaro.',
                'type' => 'Pilsner',
                'price' => 4.80,
                'alcohol_content' => 4.4,
                'capacity' => 500,
                'img' => 'pilsner_urquell.jpg'
            ],
            [
                'name' => 'Chimay Blue',
                'description' => 'Birra trappista belga con note di caramello, frutta secca e un corpo pieno.',
                'type' => 'Trappist Ale',
                'price' => 8.20,
                'alcohol_content' => 9.0,
                'capacity' => 330,
                'img' => 'chimay_blue.jpg'
            ],
            [
                'name' => 'Hoegaarden',
                'description' => 'Witbier belga speziata con coriandolo e scorza d’arancia, rinfrescante e leggera.',
                'type' => 'Witbier',
                'price' => 5.00,
                'alcohol_content' => 4.9,
                'capacity' => 500,
                'img' => 'hoegaarden.jpg'
            ],
            [
                'name' => 'Brooklyn Lager',
                'description' => 'Lager americana con un sapore ricco e note caramellate, equilibrata con luppolo floreale.',
                'type' => 'Amber Lager',
                'price' => 6.00,
                'alcohol_content' => 5.2,
                'capacity' => 355,
                'img' => 'brooklyn_lager.jpg'
            ],
            [
                'name' => 'Leffe Blonde',
                'description' => 'Birra belga morbida e fruttata con note di miele e un finale speziato.',
                'type' => 'Belgian Blonde Ale',
                'price' => 5.80,
                'alcohol_content' => 6.6,
                'capacity' => 330,
                'img' => 'leffe_blonde.jpg'
            ],
            [
                'name' => 'Sierra Nevada Pale Ale',
                'description' => 'American Pale Ale con un sapore agrumato e una forte presenza di luppolo.',
                'type' => 'Pale Ale',
                'price' => 6.30,
                'alcohol_content' => 5.6,
                'capacity' => 355,
                'img' => 'sierra_nevada_pale.jpg'
            ],
            [
                'name' => 'Weihenstephaner Hefeweissbier',
                'description' => 'Classica Weissbier tedesca con aromi di banana, chiodi di garofano e un corpo morbido.',
                'type' => 'Hefeweizen',
                'price' => 6.20,
                'alcohol_content' => 5.4,
                'capacity' => 500,
                'img' => 'weihenstephaner.jpg'
            ]
        ];

        foreach ($beers as $beer) {
            Beer::create($beer);
        }
    }
}
