<?php 

echo '<h2>Conditions and Booleans</h2>';
$book = 'Quran';
$arabic = true;
if($arabic == true) {
    echo '<h4>You can read the ' . $book;
} else {
    echo '<h4>You cannot read.</h4>';
}
?>