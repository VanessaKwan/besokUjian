<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    // function imageUrl(
    //     int $width = 640,
    //     int $height = 480,
    //     ?string $category = null, /* used as text on the image */
    //     bool $randomize = true,
    //     ?string $word = null,
    //     bool $gray = false,
    //     string $format = 'png'
    // ): string;

    public function run()
    {
        //
        $faker = Faker::create();

        for ($i=0; $i < 10; $i++) {
            Book::create([
                'publisher_id' => mt_rand(1, 3),
                'title' => $faker->word(),
                'author' => $faker->name(),
                'year' => $faker->year(),
                'synopsis' => $faker->sentence(),
                'image' => $faker->imageUrl(640, 480, 'animals', true)
            ]);
        }
    }
}
