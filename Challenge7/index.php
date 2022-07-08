<?php
    require_once 'Person.php';

    $tich53 = new Person('Douetté', 'Richard', 'Deuil La Barre', '20-07-1988');

    echo $tich53 -> identity();
    echo '<br>';
    echo $tich53 -> age() . ' ans';
?>
