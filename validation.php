<html>
<head>
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="custom-style.css">
</head>
<body>
    <?php
        $nameERR = $emailERR = $genderERR = $websiteERR = "";
        $name = $email = $gender = $comment = $website = "";

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            
            $name = test_input($_POST["name"]);        
            if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
            $nameErr = "Only letters and white space allowed";
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
        <h1>PHP Form Validation</h1>
        <form action="your-information.php" method="post">
            <span class="error" style="color:red">
                *required field
            </span>
            <br><br>    

            Name: <input type="text" name="name" value="">
            <span class="error" style="color:red">*</span>
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