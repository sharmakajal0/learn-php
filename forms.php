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
   /**
    * Template Class Doc Comment
    * 
    * Template Class
    * 
    * @category Template_Class
    * @package  Template_Class
    * @author   Author <author@domain.com>
    * @license  https://opensource.org/licenses/MIT MIT License
    * @link     http://localhost/
    */
?>
<html>
<head>
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="custom-style.css">
</head>
<body>
    <?php
        $name = $email = $gender = $comment = $website = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $name = Test_input($_POST["name"]);
            $email = Test_input($_POST["email"]);
            $website = Test_input($_POST["website"]);
            $comment = Test_input($_POST["comment"]);
            $gender = Test_input($_POST["gender"]);
    }
    /**
     * Define data file.
     * 
     * @param string $data comment about this variable
     * 
     * @return $data
     */
    function Test_input($data) 
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    ?>
    <div class="container">
        <h1>PHP Form Validation</h1>
        <form action="your-information.php" method="post">
            <span class="error" style="color:red">
                *required field
            </span>
            <br><br>

            Name: <input type="text" name="name" value="">
            <span class="error" style="color:red">*</span>
            <br><br>
            
            Age: <input type="text" name="age" value="">
            <br><br>

            
            Email: <input type="text" name="email" value="">
            <span class="error" style="color:red">*</span>
            <br><br>
            
            Website: <input type="text" name="website" value="">
            <span class="error"></span>
            <br><br>
            
            comment: <textarea name="comment" cols="20" rows="3"></textarea>
            <br><br>
            
            Gender: 
            <label>
                <input type="radio" name="gender" value="female">Female
                <input type="radio" name="gender" value="male">Male
                <input type="radio" name="gender" value="others">others
            </label>
            <span class="error" style="color: red">*</span>
                <br><br>
                
                <input type="submit" value="submit">
        </form>
    </div>    
</body>
</html>