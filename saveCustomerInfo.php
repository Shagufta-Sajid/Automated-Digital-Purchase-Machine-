<!DOCTYPE html>

<html lang="en">

<head>

  <meta charset="UTF-8">

  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  

<style>



body {

  font-family: Helvetica;

  margin: 0;

}

a {

  text-decoration: none;

  color: #000;

}

.site-header { 

  border-bottom: 1px solid #ccc;

  padding: .5em 1em;

}



.site-header::after {

  content: "";

  display: table;

  clear: both;

}



.site-identity {

  float: left;

}







.site-identity img {

  max-width: 175px;

  float: left;

  margin: -70px 10px -75px 10px;

}



.site-navigation {

  float: right;

  font-size: 25px



  

  

}



.site-navigation ul, li {

  margin: 0; 

  padding: 0;

}



.site-navigation li {

  display: inline-block;

  margin: 0.2em 2em 0.5em 1em;

}

a:hover {

  background-color: #A6A6A6;

}

  

.button {

  background-color:#643B70 ;

  border: none;

  color: white;

  padding: 15px 32px;

  text-align: center;

  text-decoration: none;

  display: inline-block;

  font-size: 25px;

  margin: 10px 10px;

  cursor: pointer;

  

  

}




.button {border-radius: 5px;}

.button:hover {

  background-color: #A6A6A6;

}






 .column {

  float: center;

  width: 98%;

  padding: 0px;

} 




.footer {

   position: fixed;

   left: 0;

   bottom: 0;

   width: 100%;

   background-color: #643B70;

   color: white;

   text-align: center;

}


table {
    border-collapse: collapse;

border: 1px solid black;

width: 99%;

padding: 10px 32px;

margin: 40px 10px;
}

th, td {
  text-align: center;
  padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}

th {
  background-color: #C29FCD;
  color: white;
}

input[type=text]{

width: 100%;

padding: 12px 20px;

margin: 8px 0;

display: inline-block;

border: 1px solid #ccc;

box-sizing: border-box;

}

form {border: 6px solid #643B70;

width: 25% ;

height: 50%;

margin: 50px 30px 0px 627px;



}


.container {

padding: 16px;



}


</style>









</head>

<body>



<div class="site-header">

  <div class="site-identity">

    <a href="homepage.php"><img src="Digital Purchase store.png" alt="Site Name" /></a>

    

  </div>  

  <nav class="site-navigation">

    <ul class="nav">

      <li><a href="homepage.php" style="color:#643B70;"><b>Home</b></a></li>  

      <li>

         <a href="search.php" class="button"><b>Purchase Details</b></a> 

      </li> 

    </ul>

  </nav>

</div>

<div class="column">

</div>



<div class="footer">

       

<p>Powered By <b>AIMERS</b></p>

</div>



  

</body>

</html>


<?php

$servername="localhost";



$username="root";



$password= "";



$database="micro_lab";


$con= mysqli_connect($servername,$username,$password,$database);

$s1= "SELECT no FROM serials ORDER BY no DESC LIMIT 1;";

$q1= mysqli_query($con,$s1);



if($q1)

{
    if (mysqli_num_rows($q1) > 0) {
    while($row=mysqli_fetch_assoc($q1))

    {
        $n = $row["no"];
        $s= "SELECT p_name, quantity, price,COUNT(*) AS total_packets, SUM(price) AS total_price FROM purchase WHERE serial=".$n." GROUP BY p_name, quantity, price;";

        $q= mysqli_query($con,$s);

        if($q)
        {
            echo'<table>';

            echo'<tr>';

            echo'<th>No</th>';

            echo'<th>Product Name</th>';

            echo'<th>Quantity</th>';

            echo'<th>Price</th>';

            echo'<th>Total Packets</th>';

            echo'<th>Total Price</th>';

            echo'</tr>';
            $a=1;

            if (mysqli_num_rows($q) > 0)



            {

            while($row= mysqli_fetch_assoc($q))



            { 
                echo'<tr>';

                echo'<td>'.$a.'</td>';

                echo'<td>'.$row["p_name"].'</td>';

                echo'<td>'.$row["quantity"].'</td>';

                echo'<td>'.$row["price"].'</td>';

                echo'<td>'.$row["total_packets"].'</td>';

                echo'<td>'.$row["total_price"].'</td>';
                $a=$a+1;

                echo'</tr>';



            }
           
            }

            echo'</table>';
            





        }

        $s2= "SELECT SUM(price) as total_bill FROM purchase WHERE serial=".$n.";";

        $q2= mysqli_query($con,$s2);

        if($q2)
        {
            echo'<table>';

            echo'<tr>';

            echo'<th>Total Bill (VAT inclusive)</th>';

            echo'</tr>';

            if (mysqli_num_rows($q2) > 0)



            {

            while($row= mysqli_fetch_assoc($q2))



            { 
                echo'<tr>';

                echo'<td>'.$row["total_bill"].' TK </td>';
                echo'</tr>';

            } } 
            
            echo'</table>';


        }




        

        









    }
}
}        





echo'<form action="updatingInfo.php" method="post">';

echo'<div class="container">';

echo'<input type="text" placeholder="Enter Customer Name" name="c_name" required><br>';

echo'<input type="text" placeholder="Enter Customer Number" name="number" required><br>';

echo'<button type="submit" >Save Information</button>';

echo'</div>';

echo'</form>';



?>