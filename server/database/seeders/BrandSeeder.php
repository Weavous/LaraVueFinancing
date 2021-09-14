<?php

namespace Database\Seeders;

use App\Models\Brand;

use Illuminate\Database\Seeder;

class BrandSeeder extends Seeder
{
    private $data = [
        [
            "name" => "Tesla",
            "logo" => "https://www.carlogos.org/car-logos/tesla-logo.png",
            "details" => "Luxury Electric Vehicles",
            "date" => "2003-Present",
        ],
        [
            "name" => "BMW",
            "logo" => "https://www.carlogos.org/car-logos/bmw-logo.png",
            "details" => "Luxury Vehicles",
            "date" => "1916-Present",
        ],
        [
            "name" => "Ferrari",
            "logo" => "https://www.carlogos.org/car-logos/ferrari-logo.png",
            "details" => "Luxury Sports Cars",
            "date" => "1947-present",
        ],
        [
            "name" => "Ford",
            "logo" => "https://www.carlogos.org/car-logos/ford-logo.png",
            "details" => "Mass-Market Cars",
            "date" => "1903-Present",
        ],
        [
            "name" => "Porsche",
            "logo" => "https://www.carlogos.org/car-logos/porsche-logo.png",
            "details" => "Luxury Sports Cars",
            "date" => "1931-Present",
        ],
        [
            "name" => "Honda",
            "logo" => "https://www.carlogos.org/car-logos/honda-logo.png",
            "details" => "Mass-Market Cars",
            "date" => "1948-Present",
        ],
        [
            "name" => "Lamborghini",
            "logo" => "https://www.carlogos.org/car-logos/lamborghini-logo.png",
            "details" => "Luxury Sports Cars",
            "date" => "1963-Present",
        ],
        [
            "name" => "Toyota",
            "logo" => "https://www.carlogos.org/car-logos/toyota-logo.png",
            "details" => "Mass-Market Cars",
            "date" => "1937-Present",
        ],
        [
            "name" => "Bentley",
            "logo" => "https://www.carlogos.org/car-logos/bentley-logo.png",
            "details" => "Ultra-luxury Cars",
            "date" => "1919-Present",
        ],
        [
            "name" => "Maserati",
            "logo" => "https://www.carlogos.org/car-logos/maserati-logo.png",
            "details" => "Luxury Vehicles",
            "date" => "1914-Present",
        ],
        [
            "name" => "Audi",
            "logo" => "https://www.carlogos.org/car-logos/audi-logo.png",
            "details" => "Luxury Vehicles",
            "date" => "1909-Present",
        ],
        [
            "name" => "Jeep",
            "logo" => "https://www.carlogos.org/car-logos/jeep-logo.png",
            "details" => "Sport Utility Vehicles",
            "date" => "1941-Present",
        ],
        [
            "name" => "Subaru",
            "logo" => "https://www.carlogos.org/car-logos/subaru-logo.png",
            "details" => "Mass-Market Cars",
            "date" => "1953-Present",
        ],
        [
            "name" => "Cadillac",
            "logo" => "https://www.carlogos.org/car-logos/cadillac-logo.png",
            "details" => "Luxury Vehicles",
            "date" => "1902-Present",
        ],
        [
            "name" => "Chrysler",
            "logo" => "https://www.carlogos.org/car-logos/chrysler-logo.png",
            "details" => "Luxury Vehicles",
            "date" => "1925-Present",
        ],
        [
            "name" => "Chevrolet Corvette",
            "logo" => "https://www.carlogos.org/car-logos/corvette-logo.png",
            "details" => "Sports Cars",
            "date" => "1953-Present",
        ],
        [
            "name" => "Dodge",
            "logo" => "https://www.carlogos.org/car-logos/dodge-logo.png",
            "details" => "Performance Cars, Other",
            "date" => "1900-Present",
        ],
        [
            "name" => "Hyundai",
            "logo" => "https://www.carlogos.org/car-logos/hyundai-logo.png",
            "details" => "Mass-Market Cars",
            "date" => "1967-Present",
        ],
        [
            "name" => "Jaguar",
            "logo" => "https://www.carlogos.org/car-logos/jaguar-logo.png",
            "details" => "Luxury Vehicles",
            "date" => "1922-Present",
        ],
        [
            "name" => "Mazda",
            "logo" => "https://www.carlogos.org/car-logos/mazda-logo.png",
            "details" => "Mass-Market Cars",
            "date" => "1920-Present",
        ],
        [
            "name" => "Ford Mustang",
            "logo" => "https://www.carlogos.org/car-logos/ford-mustang-logo.png",
            "details" => "Sports Cars",
            "date" => "1964-Present",
        ],
        [
            "name" => "Nissan",
            "logo" => "https://www.carlogos.org/car-logos/nissan-logo.png",
            "details" => "Mass-Market Cars",
            "date" => "1933-Present",
        ],
        [
            "name" => "Alfa Romeo",
            "logo" => "https://www.carlogos.org/car-logos/alfa-romeo-logo.png",
            "details" => "Luxury Vehicles",
            "date" => "1910-Present",
        ],
        [
            "name" => "Bugatti",
            "logo" => "https://www.carlogos.org/car-logos/bugatti-logo.png",
            "details" => "Luxury Supercars",
            "date" => "1909-Present",
        ],
        [
            "name" => "Buick",
            "logo" => "https://www.carlogos.org/car-logos/buick-logo.png",
            "details" => "Mass-Market Cars",
            "date" => "1903-Present",
        ],
        [
            "name" => "Lexus",
            "logo" => "https://www.carlogos.org/car-logos/lexus-logo.png",
            "details" => "Luxury Vehicles",
            "date" => "1983-Present",
        ],
        [
            "name" => "Rolls-Royce",
            "logo" => "https://www.carlogos.org/car-logos/rolls-royce-logo.png",
            "details" => "Ultra-luxury Cars",
            "date" => "1906-Present",
        ],
        [
            "name" => "Acura",
            "logo" => "https://www.carlogos.org/car-logos/acura-logo.png",
            "details" => "Luxury Vehicles",
            "date" => "1986-Present",
        ],
        [
            "name" => "Aston Martin",
            "logo" => "https://www.carlogos.org/car-logos/aston-martin-logo.png",
            "details" => "Luxury Sports Cars",
            "date" => "1913-Present",
        ],
        [
            "name" => "Chevrolet",
            "logo" => "https://www.carlogos.org/car-logos/chevrolet-logo.png",
            "details" => "Mass-Market Cars",
            "date" => "1911-Present",
        ],
        [
            "name" => "Kia",
            "logo" => "https://www.carlogos.org/car-logos/kia-logo.png",
            "details" => "Mass-Market Cars",
            "date" => "1944-Present",
        ],
        [
            "name" => "Mercedes-Benz",
            "logo" => "https://www.carlogos.org/car-logos/mercedes-benz-logo.png",
            "details" => "Luxury Vehicles",
            "date" => "1926-Present",
        ],
        [
            "name" => "Volkswagen",
            "logo" => "https://www.carlogos.org/car-logos/volkswagen-logo.png",
            "details" => "Mass-Market Cars",
            "date" => "1937-Present",
        ],
        [
            "name" => "Volvo",
            "logo" => "https://www.carlogos.org/car-logos/volvo-logo.png",
            "details" => "Luxury Vehicles",
            "date" => "1927-Present",
        ],
        [
            "name" => "McLaren",
            "logo" => "https://www.carlogos.org/car-logos/mclaren-logo.png",
            "details" => "Luxury Sports Cars",
            "date" => "1963-Present",
        ],
        [
            "name" => "Mitsubishi",
            "logo" => "https://www.carlogos.org/car-logos/mitsubishi-logo.png",
            "details" => "Mass-Market Cars",
            "date" => "1970-Present",
        ],
        [
            "name" => "GMC",
            "logo" => "https://www.carlogos.org/car-logos/gmc-logo.png",
            "details" => "Pickup Trucks, Other",
            "date" => "1911-Present",
        ],
        [
            "name" => "Infiniti",
            "logo" => "https://www.carlogos.org/car-logos/infiniti-logo.png",
            "details" => "Luxury Vehicles",
            "date" => "1989-Present",
        ],
        [
            "name" => "Lincoln",
            "logo" => "https://www.carlogos.org/car-logos/lincoln-logo.png",
            "details" => "Luxury Vehicles",
            "date" => "1917-Present",
        ],
        [
            "name" => "Peugeot",
            "logo" => "https://www.carlogos.org/car-logos/peugeot-logo.png",
            "details" => "Mass-Market Cars",
            "date" => "1896-Present",
        ],
        [
            "name" => "Pontiac",
            "logo" => "https://www.carlogos.org/car-logos/pontiac-logo.png",
            "details" => "Luxury Vehicles",
            "date" => "1926-2010",
        ],
        [
            "name" => "Saab",
            "logo" => "https://www.carlogos.org/car-logos/saab-logo.png",
            "details" => "Manufacturer",
            "date" => "1937-Present",
        ],
        [
            "name" => "Genesis",
            "logo" => "https://www.carlogos.org/car-logos/genesis-logo.png",
            "details" => "Luxury Vehicles",
            "date" => "2015-Present",
        ],
        [
            "name" => "Suzuki",
            "logo" => "https://www.carlogos.org/car-logos/suzuki-logo.png",
            "details" => "Economy Cars",
            "date" => "1909-Present",
        ],
        [
            "name" => "Citroën",
            "logo" => "https://www.carlogos.org/car-logos/citroen-logo.png",
            "details" => "Mass-Market Cars",
            "date" => "1919-Present",
        ],
        [
            "name" => "Fiat",
            "logo" => "https://www.carlogos.org/car-logos/fiat-logo.png",
            "details" => "Small Cars",
            "date" => "1899-Present",
        ],
        [
            "name" => "Lotus",
            "logo" => "https://www.carlogos.org/car-logos/lotus-logo.png",
            "details" => "Sports Cars, Racing Cars",
            "date" => "1952-Present",
        ],
        [
            "name" => "Mini",
            "logo" => "https://www.carlogos.org/car-logos/mini-logo.png",
            "details" => "Luxury Small Cars",
            "date" => "1959-Present",
        ],
        [
            "name" => "Peterbilt",
            "logo" => "https://www.carlogos.org/car-logos/peterbilt-logo.png",
            "details" => "Medium and Heavy-duty Trucks",
            "date" => "1939-Present",
        ],
        [
            "name" => "Saturn",
            "logo" => "https://www.carlogos.org/car-logos/saturn-logo.png",
            "details" => "Compact Cars",
            "date" => "1985-2010",
        ],
        [
            "name" => "BMW M",
            "logo" => "https://www.carlogos.org/car-logos/bmw-m-logo.png",
            "details" => "High Performance",
            "date" => "1972-Present",
        ],
        [
            "name" => "General Motors",
            "logo" => "https://www.carlogos.org/car-logos/general-motors-logo.png",
            "details" => "Manufacturer",
            "date" => "1908-Present",
        ],
        [
            "name" => "Kenworth",
            "logo" => "https://www.carlogos.org/car-logos/kenworth-logo.png",
            "details" => "Medium and Heavy-duty Trucks",
            "date" => "1912-Present",
        ],
        [
            "name" => "KTM",
            "logo" => "https://www.carlogos.org/car-logos/ktm-logo.png",
            "details" => "Sports Cars",
            "date" => "1934-Present",
        ],
        [
            "name" => "Land Rover",
            "logo" => "https://www.carlogos.org/car-logos/land-rover-logo.png",
            "details" => "Luxury Sport Utility Vehicles",
            "date" => "1948-Present",
        ],
        [
            "name" => "Maybach",
            "logo" => "https://www.carlogos.org/car-logos/maybach-logo.png",
            "details" => "Ultra-luxury Cars",
            "date" => "1909-Present",
        ],
        [
            "name" => "Mercury",
            "logo" => "https://www.carlogos.org/car-logos/mercury-logo.png",
            "details" => "Entry-Level Luxury Cars",
            "date" => "1938-2011",
        ],
        [
            "name" => "Oldsmobile",
            "logo" => "https://www.carlogos.org/car-logos/oldsmobile-logo.png",
            "details" => "Luxury Vehicles",
            "date" => "1897-2004",
        ],
        [
            "name" => "Renault",
            "logo" => "https://www.carlogos.org/car-logos/renault-logo.png",
            "details" => "Mass-Market Cars",
            "date" => "1899-Present",
        ],
        [
            "name" => "Dodge Viper",
            "logo" => "https://www.carlogos.org/car-logos/dodge-viper-logo.png",
            "details" => "Sports Cars",
            "date" => "1992-Present",
        ],
        [
            "name" => "Koenigsegg",
            "logo" => "https://www.carlogos.org/car-logos/koenigsegg-logo.png",
            "details" => "Luxury Supercars",
            "date" => "1994-Present",
        ],
        [
            "name" => "Mack",
            "logo" => "https://www.carlogos.org/car-logos/mack-logo.png",
            "details" => "Medium and Heavy-duty Trucks",
            "date" => "1900-Present",
        ],
        [
            "name" => "Scion",
            "logo" => "https://www.carlogos.org/car-logos/scion-logo.png",
            "details" => "Sport Compact Vehicles",
            "date" => "2003-2016",
        ],
        [
            "name" => "Škoda",
            "logo" => "https://www.carlogos.org/car-logos/skoda-logo.png",
            "details" => "Mass-Market Cars",
            "date" => "1895-Present",
        ],
        [
            "name" => "Daewoo",
            "logo" => "https://www.carlogos.org/car-logos/daewoo-logo.png",
            "details" => "Economy Cars",
            "date" => "1982-2002",
        ],
        [
            "name" => "Daimler",
            "logo" => "https://www.carlogos.org/car-logos/daimler-logo.png",
            "details" => "Manufacturer",
            "date" => "1886-Present",
        ],
        [
            "name" => "Opel",
            "logo" => "https://www.carlogos.org/car-logos/opel-logo.png",
            "details" => "Mass-Market Cars",
            "date" => "1862-Present",
        ],
        [
            "name" => "Datsun",
            "logo" => "https://www.carlogos.org/car-logos/datsun-logo.png",
            "details" => "Light Trucks, Economy Cars",
            "date" => "1931-Present",
        ],
        [
            "name" => "Holden",
            "logo" => "https://www.carlogos.org/car-logos/holden-logo.png",
            "details" => "Mass-Market Cars",
            "date" => "1856-Present",
        ],
        [
            "name" => "Smart",
            "logo" => "https://www.carlogos.org/car-logos/smart-logo.png",
            "details" => "Luxury Small Cars",
            "date" => "1994-Present",
        ],
        [
            "name" => "Alpine",
            "logo" => "https://www.carlogos.org/car-logos/alpine-logo.png",
            "details" => "Sports Cars, Racing Cars",
            "date" => "1955-Present",
        ],
        [
            "name" => "DS",
            "logo" => "https://www.carlogos.org/car-logos/ds-logo.png",
            "details" => "Luxury Vehicles",
            "date" => "2009-Present",
        ],
        [
            "name" => "Navistar",
            "logo" => "https://www.carlogos.org/car-logos/navistar-logo.png",
            "details" => "Manufacturer",
            "date" => "1993-Present",
        ],
        [
            "name" => "Nissan Nismo",
            "logo" => "https://www.carlogos.org/car-logos/nissan-nismo-logo.png",
            "details" => "High Performance",
            "date" => "1984-Present",
        ],
        [
            "name" => "Pagani",
            "logo" => "https://www.carlogos.org/car-logos/pagani-logo.png",
            "details" => "Supercars",
            "date" => "1992-Present",
        ],
        [
            "name" => "Rover",
            "logo" => "https://www.carlogos.org/car-logos/rover-logo.png",
            "details" => "Manufacturer",
            "date" => "1878-2005",
        ],
    ];


    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach ($this->data as $brand) {
            Brand::create($brand);
        }
    }
}
