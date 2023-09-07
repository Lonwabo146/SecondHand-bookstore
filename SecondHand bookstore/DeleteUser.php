<?php 
include('DBConn.php');
if(!$dbConnection){
	die('error in db' . mysqli_error($dbConnection));
}
$id = $_GET['Id'];

$qry = "delete from tblbooks where Id = $id";

if(mysqli_query($dbConnection, $qry)){
header('location: admin.php');

}else{
	echo mysqli_error('$dbConnection');
}

 ?>
