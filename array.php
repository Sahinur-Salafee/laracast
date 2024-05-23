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
            "name" => "Tesla",
            "model" => "Roadster",
            "website" => 'https://www.tesla.com/roadster'
        ],
        [
            "name" => "Audi",
            "model" => "Audi A7",
            "website" => 'https://www.audi-mediacenter.com/en/audi-a7-sportback-12055'
        ]
    ]
?>

<ul>
    <?php foreach($cars as $car): ?>
        
            <li>
                <a href="<?php echo $car['website'] ?>" target="_blank">
                    <?php echo $car['name']; ?>
                </a>
            </li>
        
    <?php endforeach; ?>
</ul>
