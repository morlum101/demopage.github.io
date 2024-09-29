<?php

namespace Database\Seeders;

use App\Models\Municipality;
use Illuminate\Database\Seeder;
use App\Services\ActivityLogsService;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class MunicipalitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(ActivityLogsService $service)
    {
        $municipalities = array(
            [
                'id' => 1,
                'name' => 'Alaminos',
                'created_at' => now(),
            ],
            [
                'id' => 2,
                'name' => 'Bay',
                'created_at' => now(),
            ],
            [
                'id' => 3,
                'name' => 'Calauan',
                'created_at' => now(),
            ],
            [
                'id' => 4,
                'name' => 'Cavinti',
                'created_at' => now(),
            ],
            [
                'id' => 5,
                'name' => 'Famy',
                'created_at' => now(),
            ],
            [
                'id' => 6,
                'name' => 'Kalayaan',
                'created_at' => now(),
            ],
            [
                'id' => 7,
                'name' => 'Liliw',
                'created_at' => now(),
            ],
            [
                'id' => 8,
                'name' => 'Los Baños',
                'created_at' => now(),
            ],
            [
                'id' => 9,
                'name' => 'Luisiana',
                'created_at' => now(),
            ],
            [
                'id' => 10,
                'name' => 'Lumban',
                'created_at' => now(),
            ],
            [
                'id' => 11,
                'name' => 'Mabitac',
                'created_at' => now(),
            ],
            [
                'id' => 12,
                'name' => 'Majayjay',
                'created_at' => now(),
            ],
            [
                'id' => 13,
                'name' => 'Nagcarlan',
                'created_at' => now(),
            ],
            [
                'id' => 14,
                'name' => 'Paete',
                'created_at' => now(),
            ],
            [
                'id' => 15,
                'name' => 'Pagsanjan',
                'created_at' => now(),
            ],
            [
                'id' => 16,
                'name' => 'Pakil',
                'created_at' => now(),
            ],
            [
                'id' => 17,
                'name' => 'Pangil',
                'created_at' => now(),
            ],
            [
                'id' => 18,
                'name' => 'Pila',
                'created_at' => now(),
            ],
            [
                'id' => 19,
                'name' => 'Rizal',
                'created_at' => now(),
            ],
            [
                'id' => 20,
                'name' => 'Santa Cruz',
                'created_at' => now(),
            ],
            [
                'id' => 21,
                'name' => 'Santa Maria',
                'created_at' => now(),
            ],
            [
                'id' => 22,
                'name' => 'Sinilóan',
                'created_at' => now(),
            ],
            [
                'id' => 23,
                'name' => 'Victoria',
                'created_at' => now(),
            ],
        );

        Municipality::insert($municipalities);

        Municipality::all()->map(fn(
            $municipality) => $service->log_activity(model:$municipality, event:'added', model_name: 'Municipality', model_property_name: $municipality->name)
        );
    }
}