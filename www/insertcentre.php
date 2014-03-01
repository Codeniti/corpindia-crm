<?php 
  //--------------------------------------------------------------------------
  // Example php script for inserting data to mysql database
  //--------------------------------------------------------------------------
  $host = "localhost";
  $user = "root";
  $pass = "";
  $cid=$_REQUEST['cid'];
  $cname=$_REQUEST['cname'];
  $location=$_REQUEST['loc'];
  $databaseName = "corpindia";
  //--------------------------------------------------------------------------
  // 1) Connect to mysql database
  //--------------------------------------------------------------------------
 $con=mysqli_connect("localhost","root","","corpindia");
  //$dbs = mysql_select_db($databaseName, $con);

   //--------------------------------------------------------------------------
  // 2) Execute query on database
  //--------------------------------------------------------------------------
  mysqli_query($con,"insert into centre values ('$cid','$cname','$location')") or die(mysqli_error());          //query
  header("Location:form.html");
?>
