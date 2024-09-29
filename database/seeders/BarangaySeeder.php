<?php

namespace Database\Seeders;

use App\Models\Barangay;
use Illuminate\Database\Seeder;
use App\Services\ActivityLogsService;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class BarangaySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(ActivityLogsService $service)
    {
        $barangays = array(
            [

                // Alaminos
                'id' => 1,
                'municipality_id' => 1,
                'name' => 'Del Carmen',
                'fee' => mt_rand(50, 200),
                'created_at' => now(),
            ],

            // Bay
            [
                'id' => 2,
                'municipality_id' => 2,
                'name' => 'Bitin',
                'fee' => mt_rand(50, 200),
                'created_at' => now(),
            ],
            
            // Caluan
            [
                'id' => 3,
                'municipality_id' => 3,
                'name' => 'Balayhangin',
                'fee' => mt_rand(50, 200),
                'created_at' => now(),
            ],

            //Cavinti
            [
                'id' => 4,
                'municipality_id' => 4,
                'name' => 'Anglas',
                'fee' => mt_rand(50, 200),
                'created_at' => now(),
            ],

            //Famy
            [
                'id' => 5,
                'municipality_id' => 5,
                'name' => 'Asana (Poblacion)',
                'fee' => mt_rand(50, 200),
                'created_at' => now(),
            ],

            // Kalayaan
            [
                'id' => 6,
                'municipality_id' => 6,
                'name' => 'Longos',
                'fee' => mt_rand(50, 200),
                'created_at' => now(),
            ],

            // Liliw
            [
                'id' => 7,
                'municipality_id' => 7,
                'name' => 'San Antonio',
                'fee' => mt_rand(50, 200),
                'created_at' => now(),
            ],

            // Los Baños
            [
                'id' => 8,
                'municipality_id' => 8,
                'name' => 'Anos',
                'fee' => mt_rand(50, 200),
                'created_at' => now(),
            ],

            // Luisiana
            [
                'id' => 9,
                'municipality_id' => 9,
                'name' => 'De La Paz',
                'fee' => mt_rand(50, 200),
                'created_at' => now(),
            ],

            //Lumban
            [
                'id' => 10,
                'municipality_id' => 10,
                'name' => 'Bagong Silang',
                'fee' => mt_rand(50, 200),
                'created_at' => now(),
            ],

            // Mabitac
            [
                'id' => 11,
                'municipality_id' => 11,
                'name' => 'Amuyong',
                'fee' => mt_rand(50, 200),
                'created_at' => now(),
            ],

            // Majayjay
            [
                'id' => 12,
                'municipality_id' => 12,
                'name' => 'Amonoy',
                'fee' => mt_rand(50, 200),
                'created_at' => now(),
            ],

            // Nagcarlan
            [
                'id' => 13,
                'municipality_id' => 13,
                'name' => 'Abo',
                'fee' => mt_rand(50, 200),
                'created_at' => now(),
            ],

            // Paete
            [
                'id' => 14,
                'municipality_id' => 14,
                'name' => 'Ibaba del Sur',
                'fee' => mt_rand(50, 200),
                'created_at' => now(),
            ],

            // Pagsanjan
            [
                'id' => 15,
                'municipality_id' => 15,
                'name' => 'Anibong',
                'fee' => mt_rand(50, 200),
                'created_at' => now(),
            ],

            // Pakil
            [
                'id' => 16,
                'municipality_id' => 16,
                'name' => 'Baño (Poblacion)',
                'fee' => mt_rand(50, 200),
                'created_at' => now(),
            ],

            // Pangil
            [
                'id' => 17,
                'municipality_id' => 17,
                'name' => 'Balian',
                'fee' => mt_rand(50, 200),
                'created_at' => now(),
            ],

            // Pila
            [
                'id' => 18,
                'municipality_id' => 18,
                'name' => 'Aplaya',
                'fee' => mt_rand(50, 200),
                'created_at' => now(),
            ],

            // Rizal
            [
                'id' => 19,
                'municipality_id' => 19,
                'name' => 'Antipolo',
                'fee' => mt_rand(50, 200),
                'created_at' => now(),
            ],

            // Santa Cruz
            [
                'id' => 20,
                'municipality_id' => 20,
                'name' => 'Alipit',
                'fee' => mt_rand(50, 200),
                'created_at' => now(),
            ],

            // Santa Maria
            [
                'id' => 21,
                'municipality_id' => 21,
                'name' => 'Adia',
                'fee' => mt_rand(50, 200),
                'created_at' => now(),
            ],

            // Sinilóan
            [
                'id' => 22,
                'municipality_id' => 22,
                'name' => 'Acevida',
                'fee' => mt_rand(50, 200),
                'created_at' => now(),
            ],

            // Victoria
            [
                'id' => 23,
                'municipality_id' => 23,
                'name' => 'Banca-banca',
                'fee' => mt_rand(50, 200),
                'created_at' => now(),
            ],
        );

        Barangay::insert($barangays);

        Barangay::all()->map(fn(
            $barangay) => $service->log_activity(model:$barangay, event:'added', model_name: 'Barangay', model_property_name: $barangay->name)
        );
    }
}