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
