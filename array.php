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

<h2>Associative Array</h2>

<?php
    $cars = [
        [
            "name" => "Tesla Roadster",
            "model" => "Roadster",
            "website" => 'https://www.tesla.com/roadster',
            "company" => 'Tesla Inc',
            "companyUrl" => 'https://www.tesla.com'
        ],
        [
            "name" => "Tesla X",
            "model" => "X",
            "website" => 'https://www.tesla.com/roadster',
            "company" => 'Tesla Inc',
            "companyUrl" => 'https://www.tesla.com'
        ], 
        [
            "name" => "Tesla S",
            "model" => "S",
            "website" => 'https://www.tesla.com/roadster',
            "company" => 'Tesla Inc',
            "companyUrl" => 'https://www.tesla.com'
        ],
        [
            "name" => "Audi",
            "model" => "Audi A7",
            "website" => 'https://www.audi-mediacenter.com/en/audi-a7-sportback-12055',
            "company" => 'Audi AG',
            "companyUrl" => 'https://www.audi-mediacenter.com'
        ]
    ];
        
    function filteredByCompany($cars) {
        $filteredCars = [];
        foreach($cars as $car) {
            if($car['company'] === 'Tesla Inc') {
                $filteredCars[] = $cars;
            }
        }

        return $filteredCars;
    }

    filteredByCompany($cars);
?>
<ul>
    <?php foreach($cars as $car): ?>
            
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

<h2>Cars Filtered by Company.</h2>
<ul>
    <?php foreach($cars as $car): ?>
        <?php if($car['company'] === 'Tesla Inc'): ?>
        <li>
            <a href="<?php echo $car['companyUrl'] ?>">
                <?php echo $car['name']; ?>
            </a>
        </li>
    <?php endif; ?>
    <?php endforeach; ?>
</ul>

<h2>Cars Filtered by Company Using Functions.</h2>

<ul>
    <?php foreach($cars as $car): ?>
            
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