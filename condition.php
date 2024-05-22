<?php 

echo '<h2>Conditions and Booleans</h2>';
$book = 'Quran';
$arabic = true;
if($arabic) {
    $msg = 'You can read the ' . $book;
} else {
    $msg = 'You cannot read' . $book;
}

echo $msg;
?>