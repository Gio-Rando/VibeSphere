<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./assets/icon2.png" type="image/x-icon">
    <title>VibeSphere</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="style.css?v=1.0">
</head>
<body>
    <div  class = "entire">
        <h1>Authorization</h1>
        <form method = "POST" >
        <div class ="form" >

            <input class= "input1" type="text" placeholder= "Name" id="name"  maxlength = "8" max = "8" name="name" required>

            <input name = "Pass" class= "input1" type="Password" placeholder ="Password" required maxlength = "8" max = "8">

            <input name = "CPass" class= "input1" type="Password" placeholder ="Confirm Password" required maxlength = "8">

            <input class= "button" value = "Sign up" type="submit">
        </div>
            <?php
            session_start();

            if ($_SERVER["REQUEST_METHOD"] === "POST") {
                $name = htmlspecialchars($_POST["name"]);
                $pass = htmlspecialchars($_POST["Pass"]);
                $cpass = htmlspecialchars($_POST["CPass"]);

                if ($pass === $cpass and $pass === "12345678") {
                    $_SESSION['username'] = $name;
                    header("location: index.php");
                    exit();
                } else {
                    echo "<p style='color:rgb(225, 0, 166); font-weight: 800;'>Password or its confirmation are incorrect</p>";
                }
            }
            ?>
        </form>
    </div>
</body>
</html>
