<?php

namespace Database\Seeders;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');

        for ($i=1; $i<=50; $i++) {
            DB::table('products')->insert([
                'product_name' => $faker->sentence($nbWords=6, $variableNbWords=true),
                'product_code' => $faker->word,
                'price' => $faker->randomFloat($nbMaxDecimals=NULL, $min=100000, $max=NULL),
                'created_at' => $faker->dateTime($max='now', $timezone=NULL),
                'updated_at' => $faker->dateTime($max='now', $timezone=NULL),
            ]);
        }
    }
}
