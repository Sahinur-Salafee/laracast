<h2>Array</h2>
<?php

$cars = ['Tesla', 'Mercedes', 'Audi', 'Ferrari'];

?>

<ul>
    <?php 
        foreach($cars as $car) {
            echo "<li>$car</li>";
        }

        foreach($cars as $car) : ?>
            <li><?php echo $car; ?></li>
        <?php endforeach; ?>
</ul>

<h2>Functions and Filters.</h2>

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
            "website" => 'https://www.tesla.com/roadster',
            "company" => 'Tesla Inc',
            "companyUrl" => 'https://www.tesla.com',
            "price" => 32000
        ], 
        [
            "name" => "Tesla S",
            "model" => "Model S",
            "website" => 'https://www.tesla.com/roadster',
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
?>

<h2>Cars Filtered by Company Using Functions.</h2>

<ul>
    <?php foreach($filteredCarsLists as $car): ?>
        <li>
            <a href="<?php echo $car['website'] ?>" target="_blank">
                <?php echo $car['name']; ?>
            </a>
            by 
            <a href="<?php echo $car['companyUrl']?>">
                <?php echo $car['company']; ?>
            </a>
        </li>
    <?php endforeach; ?>
</ul>