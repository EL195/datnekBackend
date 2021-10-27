<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
Use App\Models\Langue;

class LangueTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Let's truncate our existing records to start from scratch.
        Langue::truncate();

        $faker = \Faker\Factory::create();

        // And now, let's create a few articles in our database:
        for ($i = 0; $i < 50; $i++) {
            Langue::create([
                'titre' => $faker->word,
                'code_court' => $faker->word,
                'comprehension' => $faker->word,
                'parle' => $faker->word,
                'ecrit' => $faker->word,
            ]);
        }
    }
}
