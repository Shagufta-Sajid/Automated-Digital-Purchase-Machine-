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

  padding: 15px;

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

input[type=text] {

width: 300px;

box-sizing: border-box;

border: 2px solid #ccc;

border-radius: 4px;

font-size: 16px;

background-color: whitesmoke;

background-image: url("Hnet.com-image.png");

background-position: 10px 10px; 

background-repeat: no-repeat;

transition: width 0.4s ease-in-out;

padding: 10px 32px;

margin: 30px 10px;

}



input[type=text]:focus {

width: 40%;

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
<form action="search1.php" method="post">
<input type="text"  type="submit" name="id" placeholder="Search By Customer Number...    press ENTER">
</form>


</div>


<div class="footer">

       

<p>Powered By <b>AIMERS</b></p>

</div>



  

</body>

</html>

