
<?php 
/*Connect to Database*/
$servername="localhost";
$dbname="application";
$username="root";
$password="";



$conn=mysqli_connect($servername,$username,$password,$dbname);

 if(!$conn){
 	die ("Connection failed".mysqli_error());
 }
?>

