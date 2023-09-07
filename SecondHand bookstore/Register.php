<?php
    session_start();
    if (isset($_SESSION["SESSION_EMAIL"])) {
        header("Location: WelcomeToBookStore.php");
    }

    if (isset($_POST["submit"])) {
        //database connection included
        include 'DBConn.php';
//initialize variables
        $username = mysqli_real_escape_string($dbConnection, $_POST["username"]);
        $studentNumber = mysqli_real_escape_string($dbConnection, $_POST["studentNumber"]);
        //Passwords hashed via md5 hasher before storedinto database
        $password = mysqli_real_escape_string($dbConnection, md5($_POST["password"]));
        $cpassword = mysqli_real_escape_string($dbConnection, md5($_POST["cpassword"]));
       
        if (mysqli_num_rows(mysqli_query($dbConnection, "SELECT * FROM tbluser WHERE Username='{$username}'")) > 0) {
            echo "<script>alert('{$username} - This Username has already taken.');</script>";
        }else {
            if ($password === $cpassword) {
                $sql = "INSERT INTO tbluser (Username, StudentNumber, Password) VALUES ('{$username}', '{$studentNumber}', '{$password}')";
                $result = mysqli_query($dbConnection, $sql);

                if ($result) {
                     echo "<script>alert('Succesful Registration');</script>";
                    //header("Location: index.php");
                }else {
                    echo "<script>Error: ".$sql.mysqli_error($dbConnection)."</script>";
                }
            }else {
                echo "<script>alert('Password and confirm password do not match.');</script>";
            }
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Css/style.css">
    <title>Register</title>
</head>
<body>
    <div class="wrapper">
        <h2 class="title">Register</h2>
        <form action="" method="post" class="form">
            <div class="input-field">
                <label for="userName" class="input-label">Username</label>
                <input type="text" name="username" id="name" class="input" placeholder="Enter Username" required>
            </div>
            <div class="input-field">
                <label for="studentnumber" class="input-label">Student Number</label>
                <input type="text" name="studentNumber" id="email" class="input" placeholder="Enter Student Number" required>
            </div>
            <div class="input-field">
                <label for="password" class="input-label">Password</label>
                <input type="password" name="password" id="password" class="input" placeholder="Enter your password" required>
            </div>
            <div class="input-field">
                <label for="cpassword" class="input-label">Confirm Password</label>
                <input type="password" name="cpassword" id="cpassword" class="input" placeholder="confirm password" required>
           
            <button class="btn" name="submit">Register</button>
            <p>You have already an account! <a href="index.php">Login</a>.</p>
           <!-- <p><a href="createTable.php" style="color:red;">Create Tables</a></p>-->
          
        </form>

    </div>
</body>
</html>