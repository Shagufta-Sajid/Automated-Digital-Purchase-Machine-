<?php



$servername="localhost";



$username="root";



$password= "";



$database="micro_lab";



$con= mysqli_connect($servername,$username,$password,$database);


$name= $_POST['c_name'];
$number= $_POST['number'];

$s= "SELECT no FROM serials ORDER BY no DESC LIMIT 1;";

$q= mysqli_query($con,$s);



if($q)

{
    if (mysqli_num_rows($q) > 0) {
    while($row=mysqli_fetch_assoc($q))

    {
        $n = $row["no"];
        

        $u= "UPDATE purchase SET name='".$name."',phone='".$number."' WHERE serial=".$n.";" ;

        $q1= mysqli_query($con,$u);
        if($q1)
        {
            sleep(3);
            header('Location:homepage.php');
        }

       


    }
} 

    
}








?>