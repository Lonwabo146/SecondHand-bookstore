<?php
    session_start();
    if (!isset($_SESSION["SESSION_EMAIL"])) {
        header("Location: AdminLogin.php");
    }
    include 'DBConn.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Css/style.css">
    <title>Logged in User</title>
</head>
<body>
    
    <div class="as">
        <?php
            $sql = "SELECT * FROM tbladmin WHERE Username='{$_SESSION["SESSION_EMAIL"]}'";
            $result = mysqli_query($dbConnection, $sql);

            if (mysqli_num_rows($result) > 0) {
                $row = mysqli_fetch_assoc($result);
        ?>
        <h1>Admin Dashboard</h1>
        <h2>Welcome, <?php echo $row["Username"]; ?> <span class="form"><p><a href="logout.php">Logout</a></p></span></h2>
        <?php } ?>
        <h3>Books</h3>
      <table style="width: 80%" border="1">
         <tr>
            <th>ID</th>
            <th>Username</th>
            <th>StudentNumber</th>
            <th>Password</th>
            <th>Operations</th>
         </tr>
         <?php 
         $i =0;
$qry = "select * from tblbooks";
$run =$dbConnection -> query($qry);
if($run -> num_rows > 0){
   while($row = $run -> fetch_assoc()){

   $Id = $row['Id'];
?>
         <tr>
            <td><?php echo $i++; ?></td>
            <td><?php echo $row['Title'] ?></td>
            <td><?php echo $row['Price'] ?></td>
           
         
            <td>
               <a href="edit.php">Update</a>
               <a href="deleteUser.php?Id=<?php echo $Id;?>" onclick="return confirm('are you sure?')">Delete</a>
            </td>
         </tr>
         <?php 
             }
          }
          ?>
      </table>
   </div>
</body>
</html>