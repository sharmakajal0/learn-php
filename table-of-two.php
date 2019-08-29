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
<html>
    <head>
        <link rel="stylesheet" href="bootstrap.min.css">
    </head>
<body>
    <form action="table-2.php" method="post"></form>
        <?php
            $x = 2;
        for ($i = 1; $i <= 10; $i++) {
            $y = $x * $i;
            echo "<b>$x x $i = $y<br><b><hr>";
        }
        ?>
</body>
</html>