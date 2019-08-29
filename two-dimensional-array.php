<?php
  /**
   * Footer
   *
   * Main footer file for the theme.
   * php version 7.2.10
   * 
   * @category Components
   * @package  BootStrap
   * @author   Your Name <kajalsharma17197@gmail.com>
   * @license  https://www.gnu.org/licenses/gpl-3.0.txt GNU/GPLv3
   * @link     http://localhost/test-php/your-information.php
   */
  require 'util-functions.php';
?>
<?php
    $cars = array
    (
        array("Volvo", 22, 18),
        array("BMW", 15, 13),
        array("Saab", 5, 2),
        array("Land Rover", 17, 15)
    );

    for ($row = 0; $row < 4;$row++) {
        echo "<p><b> Row Number </b></p>";
        echo "<ul>";
        for ($col = 0; $col < 3;$col++) {
            echo "<li>". $cars[$row][$col]."</li>";
        }
        echo "</ul>";
    }
    ?>
<?php
    echo "Today is: " . date("d/m/Y") . "<br>";
    echo "Today is: " . date("d.m.Y") . "<br>";
    echo "Today is: " . date("d,m,Y") . "<br>";
    echo "Today is: " . date("l") . "<br>";
    echo "The time is " . date("h:i:sa") . "<br>";
    date_default_timezone_set("America/Delhi");
    echo "The time in mumbai is: " . date("h:i:sa") . "<br>";
?>

&copy; 2010-<?php echo date("Y")?>
<br>
<?php
    $d=mktime(11, 14, 54, 8, 12, 2014);
    echo "Created date is " . date("Y-m-d h:i:sa", $d);
?> 
