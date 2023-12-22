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


/* 
.footer {

  text-align: center;

  padding: 0.1px ;

  background-color:#643B70 ;

  color: white; 

  margin: 35em 0em 0em 0em;

} */



/* .column {

  float: center;

  width: 98%;

  padding: 15px;

} */

.column1 {

  float: left;

  width: 45%;

  padding: 10px;

  height: 10px;

  align: center; 

}



.column2 {

  float: left;

  width: 45%;

  padding: 10px ;

  height: 10px; 

  align: center;

}





.row:after {

  content: "";

  display: table;

  clear: both;

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

.content {

  padding: 40px 650px;


 

}





</style>









</head>

<body>



<div class="site-header">

  <div class="site-identity">

    <a href="#"><img src="Digital Purchase store.png" alt="Site Name" /></a>

    

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



<div class="content">

<div class="row">

<div class="column1">
<a href="newCustomer.php" class="button"><b>New Customer</b></a>
</div>

<div class="column2">
<a href="finishPurchase.php" class="button" ><b>Finish Purchasing</b></a>
</div>

</div>


</div>

<div class="footer">

       

<p>Powered By <b>AIMERS</b></p>

</div>



  

</body>

</html>