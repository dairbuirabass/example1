
<h2>Info about my cat</h2>
<?php
include 'Cat.php';
$myCat = new Cat();
$myCat->SetColor('orange');
$myCat->SetName('Garfield');
echo 'The color of my cat is '.$myCat->GetColor();
echo 'The name of my cat is '.$myCat->GetName();
?>