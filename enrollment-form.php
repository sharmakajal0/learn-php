<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Enrollment Form</title>
</head>
<body>
    <?php
        $nameERR = $ageERR = $emailERR = $genderERR = $websiteERR = "";
        $name = $email = $age = $gender = $comment = $website = "";

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            
            $name = test_input($_POST["name"]);        
            if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
            $nameErr = "Only letters and white space allowed";
            }
            
            $age = test_input($_POST["age"]);
            if (!preg_match("/^[0-9]*$/",$age)) {
                $ageERR = "Onlu numbers are allowed";
            }

            $email = test_input($_POST["email"]);
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
                $emailERR = "Invalid Email Format";
            }
            
            $website = test_input($_POST["website"]);
            if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i", $website)) {
                $websiteERR = "Invalid URL";
            }

            if(empty($_POST["comment"])) {
                $comment = "";
            } else {
                $comment = test_input($_POST["comment"]);
            }
            if(empty($_POST["gender"])) {
                $genderERR = "gender is required";
            } else {
                $gender = test_input($_POST["gender"]);
            }
        }
        function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
    ?>
    <div class="container">
        <h1>
            Enrollment Form
        </h1>
    
        <form action="your-information.php">
            Name: <input type="text" name="name" value="">
            <br><br>
            Email: <input type="text" name="email" value="">
            <br><br>
            Age: <input type="numbers" name="age" value="">
            <br><br>
            <button type="submit">submit</button>
        </form>
    </div>
</body>
</html>