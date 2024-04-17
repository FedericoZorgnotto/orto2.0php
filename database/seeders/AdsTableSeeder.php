<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Ad;
use App\Models\AdImage;
use Faker\Factory as Faker;
class AdsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $faker = Faker::create();

        for ($i = 0; $i < 10; $i++) { // Popolo il database con 10 annunci
            $ad = Ad::createAd([
                'title' => $faker->sentence,
                'description' => $faker->paragraph,
                'price' => $faker->randomFloat(2, 10, 1000), // Genero un prezzo casuale tra 10 e 1000
                'user_id' => 1 // ID dell'utente proprietario dell'annuncio
            ]);

            // Aggiungo un'immagine relativa all'annuncio
            $this->addImageToAd($ad);
        }
    }

    private function addImageToAd($ad): void
    {
        // Genero un numero casuale tra 1 e 400 per l'ID dell'immagine
        $imageId = rand(1, 400);

        // Genero un'immagine casuale in formato base64 dal sito https://picsum.photos/
        $imageBase64 = 'data:image/jpeg;base64,' . base64_encode(file_get_contents('https://picsum.photos/id/'.$imageId.'/200/300'));

        // Creo un'immagine associata all'annuncio
        AdImage::createAdImage([
            'ad_id' => $ad->id,
            'base64_image' => $imageBase64
        ]);
    }
}
