<?php



$servername="localhost";



$username="root";



$password= "";



$database="micro_lab";



$con= mysqli_connect($servername,$username,$password,$database);

$insert= "INSERT INTO serials (a) VALUES ('new')";

$q= mysqli_query($con,$insert);



if($q)

{
    header('Location:homepage.php');

}







?>