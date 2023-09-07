<?php 	
 session_start();
include 'DBConn.php';


 error_reporting(0);


//if it exits
if($exists !== FALSE)
{
    //this will check if table exists or not

$open = fopen("UserData.txt", "r");


$exists = mysqli_query($dbConnection, "select 1 from tbluser");
    //delete the table
    $drop = "delete from tbluser";
     $dbConnection->query($drop);
     //create table again by reloading information
    while (!feof($open)){
    $getff = fgets($open);
    $put = explode(",", $getff);
    list($username,$studentnumber,$password) = $put;
    
    $query = "insert into tbluser (Username,StudentNumber,Password) values ('$username','$studentnumber','$password')";
      
      //store the query into the database connection
        $dbConnection->query($query );
     
}
echo "<script>alert('Table Exists and table content has been deleted and added from txt file');</script>";

//close the file
fclose($file);

 
}
//if it doesnt exist
else{
   echo "<script>alert('Table Does not Exist');</script>";
}

 ?>

