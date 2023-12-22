<?php



$servername="localhost";



$username="root";



$password= "";



$database="micro_lab";



$con= mysqli_connect($servername,$username,$password,$database);

$s= "SELECT no FROM serials ORDER BY no DESC LIMIT 1;";

$q= mysqli_query($con,$s);



if($q)

{
    if (mysqli_num_rows($q) > 0) {
    while($row=mysqli_fetch_assoc($q))

    {
        $n = $row["no"];
        

        $i= "UPDATE purchase SET serial=".$n." WHERE serial= 0;" ;

        $q1= mysqli_query($con,$i);

        if($q1)
        {
            $s1= "UPDATE purchase pu
            INNER JOIN products p ON pu.p_code = p.p_code
            SET pu.p_name = p.p_name, pu.quantity = p.quantity, pu.price = p.price;";

            $q2= mysqli_query($con,$s1);
            
            if($q2)
            {

                header('Location:saveCustomerInfo.php');

            }
            
        }


    }
} 

    
}








?>