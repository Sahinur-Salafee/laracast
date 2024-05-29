<?php
    $cars = [
        [
            "name" => "Tesla Roadster",
            "model" => "Model Roadster",
            "website" => 'https://www.tesla.com/roadster',
            "company" => 'Tesla Inc',
            "companyUrl" => 'https://www.tesla.com',
            "price" => 35000
        ],
        [
            "name" => "Tesla X",
            "model" => "Model X",
            "website" => 'https://www.tesla.com/modelx',
            "company" => 'Tesla Inc',
            "companyUrl" => 'https://www.tesla.com',
            "price" => 32000
        ], 
        [
            "name" => "Tesla S",
            "model" => "Model S",
            "website" => 'https://www.tesla.com/models',
            "company" => 'Tesla Inc',
            "companyUrl" => 'https://www.tesla.com',
            "price" => 30000
        ],
        [
            "name" => "Audi",
            "model" => "Audi A7",
            "website" => 'https://www.audi-mediacenter.com/en/audi-a7-sportback-12055',
            "company" => 'Audi AG',
            "companyUrl" => 'https://www.audi-mediacenter.com',
            "price" => 32000
        ],
        [
            "name" => "Audi",
            "model" => "Audi A4",
            "website" => 'https://www.audi-mediacenter.com/en/audi-a4-24',
            "company" => 'Audi AG',
            "companyUrl" => 'https://www.audi-mediacenter.com',
            "price" => 35000
        ],
        [
            "name" => "Audi",
            "model" => "Audi A3",
            "website" => 'https://www.audi-mediacenter.com/en/audi-a3-sportback-15',
            "company" => 'Audi AG',
            "companyUrl" => 'https://www.audi-mediacenter.com',
            "price" => 30000
        ],
    ];

    // Anonymous function
        
    $filteredByCompany = function ($cars, $company) {
        $filteredCars = [];
        foreach($cars as $car) {
            if($car['company'] === $company) {
                $filteredCars[] = $car;
            }
        }

        return $filteredCars;
    };

    $filteredCarsLists = $filteredByCompany($cars, 'Audi AG');

	require 'index.view.php';