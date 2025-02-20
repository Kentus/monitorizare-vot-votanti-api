<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Incident;

class IncidentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $faker = Faker::create();

        foreach (range(1, 141) as $index)
        {
            Incident::create([
                'first_name' => $faker->firstName(),
                'last_name' => $faker->lastName(),
                'county_id' => $faker->numberBetween(1, 42),
                'city_id' => $faker->numberBetween(1, 3000),
                'precinct_id' => $faker->numberBetween(1, 90000),
                'incident_type_id' => $faker->numberBetween(1, 10),
                'description' => $faker->realText(250),
                'image_url' => $faker->imageUrl(320, 240, 'cats'),
                'status' => $faker->randomElement(['Approved', 'Pending', 'Rejected'])
            ]);
        }
    }
}
