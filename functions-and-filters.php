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

    var_dump($cars);

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

<h2>More Generic Cars Filtered by Any Parameter Using Functions.</h2>

<?php

    /**
     * return items by key value pairs.
     */
    function filter($items,$key,$value) {
        $filteredItems = [];
        foreach($items as $item) {
            if($item[$key] === $value) {
                $filteredItems[] = $item;
            }
        }

        return $filteredItems;
    }
    // filter cars by company.
    $filteredCarItems = filter($cars,'company','Tesla Inc')
?>

<h4>Car Names Filter by Company</h4>
<ul>
    <?php foreach($filteredCarItems as $item): ?>
        <li>
            <a href="<?php echo $item['website'] ?>" target="_blank">
                <?php echo $item['name']; ?>
            </a>
            by 
            <a href="<?php echo $item['companyUrl']?>">
                <?php echo $item['company']; ?>
            </a>
        </li>
    <?php endforeach; ?>
</ul>

<h4>Car Filter by Model</h4>
<ul>
    <?php 
        $filteredCarItemByModel = filter($cars,'model', 'Model S');
        foreach($filteredCarItemByModel as $item):
    ?>
        <li>
            <a href="<?php echo $item['website'] ?>" target="_blank">
                <?php echo $item['name']; ?>
            </a>
            by 
            <a href="<?php echo $item['companyUrl']?>">
                <?php echo $item['model']; ?>
            </a>
        </li>
    <?php endforeach; ?>
</ul>

<h4>Car Filter by Price under or equal 30k</h4>

<ul class="price">
    <?php 
        $filteredCarItemByPrice = filter($cars,'price', 30000);
        foreach($filteredCarItemByPrice as $item):
            if($item['price'] <= 30000):
    ?>
        <li>
            <a href="<?php echo $item['website'] ?>" target="_blank">
                <?php echo $item['name']; ?>
            </a>
            
            <p>price is $<?php echo $item['price']; ?></p>
        </li>
        <?php endif; ?>
    <?php endforeach; ?>
</ul>

<h4>Car Filter by Price under or equal 35k</h4>

<ul class="price">
    <?php 
        $filteredCarItemByPrice = filter($cars,'price', 35000);
        foreach($filteredCarItemByPrice as $item):
            if($item['price'] === 35000):
    ?>
        <li>
            <a href="<?php echo $item['website'] ?>" target="_blank">
                <?php echo $item['name']; ?>
            </a>
            
            <p>price is $<?php echo $item['price']; ?></p>
        </li>
        <?php endif; ?>
    <?php endforeach; ?>
</ul>


<h4>Car Filter Using Lambda Function.</h4>
<?php 
      function filters($items,$func) {
        $filteredItems = [];
        foreach($items as $item) {
            if($func($item)) {
                $filteredItems[] = $item;
            }
        }

        return $filteredItems;
    }
?>

<ul class="price">
    <?php 
        $filteredCarByPrice = filters($cars,function($car){
            return $car['price'] <= 35000;
        });
        foreach($filteredCarByPrice as $item):
    ?>
        <li>
            <a href="<?php echo $item['website'] ?>" target="_blank">
                <?php echo $item['name']; ?>
            </a>
            
            <p>price is $<?php echo $item['price']; ?></p>
        </li>
    <?php endforeach; ?>
</ul>