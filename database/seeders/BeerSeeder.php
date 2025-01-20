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
            ],
            [
                'name' => 'Lager',
                'description' => 'Birra chiara e rinfrescante con un gusto equilibrato.',
                'type' => 'Lager',
                'price' => 3.75,
                'alcohol_content' => 4.5,
                'capacity' => 330,
            ],
            [
                'name' => 'IPA',
                'description' => 'Birra con un sapore intenso di luppolo, agrumi e una leggera amarezza.',
                'type' => 'IPA',
                'price' => 6.20,
                'alcohol_content' => 6.8,
                'capacity' => 440,
            ],
            [
                'name' => 'Stout',
                'description' => 'Birra scura con note di caffè, cioccolato e un corpo robusto.',
                'type' => 'Stout',
                'price' => 7.00,
                'alcohol_content' => 5.9,
                'capacity' => 500,
            ],
            [
                'name' => 'Wheat Beer',
                'description' => 'Birra di frumento, leggera e rinfrescante, con un leggero gusto di spezie.',
                'type' => 'Wheat Beer',
                'price' => 4.50,
                'alcohol_content' => 5.2,
                'capacity' => 500,
            ],
            [
                'name' => 'Blonde Ale',
                'description' => 'Una birra chiara e morbida con una bassa amarezza e un finale pulito.',
                'type' => 'Ale',
                'price' => 5.00,
                'alcohol_content' => 4.8,
                'capacity' => 330,
            ],
        ];

        foreach ($beers as $beer) {
            Beer::create($beer);
        }
    }
}
