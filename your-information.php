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
        <h1><b>Information provided by you</b></h1>
        <?php 
            $name = $_POST['name'];
            $age = $_POST['age'];
            $email = $_POST['email'];
            $website = $_POST['website'];
            $comment = $_POST['comment'];
            $gender = $_POST['gender'];
        ?>            
        <table class="table">        
            <tr>
                <td>Name: </td>
                <td><?php echo $name; ?></td>
            </tr>
            
            <tr>
                <td>Age : </td>
                <td><?php echo $age; ?></td>
            </tr>
            
            <tr>
                <td>Email: </td>
                <td><?php echo $email; ?></td>
            </tr>            
            
            <tr>
                <td>Website: </td>
                <td><?php echo $website; ?></td>
            </tr>
            
            <tr>
                <td>Comment: </td>
                <td><?php echo $comment; ?></td>
            </tr>
            
            <tr>
                <td>Gender: </td>
                <td><?php echo $gender; ?></td>
            </tr>
        </table>
    </body>
</html