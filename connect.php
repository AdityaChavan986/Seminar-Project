
<?php

$connection = mysqli_connect('localhost','root','','proj_db');




// get the post records
$ModelName = $_POST['ModelName'];
$Processor = $_POST['Processor'];
$RAM = $_POST['RAM'];
$GPU = $_POST['GPU'];
$Address = $_POST['Address'];

   $request = " insert into porj_s(`ModelName`, `Processor`, `RAM`, `GPU`, `Address`) values('$ModelName', '$Processor', '$RAM', '$GPU', '$Address') ";
   mysqli_query($connection, $request);

   header('location:Home.php'); 



?>