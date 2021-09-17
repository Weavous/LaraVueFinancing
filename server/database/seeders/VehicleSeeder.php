<?php

namespace Database\Seeders;

use App\Models\Vehicle;
use App\Models\Type;
use App\Models\Brand;

use Illuminate\Database\Seeder;

class VehicleSeeder extends Seeder
{
    private $data = [
        "Acura",
        "Alfa Romeo",
        "Audi",
        "BMW",
        "Bentley",
        "Buick",
        "Cadillac",
        "Chevrolet",
        "Chrysler",
        "Dodge",
        "Fiat",
        "Ford",
        "GMC",
        "Genesis",
        "Honda",
        "Hyundai",
        "Infiniti",
        "Jaguar",
        "Jeep",
        "Kia",
        "Land Rover",
        "Lexus",
        "Lincoln",
        "Lotus",
        "Maserati",
        "Mazda",
        "Mercedes-Benz",
        "Mercury",
        "Mini",
        "Mitsubishi",
        "Nikola",
        "Nissan",
        "Polestar",
        "Pontiac",
        "Porsche",
        "Ram",
        "Rivian",
        "Rolls-Royce",
        "Saab",
        "Saturn",
        "Scion",
        "Smart",
        "Subaru",
        "Suzuki",
        "Tesla",
        "Toyota",
        "Volkswagen",
        "Volvo",
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $types = Type::all();
        $brands = Brand::all();

        foreach ($this->data as $vehicle) {
            Vehicle::create([
                'name' => $vehicle,
                'price' => rand(9999999, 99999999),
                'type_id' => rand(1, count($types)),
                'brand_id' => rand(1, count($brands))
            ]);
        }
    }
}
