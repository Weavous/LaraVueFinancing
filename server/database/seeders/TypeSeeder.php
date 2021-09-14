<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

use App\Models\Type;

class TypeSeeder extends Seeder
{
    private $data = [
        "Van",
        "Taxi",
        "Police car",
        "Bus",
        "Ambulance",
        "Skateboard",
        "Baby carriage (US)/ Pram (UK)",
        "Bicycle",
        "Mountain bike",
        "Scooter",
        "Motorcycle",
        "Fire engine",
        "Crane",
        "Forklift",
        "Tractor",
        "Recycling truck",
        "Cement mixer",
        "Dump truck",
        "Subway",
        "Aerial tramway",
        "Helicopter",
        "Airplane",
        "Balloon",
        "Tram (UK)/ Streetcar (US)",
        "Carriage",
        "Rowboat",
        "Boat",
        "Train"
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach ($this->data as $type) {
            Type::create([
                "name" => $type
            ]);
        }
    }
}
