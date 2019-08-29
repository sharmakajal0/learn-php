<?php
    $cars = array("Volvo", "BMW", "Toyota");
    echo "I like " . $cars[0] . " ," . $cars[1] . " and " . $cars[2] . " .<br><br>";

    echo "The number of elements in the array is: ";
    echo count($cars);

    echo "<h2> Looping through Indexed array </h2>";
    $arrlength = count($cars);
    for($x = 0; $x<= $arrlength; $x++) {
        echo $cars[$x];
        echo "<br>";
    }
    echo "<br>";

    $age = array("Chandan"=>"22",
        "kanchan"=>"25",
        "Manish"=>"27",
        "saraswati"=>"17"
    );
    echo "Saraswati is " . $age['saraswati'] . " years old .<br><br>";

    foreach($age as $x => $x_value) {
        echo "Name : " . $x ." Sharma; Age : " . $x_value . " years old. <br>";
    }
    echo "<br>";

    sort($cars);
    for($x = 0; $x<= $arrlength; $x++) {
        echo $cars[$x] . "<br>";
    }
    $numbers = array(54, 34, 23, 6, 5, 24, 4, 3446, 54, 656, 546, 43);
    sort($numbers);
    for($c = 0; $c <= count($numbers); $c++) {
        echo $numbers[$c] . "<br>";
    }
    echo "<br>";
    $numbers = array(54, 34, 23, 6, 5, 24, 4, 3446, 54, 656, 546, 43);
    rsort($numbers);
    for($c = 0; $c <= count($numbers); $c++) {
        echo $numbers[$c] . "<br>";
    }
    echo "<br>";
?>