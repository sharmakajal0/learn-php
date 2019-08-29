<?php
    function mytest() {
        static $x = 0;
        echo "$x<br>";
        $x++;
    }
    mytest();
    mytest();
    mytest();
    
    echo "<hr>";
    echo "<h2>(PHP is Fun)</h2>";
    echo "Hello, World<br>";
    echo "I'm about to learn PHP<br>";
    echo "This", "string", "was", "made", "with multiple parameters";
    
    echo "<hr>";
    
    $txt1 = "Learn PHP";
    $txt2 = "W3Schools.com";
    $x = 5.2;
    $y = 10;
    echo "<h2>" . $txt1 . "</h2>";
    echo "Study PHP at " . $txt2 . "<br>";
    echo $x + $y . "<br>";
    
    echo "<hr>";
    
    $cars = array("car1: Ferrari", "car2: McLaren", "car3: Bugatti");
    var_dump($cars);

    echo "<hr>";

    echo "<br>";
    class Car {
        function Car() {
            $this->model = "VW";
        }
    }
    $herbie = new Car();
    echo "The name of the model is : " . $herbie->model . "<br>";
    
    echo "<hr>";
    
    var_dump($z);

    print "<hr>";
    $txt3 = "Hello, World";
    echo strlen($txt1) . "<br>";
    echo strlen($txt2) . "<br>";
    echo strlen($txt3) . "<br>";
    echo str_word_count($txt1) . "<br>";
    echo str_word_count($txt2) . "<br>";
    echo str_word_count($txt3);

    echo "<hr>";
    echo strrev($txt1) . "<br>";
    echo strrev($txt2) . "<br>";
    echo strrev($txt3);

    echo "<hr>";

    echo strpos("Learn PHP", "PHP");
    echo strpos("W3schools", "Hello");

    echo "<hr>";
    echo str_replace("chandan", "kajal", "my name is chandan");
    echo "<hr>";
    define ("GREETINGS", "Welcome to W3Schools");
    echo GREETINGS;
    echo "<hr>";
    define ("GREETINGS", "Welcome to W3Schools", true);
    echo greetings;

    echo "<hr>";
    define ("cars", [
        "toyota",
        "bmw",
        "Alfa Romeo"
    ]);

    echo cars[0] . "<br>";
    echo cars[1] . "<br>"; 
    echo cars[2] . "<br>";

    echo "<hr>";
    echo $txt1 . $txt2;
    echo $txt2 .= $txt1 . "<br>";

    echo "<hr>";
    $a = 5;
    $b = 6;
    if ($a > 0) {
        echo "A is greater than 0";
    } elseif ( $a > $b) {
        echo "a is smaller than b";
    } else {
        echo "this is the default statement";
    }

    echo "<br><hr>";
    foreach($cars as $value) {
        echo "$value <br>";
    }
    echo "<hr>";
    
    function familyName($fname) {
        echo "$fname Sharma<br>";
    }
    
    familyName("Jani");
    familyName("Hege");
    familyName("Stale");
    familyName("Kai Jim");
    familyName("Borge"); 
    
    echo "<hr>";
    function familyName2($fname, $fyear) {
        echo "$fname Sharma was born in $fyear <br>";
    }
    
    familyName2("Ram Naresh", "1971"); 
    familyName2("Manish", "1991");
    familyName2("Kanchan", "1993");
    familyName2("Chandan", "1997");
    familyName2("Saraswati", "2002");
    
?>
