<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\OurService\OurService;
use Faker\Factory as Faker;

class OurServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        for($i=1; $i<=5; $i++){
            OurService::create([
                "service_img" -> $faker->image,
                "service_headline" -> $faker->headline,
                "service_content" -> $faker->content
            ]);
        }

    }
}
