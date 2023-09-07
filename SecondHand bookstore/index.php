<?php
    session_start();
    if (isset($_SESSION["SESSION_EMAIL"])) {
        header("Location: WelcomeToBookStore.php");
    }
	
	if (isset($_POST["login"])) {
        include 'DBConn.php';
		
		$username = mysqli_real_escape_string($dbConnection, $_POST["username"]);
        $password = mysqli_real_escape_string($dbConnection, md5($_POST["password"]));

        $sql = "SELECT * FROM tbluser WHERE Username='{$username}' AND Password='{$password}'";
        $result = mysqli_query($dbConnection, $sql);
        $count = mysqli_num_rows($result);

//check the rowsadded 
        if ($count === 1) {
            
                $_SESSION["SESSION_EMAIL"] = $username;
                header("Location: WelcomeToBookStore.php");
            
            //or else the details are incorrect
        }else {
            echo "<script>alert('Your Login details is incorrect.');</script>";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Login</title>
</head>
<body>
    <div class="wrapper">

        <h2 class="title">Login</h2>
        <form action="" method="post" class="form">
            <div class="input-field">
                <label class="input-label">Username</label>
                <input type="text" name="username" id="user" class="input" placeholder="Enter your Username" required>
            </div>
             <div class="input-field">
                <label class="input-label">StudentNumber</label>
                <input type="text" name="stdNumber" id="user" class="input" placeholder="Enter your StudentNumber" required>
            </div>
            <div class="input-field">
                <label for="password" class="input-label">Password</label>
                <input type="password" name="password" id="password" class="input" placeholder="Enter your password" required>
            </div>
            <button class="btn" name="login">Login</button>
            <p>Create Account! <a href="register.php">Register</a>.</p>
   <p><a href="createTable.php" style="color: red;">Create Tables</a></p>
        </form>
          <a href="adminlogin.php"><button class="btn">Admin Login</button></a>

    </div>
</body>
</html>