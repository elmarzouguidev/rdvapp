<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Models\City;

use Illuminate\Database\Seeder;

class CitySeeder extends Seeder
{
    public function run(): void
    {
        $cities = [
            ['name' => 'Casablanca'],
        ];

        foreach ($cities as $city) {
            City::create($city);
        }
    }
}
