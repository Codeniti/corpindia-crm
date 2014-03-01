<?php 
  //--------------------------------------------------------------------------
  // Example php script for inserting data into mysql database
  //--------------------------------------------------------------------------
  $host = "localhost";
  $user = "root";
  $pass = "";
  $uname=$_REQUEST['user'];
  $pass=$_REQUEST['pass'];
  $databaseName = "corpindia";
  //--------------------------------------------------------------------------
  // 1) Connect to mysql database
  //--------------------------------------------------------------------------
 $con=mysqli_connect("localhost","root","","corpindia");
  //$dbs = mysql_select_db($databaseName, $con);

   //--------------------------------------------------------------------------
  // 2) Execute query on database
  //--------------------------------------------------------------------------
  mysqli_query($con,"insert into login values ('$uname','$pass')") or die(mysqli_error());          //query
header("Location:form.html");
?>
