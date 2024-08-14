<?php

namespace Database\Seeders;

use Airport\Support\Models\Airport;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class AirportSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $json = Storage::disk('public')->get('airports.json');
        $airports = json_decode($json, true);
        foreach ($airports as $key => $airport)
        {
            Airport::factory()->create([
                'code' => $key,
                'city_en' => $airport['cityName']['en'],
                'city_ru' => $airport['cityName']['ru'] ?? null,
                'airport_en' => $airport['airportName']['en'] ?? null,
                'airport_ru' => $airport['airportName']['ru'] ?? null,
                'area' => $airport['area'] ?? null,
                'country' => $airport['country'] ?? null,
                'timezone' => $airport['timezone'] ?? null,
                'lat' => $airport['lat'] ?? null,
                'lng' => $airport['lng'] ?? null,
            ]);
        }
    }
}
