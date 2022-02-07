<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Packet;

class PacketsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i = 0; $i < 20; $i++){

            $packet = new Packet();

            $packet->name = $faker->catchPhrase();
            $packet->country = $faker->country();
            $packet->city = $faker->city();
            $packet->description = $faker->text(500);
            $packet->people = $faker->randomDigit();
            $packet->fly_included = $faker->numberBetween(0, 1);
            $packet->price = $faker->randomFloat(2);
            $packet->discount = $faker->randomFloat(2);
            $packet->arrival = $faker->dateTimeThisMonth();
            $packet->departure = $faker->dateTimeThisMonth('+12 days');


            $packet->save();
    }
}
}